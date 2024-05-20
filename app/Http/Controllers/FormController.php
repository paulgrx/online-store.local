<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    public function form()
    {
        return view('form');
    }
}
