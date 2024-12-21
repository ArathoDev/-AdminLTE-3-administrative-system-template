<?php

namespace App\Http\Controllers\finanzas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MetodoController extends Controller
{
    public function index(){
        return view('finanzas.metodo.index');
    }
}
