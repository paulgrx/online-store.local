<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class BasketController extends BaseController
{
    public function viewbasket(Request $request)
    {
        $basket = $request->cookie('basket');

        if (!$basket) {
            return redirect()->route('product');
        }

        $productsInBasket = json_decode($basket, true);
        $productIds = array_column($productsInBasket, 'productId');
        $data = DB::table('shop')->whereIn('id', $productIds)->get();
        $data = $data->toArray();

        $totalPrice = 0;

        foreach ($data as &$product) {
            foreach ($productsInBasket as $basketItem) {
                if ($product->id == $basketItem['productId']) {
                    $product->quantity = $basketItem['quantity'];
                    $product->final_price = $product->price * $product->quantity;
                    $totalPrice += $product->final_price;
                    break;
                }
            }
        }

        $totalProducts = count($productsInBasket);

        return view('basket', [
            'products' => $data,
            'totalProducts' => $totalProducts,
            'totalPrice' => $totalPrice
        ]);
    }

    public function removeProduct(Request $request)
    {
        $basket = $request->cookie('basket');
        $products = $basket ? json_decode($basket, true) : [];

        $productIdToRemove = $request->input('productId');

        $products = array_filter($products, function ($product) use ($productIdToRemove) {
            return $product['productId'] != $productIdToRemove;
        });

        $productsData = json_encode($products);
        $cookie = cookie('basket', $productsData, 1440);

        return redirect()->route('basket')->withCookie($cookie);
    }
}
