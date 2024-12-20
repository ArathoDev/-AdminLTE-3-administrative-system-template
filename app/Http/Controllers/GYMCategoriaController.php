<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMCategoriaController extends Controller
{
    public function index()
    {
        return view('gimnasio.categorias.index');
    }
}
