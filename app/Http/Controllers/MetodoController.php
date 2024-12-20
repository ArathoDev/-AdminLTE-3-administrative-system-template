<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return view('finanzas.metodo.index')->renderSections()['content-englobal'];
        }
        return view('finanzas.metodo.index');
    }

}
