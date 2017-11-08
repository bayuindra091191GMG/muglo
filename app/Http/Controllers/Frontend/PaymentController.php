<?php
/**
 * Created by PhpStorm.
 * User: yanse
 * Date: 8/31/2017
 * Time: 11:29 AM
 */

namespace App\Http\Controllers\Frontend;

use App\libs\Midtrans;
use App\libs\RajaOngkir;
use App\libs\TransactionUnit;
use App\libs\Utilities;
use App\Http\Controllers\Controller;
use App\Mail\NewOrderAdmin;
use App\Mail\NewOrderCustomer;
use App\Models\Address;
use App\Models\BankAccount;
use App\Models\Courier;
use App\Models\Custom\DeliveryFee;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Models\Cart;
use App\Models\DeliveryType;
use App\Notifications\TransactionNotify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\In;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Webpatser\Uuid\Uuid;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //set address for shipping
    public function step1(){
        $user = Auth::user();

        $carts = Cart::where('user_id', $user->id)->get();
        if($carts->count() == 0){
            return Redirect::route('cart-list');
        }

        // Get total price
        $totalPrice = 0;
        foreach ($carts as $cart){
            $totalPrice += $cart->getOriginal('total_price');
        }

        // Get total payment
        $totalPayment = $totalPrice;
        if(!empty($carts->first()->getOriginal('delivery_fee'))){
            $totalPayment += $carts->first()->getOriginal('delivery_fee');
        }

        $totalPayment = number_format($totalPayment, 0, ",", ".");

        $addr = Address::where('user_id', $user->id)->first();

        $couriers = Courier::all();
        $deliveryTypes = DeliveryType::all();

        $courierThrow = "";
        $temp = 1;
        //get courier code ex jne:tiki:pos
        foreach($couriers as $courier){
            if($temp < $couriers->count()){
                $courierThrow = $courierThrow.$courier->code.":";
            }
            else{
                $courierThrow = $courierThrow.$courier->code;
            }
            $temp++;
        }

        //get product total weight
        $totalWeight = 0;

        foreach($carts as $cart){
            $totalWeight += ($cart->product->weight * $cart->quantity);
        }

        //rajaongkir process
        $collect = RajaOngkir::getCost('151', 'city', $addr->city_id, 'city', (string)$totalWeight, $courierThrow);
        $results = $collect->rajaongkir->results;

        $deliveries = new Collection();
        foreach ($deliveryTypes as $deliveryType){
            $delivery = new DeliveryFee();
            $delivery->setAgentId($deliveryType->courier_id);
            $delivery->setAgent($deliveryType->courier->code);
            $delivery->setAgentDesc($deliveryType->courier->description);
            $delivery->setShippingId($deliveryType->id);
            $delivery->setShipping($deliveryType->code);
            $delivery->setShippingDesc($deliveryType->description);
            $deliveries->push($delivery);
        }


        foreach($results as $result){
            foreach ($result->costs as $cost){
                foreach($deliveries as $delivery){
                    if($delivery->getAgent() == $result->code && $delivery->getShipping() == $cost->service){
                        $delivery->setFee($cost->cost[0]->value);
                    }
                }
            }
        }

        $data = [
            'addr'          => $addr,
            'deliveries'    => $deliveries,
            'user'          => $user,
            'carts'         => $carts,
            'totalPrice'    => $totalPrice,
            'totalPayment'  => $totalPayment
        ];

        return View('frontend.checkout-step1')->with($data);
//        return View('frontend.checkout-step1');
    }


    //show shipping list
    public function step2(){
        $user = Auth::user();

        $carts = Cart::where('user_id', $user->id)->get();

        // Get total price
        $totalPrice = 0;
        foreach ($carts as $cart){
            $totalPrice += $cart->getOriginal('total_price');
        }

        // Get total payment
        $totalPayment = $totalPrice;
        $totalPayment += $carts->first()->getOriginal('delivery_fee');

        $totalPayment = number_format($totalPayment, 0, ",", ".");

        $methods = PaymentMethod::all();

        $addr = Address::where('user_id', $user->id)->first();

        $data = [
            'carts'         => $carts,
            'methods'       => $methods,
            'totalPrice'    => $totalPrice,
            'totalPayment'  => $totalPayment,
            'addr'          => $addr,
            'user'          => $user
        ];

        return view('frontend.checkout-step2')->with($data);
    }

    public function step2Bank(){
        $user = Auth::user();

        $carts = Cart::where('user_id', $user->id)->get();

        // Get total price
        $totalPrice = 0;
        foreach ($carts as $cart){
            $totalPrice += $cart->getOriginal('total_price');
        }

        // Get total payment
        $totalPayment = $totalPrice;
        $totalPayment += $carts->first()->getOriginal('delivery_fee');

        $totalPayment = number_format($totalPayment, 0, ",", ".");

        // Get bank datum
        $banks = BankAccount::all();

        // Get selected method
        $method = PaymentMethod::where('code', '=', 'manual')->first();

        $data = [
            'carts'         => $carts,
            'totalPrice'    => $totalPrice,
            'totalPayment'  => $totalPayment,
            'user'          => $user,
            'banks'         => $banks,
            'methodId'      => $method->id
        ];

        return View('frontend.checkout-step2-bank')->with($data);
    }


    public function step3(){
        return View('frontend.checkout-success');
    }

    //submit shipping and add data to DB
    public function step1Submit(Request $request){

        $user = Auth::user();
        $userId = $user->id;

        if(Address::where('user_id', $userId)->count() == 0){
            Session::flash('error', 'Isi alamat terlebih dahulu!');

            return redirect()->route('step1');
        }

        if(Input::get('courier_id') == '-1' || Input::get('delivery_type_id') == '-1'){
            Session::flash('error', 'Pilih agen pengiriman!');

            return redirect()->route('step1');
        }

        $carts = Cart::where('user_id', $userId)->get();
        foreach ($carts as $cart){
            $cart->courier_id = Input::get('courier_id');
            $cart->delivery_type_id = Input::get('delivery_type_id');
            $cart->delivery_fee = Input::get('delivery_fee');

            $cart->save();
        }

        return redirect()->route('step2');
    }

    public function step2Submit(Request $request){
        try{
            if(!Auth::check()){
                return Redirect::route('login');
            }
            $user = Auth::user();
            $userId = $user->id;

            if(empty(Input::get('payment'))){
                return redirect()->route('checkout4');
            }

            $method = PaymentMethod::find(Input::get('payment'));

            if($method->code == 'manual'){
                return redirect()->route('step2-bank');
            }

            // Get unique order id
            $orderId = uniqid();

            $adminFee = 0;
            $carts = Cart::where('user_id', $userId)->get();
            if($method->code == 'credit_card'){
                $totalPayment = 0;
                foreach($carts as $cart){
                    $totalPayment += $cart->total_price;
                }
                $totalPayment += $carts->first()->delivery_fee;
                $adminFee = $totalPayment * 3 / 100 + $method->fee;
            }
            else{
                $adminFee = $method->fee;
            }

            foreach($carts as $cart){
                $cart->payment_method = $method->id;
                $cart->admin_fee = $adminFee;
                $cart->save();
            }

            $cartsToMidtrans = $carts;

            if($method->code == 'bank_transfer'){

                TransactionUnit::createTransaction($userId, $orderId);

                Session::forget('cartList');
                Session::forget('cartTotal');
                Session::pull('cartList');
                Session::pull('cartTotal');
            }

            //set data to request
            $transactionDataArr = Midtrans::setRequestData($userId, $method->code, $cartsToMidtrans, $orderId);

            //sending to midtrans
            $redirectUrl = Midtrans::sendRequest($transactionDataArr);

            return redirect($redirectUrl);
        }
        catch (\Exception $ex){
            Utilities::ExceptionLog('checkoutMidtrans EX = '. $ex);
        }
    }

    public function step2BankSubmit(Request $request){
        try{
            if(!Auth::check()){
                return Redirect::route('login');
            }
            $user = Auth::user();
            $userId = $user->id;

            if(empty(Input::get('payment'))){
                return redirect()->route('checkout4');
            }

            $method = PaymentMethod::find(Input::get('payment'));

            // Get unique order id
            $orderId = uniqid();

            $adminFee = 0;
            $carts = Cart::where('user_id', $userId)->get();
            if($method->code == 'credit_card'){
                $totalPayment = 0;
                foreach($carts as $cart){
                    $totalPayment += $cart->total_price;
                }
                $totalPayment += $carts->first()->delivery_fee;
                $adminFee = $totalPayment * 3 / 100 + $method->fee;
            }
            else{
                $adminFee = $method->fee;
            }

            foreach($carts as $cart){
                $cart->payment_method = $method->id;
                $cart->admin_fee = $adminFee;
                $cart->save();
            }

            $cartsToMidtrans = $carts;

            if($method->code == 'bank_transfer'){

                TransactionUnit::createTransaction($userId, $orderId);

                Session::forget('cartList');
                Session::forget('cartTotal');
                Session::pull('cartList');
                Session::pull('cartTotal');
            }
            else if($method->code == 'manual'){
                TransactionUnit::createTransaction($userId, $orderId);

                return redirect()->route('checkout-step-success', ['id' => $orderId]);
            }

            //set data to request
            $transactionDataArr = Midtrans::setRequestData($userId, $method->code, $cartsToMidtrans, $orderId);

            //sending to midtrans
            $redirectUrl = Midtrans::sendRequest($transactionDataArr);

            return redirect($redirectUrl);
        }
        catch (\Exception $ex){
            Utilities::ExceptionLog('checkoutMidtrans EX = '. $ex);
        }
    }

    //checkout item, address, shipping and courier, price
    public function CheckoutProcess3(){
        $user = Auth::user();
        $userId = $user->id;

        //get all item from DB
        $carts = Cart::where('user_id', 'like', $userId)->get();
        $userData = User::where('id', 'like', $userId)->first();
        $userAddress = Address::where('user_id', 'like', $userId)->first();

        $totalPrice = 0;
        $shipping = 0;
        $grandTotal = 0;
        foreach($carts as $cart){
            $totalPriceTem = $cart->getOriginal('total_price');
            $totalPrice +=  $totalPriceTem;
            $shipping = $cart->getOriginal('delivery_fee');

        }
        $grandTotal = $totalPrice + $shipping;

        $totalPrice = number_format($totalPrice, 0, ",", ".");
        $shipping = number_format($shipping, 0, ",", ".");
        $grandTotal = number_format($grandTotal, 0, ",", ".");

        return view('frontend.checkout-step3', compact('carts', 'userData', 'userAddress', 'totalPrice', 'shipping', 'grandTotal'));
    }

    //select payment method
    public function CheckoutProcess4(){
        $user = Auth::user();
        $userId = $user->id;
        $carts = Cart::where('user_id', 'like', $userId)->get();

        $totalPrice = 0;
        $shipping = 0;
        $grandTotal = 0;
        foreach($carts as $cart){
            $totalPriceTem = $cart->getOriginal('total_price');
            $totalPrice +=  $totalPriceTem;
            $shipping = $cart->getOriginal('delivery_fee');

        }
        $grandTotal = $totalPrice + $shipping;

        $totalPrice = number_format($totalPrice, 0, ",", ".");
        $shipping = number_format($shipping, 0, ",", ".");
        $grandTotal = number_format($grandTotal, 0, ",", ".");
        return view('frontend.checkout-step4', compact('totalPrice', 'shipping', 'grandTotal'));
    }

//    //bank transfer
//    public function CheckoutProcessBank(){
//        return view('frontend.checkout-step4-bank');
//    }
//
//    //bank transfer process
//    public function CheckoutProcessBankSubmit(Request $request){
//        $user = Auth::user();
//        $userId = $user->id;
//
//        $validator = Validator::make($request->all(),[
//            'sender_name'                   => 'required',
//            'transfer_date'                  => 'required',
//            'receiver_bank'                 => 'required',
//            'transfer_amount'                => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            $this->throwValidationException(
//                $request, $validator
//            );
//        }
//        else {
//
//        }
//
//        //return ke page transaction
//        return redirect()->route('checkout4');
//    }

    //payment online failed
    public function CheckoutProcessFailed(){

//        $transactionDB = Transaction::where('order_id', '=', '59ba09dc171c4')->first();
//        $userMail = $transactionDB->user;
//
//        $userMail->notify(new TransactionNotify($transactionDB));

//        $userMail = "yansen626@gmail.com";
//        $emailBody = new NewOrderCustomer($transactionDB);
//        Mail::to($userMail)->send($emailBody);

        return view('frontend.checkout-step4-failed');
    }
}