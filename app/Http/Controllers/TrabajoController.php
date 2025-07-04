<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo; // Asegúrate de importar el modelo



class TrabajoController extends Controller
{
    public function index()
    {
        $trabajos = Trabajo::all(); // Obtiene todos los trabajos
        return view('trabajos.index', compact('trabajos'));
    }

    public function create()
    {
        return view('trabajos.create');
    }

    public function store(Request $request)
    {
        // Aquí podrías guardar los datos enviados del formulario
        return redirect()->route('trabajos.index');
    }
}
