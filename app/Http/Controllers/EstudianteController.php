<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Estudiante::query();

        if ($request->has('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->has('apellido')) {
            $query->where('apellido', 'like', '%' . $request->apellido . '%');
        }

        $estudiantes = $query->orderBy('id', 'desc')->simplePaginate(10);

        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['password' => Hash::make($request->password)]);
        $estudiante = Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return abort(404);
        }

        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return abort(404);
        }

        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return abort(404);
        }

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;

        $estudiante->save();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado correctaente');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return abort(404);
        }

        return view('estudiantes.delete', compact('estudiante'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return abort(404);
        }

        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }

    /**
     * Show the login form for students.
     */
    public function showLoginForm()
    {
        return view('estudiantes.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $estudiante = Estudiante::where('email', $request->email)->first();

        if ($estudiante && Hash::check($request->password, $estudiante->password)) {
            Auth::guard('web')->login($estudiante);

            // Obtener el grupo del estudiante
            $grupo = $estudiante->id;

            if($grupo){
                // Registrar la asistencia
                Asistencia::create([
                    'grupo_id' => $grupo,
                    'estudiante_id' => $estudiante->id,
                    'fecha' => now()->format('Y-m-d'),
                    'hora_entrada' => now()->format('H:i:s'),
                ]);

                return redirect()->route('estudiantes.login')->with('success', 'Asistencia registrada correctamente.');
        }else {
            return redirect()->back()->withErrors(['NoGroup' => 'El estudiante no tiene un grupo asignado.']);
        }
    }
        return redirect()->back()->withErrors(['InvalidCredentials' => 'Las credenciales proporcionadas no coinciden.']);
    }
}