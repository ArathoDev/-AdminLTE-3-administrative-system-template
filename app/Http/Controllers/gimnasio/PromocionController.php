<?php

namespace App\Http\Controllers\gimnasio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index(){
        return view('gimnasio.promociones.index');
    }
}
