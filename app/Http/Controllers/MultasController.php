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


}
