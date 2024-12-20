<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMPromocionController extends Controller
{
    public function index()
    {
        return view('gimnasio.promociones.index');
    }
}
