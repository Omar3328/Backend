<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use Illuminate\Http\Request;

class MultasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('departamento_id')) {
            $multas = Multa::where('departamento_id', $request->get('departamento_id'))->get();
        } else {
            $multas = Multa::all();
        }

        return response()->json($multas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'valor' => 'required|numeric|min:0'
        ]);

        $multa = new Multa();
        $multa->descripcion = $request->descripcion;
        $multa->departamento_id = $request->departamento_id;
        $multa->valor = $request->valor;
        $multa->save();

        return response()->json($multa, 201);
    }
}
