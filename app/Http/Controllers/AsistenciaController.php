<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

use App\Models\Estudinte;
use App\Models\Grupo;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $grupos = Grupo::all(); 
        $query = Asistencia::query();

        if ($request->filled('grupo_id') && is_numeric($request->grupo_id)) {
            $query->where('grupo_id', $request->grupo_id);
        }
    
        if ($request->filled('fecha')) {
            $query->whereDate('fecha', $request->fecha);
        }
    
        $asistencias = $query->orderBy('id', 'desc')->simplePaginate(10);
        
        return view('asistencias.index', compact('asistencias', 'grupos'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        if(!$asistencia){
            return abort(404);
        }
        return view('asistencias.show', compact('asistencia'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
