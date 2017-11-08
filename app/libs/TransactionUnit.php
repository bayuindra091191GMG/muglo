<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 08/11/2017
 * Time: 10:25
 */

namespace App\libs;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;

class TransactionUnit
{
    public static function createTransaction($userId, $orderId){
        try{
            $dateTimeNow = Carbon::now('Asia/Jakarta');
            $carts = Cart::where('user_id', $userId)->get();
            $userData = User::find($userId);
            $userAddress = Address::where('user_id', $userId)->first();

            $totalPrice = 0;
            $totalWeight = 0;

            foreach ($carts as $cart) {
                $subtotalPrice = $cart->product->getOriginal('price_discounted') * $cart->quantity;
                $totalPrice += $subtotalPrice;
                $deliveryFee = (int)$cart->getOriginal('delivery_fee');
                $adminFee = (int)$cart->getOriginal('admin_fee');

                $subtotalWeight = $cart->product->weight * $cart->quantity;
                $totalWeight += $subtotalWeight;
            }
            $totalPriceWithDeliveryFeeAdminFee = $totalPrice + $deliveryFee + $adminFee;

            $enabledPayments = $carts->first()->payment_method;

            //insert into transactions DB
            $transaction = Transaction::create([
                'id'                => Uuid::generate(),
                'user_id'           => $userId,
                'order_id'          => $orderId,
                'payment_method_id' => $enabledPayments == 'credit_card'? 2:1,
                'total_payment'     => $totalPriceWithDeliveryFeeAdminFee,
                'total_price'       => $totalPrice,
                'total_weight'      => $totalWeight,
                'address_name'      => $userAddress->name,
                'phone'             => $userData->phone,
                'province_id'       => $userAddress->province_id,
                'province_name'     => $userAddress->province_name,
                'city_id'           => $userAddress->city_id,
                'city_name'         => $userAddress->city_name,
                'subdistrict_id'    => $userAddress->subdistrict_id,
                'subdistrict_name'  => $userAddress->subdistrict_name,
                'postal_code'       => $userAddress->postal_code,
                'address_detail'    => $userAddress->detail,
                'courier'           => $carts[0]->courier->description,
                'courier_code'      => $carts[0]->courier->code,
                'delivery_type'     => $carts[0]->deliveryType->description,
                'delivery_type_code'=> $carts[0]->deliveryType->code,
                'delivery_fee'      => $deliveryFee,
                'admin_fee'         => $adminFee,
                'status_id'         => 3,
                'created_on'        => $dateTimeNow->toDateTimeString(),
                'created_by'        => $userId
            ]);

            $transaction->invoice = Utilities::GenerateInvoice();
            $transaction->save();

            $savedId = $transaction->id;

            //set transaction detail
            foreach ($carts as $cart) {
                $id = Uuid::generate();
                $transactionDetail = TransactionDetail::create([
                    'id'                => $id,
                    'transaction_id'    => $savedId,
                    'product_id'        => $cart->product_id,
                    'name'              => $cart->product->name,
                    'weight'            => $cart->product->weight,
                    'price_basic'       => $cart->product->getOriginal('price_discounted'),
                    'quantity'          => $cart->quantity,
                    'subtotal_price'    => $cart->getOriginal('total_price'),
                    'created_on'        => $dateTimeNow->toDateTimeString(),
                    'created_by'        => $userId
                ]);

                if (!empty ($cart->Product->discount)) {
                    $discountTemp = $cart->product->getOriginal('discount');
                    $transactionDetail->discount = $discountTemp;
                }
                if (!empty ($cart->product->discount_flat)) {
                    $discountFlatTemp = $cart->product->getOriginal('discount_flat');
                    $transactionDetail->discount_flat = $discountFlatTemp;
                }
                if (!empty ($cart->product->price_discounted)){
                    $priceDiscountTemp = $cart->product->getOriginal('price_discounted');
                    $transactionDetail->price_final = $priceDiscountTemp;
                }
                else{
                    $transactionDetail->price_final = $cart->product->getOriginal('price');
                }

                $transactionDetail->save();
            }

            //delete cart from database
            foreach($carts as $cart){
                $cart->delete();
            }

            return true;
        }
        catch(\Exception $ex){
            Utilities::ExceptionLog($ex);
        }
    }
}