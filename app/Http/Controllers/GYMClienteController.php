<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMClienteController extends Controller
{
    public function index()
    {
        return view('gimnasio.clientes.index');
    }
}
