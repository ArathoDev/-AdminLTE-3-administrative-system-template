<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMCategoriaController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return view('gimnasio.categorias.index')->renderSections()['content-englobal'];
        }
        return view('gimnasio.categorias.index');
    }
}
