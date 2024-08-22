<?php

namespace App\Http\Controllers;

use App\Models\OrderProducts;
use App\Models\Order;
use App\Models\PaymentData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class FormController extends BaseController
{
    public function form()
    {
        return view('form');
    }
    public function orderSubmit(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'nr_of_building' => 'required|integer|min:1|max:1000',
            'city' => 'required|string|max:255',
            'post_code' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:255',
        ]);

        $order = Order::create($request->all());

        $basket = $request->cookie('basket');
        $basketArray = json_decode($basket, true);
        if (!is_array($basketArray)) {
            return 'Error 404';
        }
        foreach ($basketArray as $item) {
            OrderProducts::create([
                'order_id' => $order->id,
                'product_id' => $item['productId'],
                'product_count' => $item['quantity'],
            ]);
        }

        $orderId = $order->id;
        $orderProducts = OrderProducts::where('order_id', $orderId)->get();
        $ids = [];
        foreach ($orderProducts as $orderProduct) {
            $ids[] = ['id' => $orderProduct->product_id, 'count' => $orderProduct->product_count];
        }

        $productsTitles = '';
        $productsPrices = 0;

        foreach ($ids as $id) {
            $productData = DB::table('shop')->where('id', $id['id'])->first();
            $productsTitles .= $productData->name . ' ';
            $productsPrices += $productData->price * $id['count'];
        }

        if (!$orderId) {
            return 'Order not found';
        }

        // Установка ключа API
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Создание сессии Stripe Checkout
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'pln',
                    'product_data' => [
                        'name' => $productsTitles
                    ],
                    'unit_amount' => $productsPrices * 100, // сумма в центах
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['order_id' => $order->id]),
            'cancel_url' => route('payment.cancel'),
        ]);

        $payment = PaymentData::create([
            'order_id' => $orderId,
            'session_id' => $session->id,
            'status_of_payment' => 'succeeded',
        ]);

        print_r(json_encode($payment->session_id));
        die();

        // Перенаправление пользователя на страницу Stripe Checkout
        return redirect($session->url, 303);
    }

    public function success(Request $request)
    {
        // Обработка успешной оплаты
        $orderId = $request->input('order_id');
        $order = Order::find($orderId);
        $order->update(['status' => 'paid']);

        return view('payment.success', compact('order'));
    }

    public function cancel()
    {
        // Обработка отмены оплаты
        return view('payment.cancel');
    }
}
