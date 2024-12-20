<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMClienteController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return view('gimnasio.clientes.index')->renderSections()['content-englobal'];
        }
        return view('gimnasio.clientes.index');
    }
}
