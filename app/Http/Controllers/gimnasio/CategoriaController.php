<?php

namespace App\Http\Controllers\gimnasio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return view('gimnasio.categorias.index');
    }
}
