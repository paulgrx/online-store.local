<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    public function viewproduct(Request $request)
    {
        $productId = $request->query('id');
        if (!$productId) {
            return redirect()->route('home');
        }

        $product = DB::table('shop')->where('id',$productId)->first();
        $categoriesData = DB::table('categories')->get()->toArray();

        if (!$product) {
            return redirect()->route('home');
        }
        return view('product',  [
            'product' => $product,
            'categoriesData' => $categoriesData,
            'currentCategoryId' => null,
            'currentSortBy' => null]);


    }

    public function addProduct(Request $request) {
        $basket = $request->cookie('basket');
        $products = $basket ? json_decode($basket, true) : [];

        $newProduct = [
                'productId' => $request->input('productId'),
                'quantity' => $request->input('quantity'),
        ];

        $productFound = false;

        foreach ($products as &$product) {
            if ($product['productId'] == $newProduct['productId']) {
                $product['quantity'] += $newProduct['quantity'];
                $productFound = true;
                break;
            }
        }

        if (!$productFound) {
            $products[] = $newProduct;
        }

        $productsData = json_encode($products);
        $cookie = cookie('basket', $productsData, 1440);

        return redirect()->back()->with([
            'showPopup' => true])->withCookie($cookie);
    }
}
