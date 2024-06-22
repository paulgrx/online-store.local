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
                'categoriesData' => $categoriesData
            ]);
        }

        public function search(Request $request) {
            /*$categoryId = $request->input('category');
            if (!$categoryId) {
                $this->view();
            }
            $categoryExists = DB::table('categories')->where('id', $categoryId)->first();
            if (!$categoryExists) {
                $this->view();
            }

            $data = DB::table('shop')
                ->leftJoin('product_categories', 'shop.id', '=', 'product_categories.productId')
                ->where('product_categories.categoryId', $categoryId)
                ->get();*/
            $categoriesData = DB::table('categories')->get()->toArray();

            $sortBy = $request->input('sort_by');
            if (!$sortBy) {
                $this->view();
            }

            $sortByArray = ['asc', 'desc'];

            if (!in_array($sortBy, $sortByArray))    {
                $this->view();
            }

            $data = DB::table('shop')
                ->orderBy('price', $sortBy)
                ->get();


            /*$data = DB::table('shop')->get();*/

            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData

            ]);
        }



        private function view()
        {
            $data = DB::table('shop')->get();
            $categoriesData = DB::table('categories')->get()->toArray();
            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData
            ]);
        }
}
