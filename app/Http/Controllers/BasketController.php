<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BasketController extends BaseController
{
    public function viewbasket()
    {
        return view('basket');
    }
}
