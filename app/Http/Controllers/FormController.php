<?php

namespace App\Http\Controllers;

use App\Models\OrderProducts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Order;

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
        if (is_array($basketArray)) {
            foreach ($basketArray as $item) {
                OrderProducts::create([
                    'order_id' => $order->id,
                    'product_id' => $item['productId'],
                    'product_count' => $item['quantity'],
                ]);
            }
        }

        return 'Data saved successfully';
    }
    public function getOrderDetails($orderId) {
        $orderDetails = \DB::table('orders')
            ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
            ->where('orders.id', $orderId)
            ->select('orders.*', 'order_products.product_id', 'order_products.product_count')
            ->get();
        return response()->json($orderDetails);
    }
}
