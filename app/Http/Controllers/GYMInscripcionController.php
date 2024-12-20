<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMInscripcionController extends Controller
{
    public function index()
    {
        return view('gimnasio.inscripciones.index');
    }
}
