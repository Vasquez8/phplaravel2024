@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"><h1>
                Crear Nuevo Docente Grupo
                </h1>
            </div>

                <div class="card-body">
                    <form action="{{ route('docentes_grupos.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="docente_id" class="form-label">Docente:</label>
                            <select name="docente_id" class="form-control">
                                <option value="">Seleccione un docente</option>
                                @foreach ($docentes as $docente)
                                <option value="{{ $docente->id }}">{{ $docente->nombre }} {{ $docente->apellido }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="grupo_id" class="form-label">Grupo:</label>
                            <select name="grupo_id" class="form-control">
                                <option value="">Seleccione un grupo</option>
                                @foreach ($grupos as $grupo)
                                <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mx-2">Crear</button>
                            <a href="{{ route('docentes_grupos.index') }}" class="btn btn-secondary mx-2">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
