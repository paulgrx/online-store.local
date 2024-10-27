<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController

{
        public function index() {

            $data = DB::table('shop')->get();
            $categoriesData = DB::table('categories')->get()->toArray();

            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData,
                'currentCategoryId' => null,
                'currentSortBy' => null,
                'searchQuery' => null
            ]);
        }

        public function search(Request $request) {

            $search = $request->input('search');
            $searchQuery = is_array($search) ? implode(', ', $search) : $search;
            $categoryId = $request->input('category');
            $sortBy = $request->input('sort_by');
            $isSearch = !empty($searchQuery);

            $query = DB::table('shop');
                if ($isSearch) {
                    $query->where('name', 'like', "%{$searchQuery}%");
                } elseif ($categoryId) {
                    $query->leftJoin('product_categories', 'shop.id', '=', 'product_categories.productId')
                        ->where('product_categories.categoryId', $categoryId);
                }

            if ($search) {
                $query->where('shop.name', 'like', '%' . $search . '%');
            }

            if ($categoryId) {
                $query->where('product_categories.categoryId', $categoryId);
            }

            if ($sortBy && in_array($sortBy, ['asc', 'desc'])) {
                $query->orderBy('price', $sortBy);
            }

            $data = $query->select('shop.*')->get();
            $categoriesData = DB::table('categories')->get()->toArray();

            return view('index', [
                'data' => $data,
                'categoriesData' => $categoriesData,
                'currentCategoryId' => $categoryId,
                'currentSortBy' => $sortBy,
                'searchQuery' => $searchQuery,
                'isSearch' => $isSearch
            ]);
        }
}
