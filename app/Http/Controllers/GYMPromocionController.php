<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMPromocionController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return view('gimnasio.promociones.index')->renderSections()['content-englobal'];
        }
        return view('gimnasio.promociones.index');
    }
}
