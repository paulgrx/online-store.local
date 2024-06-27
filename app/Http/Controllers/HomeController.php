<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController

{
        public function index()
        {
            $data = DB::table('shop')->get();
            $categoriesData = DB::table('categories')->get()->toArray();
            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData,
                'currentCategoryId' => null,
                'currentSortBy' => null
            ]);
        }

        public function search(Request $request) {
            $categoryId = $request->input('category');
            $sortBy = $request->input('sort_by');

            $query = DB::table('shop')
                ->leftJoin('product_categories', 'shop.id', '=', 'product_categories.productId');

            if ($categoryId) {
                $query->where('product_categories.categoryId', $categoryId);
            }

            if ($sortBy && in_array($sortBy, ['asc', 'desc'])) {
                $query->orderBy('price', $sortBy);
            }

            $data = $query->get();
            $categoriesData = DB::table('categories')->get()->toArray();

            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData,
                'currentCategoryId' => $categoryId,
                'currentSortBy' => $sortBy
            ]);
        }
}
