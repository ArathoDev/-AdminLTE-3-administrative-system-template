<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYMInscripcionController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return view('gimnasio.inscripciones.index')->renderSections()['content-englobal'];
        }
        return view('gimnasio.inscripciones.index');
    }
}
