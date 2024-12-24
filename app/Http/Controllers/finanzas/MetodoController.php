<?php

namespace App\Http\Controllers\finanzas;

use App\Http\Controllers\Controller;
use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoController extends Controller
{
    public function index()
    {
        $metodos = MetodoPago::all();
        return view('finanzas.metodo.index', compact('metodos'));
    }

    public function all()
    {
        $metodos = MetodoPago::all();

        return response()->json([
            'data' => $metodos,
            'status' => 200,
            'message' => 'Registros de los metodos de pago',
        ], 200);
    }
}
