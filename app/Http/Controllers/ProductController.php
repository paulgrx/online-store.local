<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
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

        if (!$product) {
            return redirect()->route('home');
        }
        return view('product',  ['product' => $product]);

    }
}
