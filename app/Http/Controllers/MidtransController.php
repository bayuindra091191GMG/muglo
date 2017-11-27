<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 19/09/2017
 * Time: 13:46
 */

namespace App\Http\Controllers;

use App\libs\Midtrans;
use App\libs\TransactionUnit;
use App\libs\Utilities;
use App\libs\Veritrans;
use App\Mail\NewOrderAdmin;
use App\Mail\NewOrderCustomer;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;

class MidtransController extends Controller
{
    public function __construct(){
        Veritrans::$serverKey = env('MIDTRANS_API_KEY_SANDBOX');
        Veritrans::$isProduction = false;
    }

    public function notification(){
        try
        {
            $json_result = file_get_contents('php://input');
            $json = json_decode($json_result);

            Utilities::ExceptionLog($json);

            $vt = new Veritrans;
            $notif = $vt->status($json->order_id);

            Utilities::ExceptionLog('ORDER ID = '. $notif->order_id);

            $dateTimeNow = Carbon::now('Asia/Jakarta');

            $transaction = Transaction::where('order_id', $notif->order_id)->first();
            Utilities::ExceptionLog($transaction);

            if($json->status_code == "200"){
                if(($json->transaction_status == "capture" || $json->transaction_status =="accept") && $json->fraud_status == "accept"){
                    $transaction->status_id = 5;

                    // Filter payment type
                    if($json->payment_type == "bank_transfer"){
                        // Filter bank
                        if(!empty($json->permata_va_number)){
                            $transaction->va_bank = "permata";
                            $transaction->va_number = $json->permata_va_number;
                        }
                        else if(!empty($json->va_numbers)){
                            $transaction->va_bank = $json->va_numbers[0]->bank;
                            $transaction->va_number = $json->va_numbers[0]->va_number;
                        }
                    }
                    else if($json->payment_type == "echannel"){
                        $transaction->va_bank = "mandiri";
                        $transaction->bill_key = $json->bill_key;
                        $transaction->biller_code = $json->biller_code;
                    }
                    //
//                    //send email to notify admin new transaction
//                    $userMail = "hellbardx2@gmail.com";
//                    $emailBody = new NewOrderAdmin();
//                    Mail::to($userMail)->send($emailBody);

                    //$emailBody = new NewOrderCustomer($transaction);
                    Mail::to($transaction->user->email)->send(new NewOrderCustomer());
                    Mail::to('admin@lowids.com')->send(new NewOrderAdmin());
                }

                $transaction->modified_on = $dateTimeNow->toDateTimeString();
                $transaction->save();
            }
            else if($json->status_code == "201"){
                // Filter payment type
                if($json->payment_type == "bank_transfer"){
                    $transaction->status_id = 4;

                    // Filter bank
                    if(!empty($json->permata_va_number)){
                        $transaction->va_bank = "permata";
                        $transaction->va_number = $json->permata_va_number;
                    }
                    else if(!empty($json->va_numbers)){
                        $transaction->va_bank = $json->va_numbers[0]->bank;
                        $transaction->va_number = $json->va_numbers[0]->va_number;
                    }
                }
                else if($json->payment_type == "echannel"){
                    $transaction->bill_key = $json->bill_key;
                    $transaction->biller_code = $json->biller_code;
                }
                else if($json->payment_type == "credit_card"){
                    $transaction->status_id = 11;
                }

                $transaction->modified_on = $dateTimeNow->toDateTimeString();
                $transaction->save();
            }
            else if($json->status_code == "202"){
                $transaction->status_id = 10;
                $transaction->modified_on = $dateTimeNow->toDateTimeString();
                $transaction->save();
            }
            else{
                // Log error exception here
            }
        }
        catch (\Exception $ex){
            Utilities::ExceptionLog($ex);
        }
    }

    // Midtrans payment success redirect for CC payment
    public function success($id){
        try
        {
            $carts = Cart::where('order_id', $id)->get();
            $method = $carts->first()->payment_method;
            $user = User::find($carts->first()->user_id);

            TransactionUnit::createTransaction($user->id, $id);

            Session::forget('cartList');
            Session::forget('cartTotal');
            Session::pull('cartList');
            Session::pull('cartTotal');

            return View('frontend.checkout-success', compact('method'));
        }
        catch(\Exception $ex){
            Utilities::ExceptionLog($ex);
        }
    }

    // Request to Midtrans
    public function checkoutMidtrans(Request $request){
        try{
            if(!Auth::check()){
                return Redirect::route('login');
            }
            $user = Auth::user();
            $userId = $user->id;

            if(empty(Input::get('payment'))){
                return redirect()->route('checkout4');
            }

            $enabledPayments = Input::get('payment');

            $adminFee   = (int)$request['selected-fee'];

            // Get unique order id
            $orderId = uniqid();

            $carts = Cart::where('user_id', $userId)->get();
            foreach($carts as $cart){
                $cart->payment_method = $enabledPayments == 'credit_card'? 2:1;
                $cart->admin_fee = $adminFee;
                $cart->save();
            }

            $cartsToMidtrans = $carts;

            if($enabledPayments == 'bank_transfer'){

                TransactionUnit::createTransaction($userId, $orderId);

                Session::forget('cartList');
                Session::forget('cartTotal');
                Session::pull('cartList');
                Session::pull('cartTotal');
            }

            //set data to request
            $transactionDataArr = Midtrans::setRequestData($userId, $enabledPayments, $cartsToMidtrans, $orderId);

            //sending to midtrans
            $redirectUrl = Midtrans::sendRequest($transactionDataArr);

            return redirect($redirectUrl);
        }
        catch (\Exception $ex){
            Utilities::ExceptionLog('checkoutMidtrans EX = '. $ex);
        }
    }

    public function checkoutSuccess($paymentMethod){
        return View('frontend.checkout-success', compact('paymentMethod'));
    }
}