<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index()
    {
        // Получаем данные из таблицы 'shop'
        $data = DB::table('shop')->get();

        // Передаем данные в представление 'index'
        return view('index', ['data' => $data]);
    }
}
