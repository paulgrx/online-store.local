<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PaymentData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;

class SuccessPaymentController extends BaseController
{
    public function success(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $orderId = $request->input('order_id');
        $order = DB::table('orders')
            ->select('name', 'lastname', 'street', 'nr_of_building', 'city', 'post_code', 'email', 'number')
            ->where('id', $orderId)
            ->first();
/*!!! // do naprawy : wyswietlanie nazawy porduktów jak są 2 w kosyzky i więcej
 nie działa walidacja*/
        $products = DB::table('order_products')
            ->join('shop', 'order_products.product_id', '=', 'shop.id') // Объединяем по product_id
            ->where('order_products.order_id', $orderId) // Фильтр по order_id
            ->select('shop.name', 'shop.price', 'order_products.product_count') // Выбираем нужные поля
            ->get();

        $sessionId = DB::table('payment_data')->where('order_id', $orderId)->value('session_id');
        if (!$sessionId) {
            return view('payment.cancel', ['message' => 'Session ID not found for this order']);
        }



        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            $paymentIntentId = $session->payment_intent;
            $paymentIntent = \Stripe\PaymentIntent::retrieve($paymentIntentId);
            $paymentStatus = $paymentIntent->status;
            $amount = $paymentIntent->amount / 100;

            $charges = \Stripe\Charge::all(['payment_intent' => $paymentIntentId]);
            if (count($charges->data) > 0) {
                $charge = $charges->data[0];
                $ordername = $charge->billing_details->name;
                $cardBrand = $charge->payment_method_details->card->brand;
            } else {
                return view('payment.cancel', ['message' => 'No charges found in Charge object']);
            }

            return view('payment.success', [
                'orderId' => $orderId,
                'paymentStatus' => $paymentStatus,
                'amount' => number_format($amount, 2, ',', ' ') . 'zł',
                'name' => $order->name,
                'lastname' => $order->lastname,
                'street' => $order->street,
                'nr_of_building' => $order->nr_of_building,
                'city' => $order->city,
                'post_code' => $order->post_code,
                'email' => $order->email,
                'number' => $order->number,
                'products' => $products,
                'ordername' => $ordername,
                'cardBrand' => $cardBrand,
            ]);
        } catch (\Exception $e) {
            return view('payment.cancel', ['message' => 'Error while receiving data '. $e->getMessage()]);
        }
    }
}




