<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use Illuminate\Http\Request;

class MultasController extends Controller
{// Laravel - MultasController.php
public function index(Request $request)
{
    if ($request->has('departamento_id')) {
        $multas = Multa::where('departamento_id', $request->get('departamento_id'))->get();
    } else {
        $multas = Multa::all(); // 👉 Aquí devuelve todas si no hay filtro
    }

    return response()->json($multas);
}


}
