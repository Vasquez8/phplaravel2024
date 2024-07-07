@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="card-title mb-0 text-center">Crear Nuevo Estudiante Grupo</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('estudiantes_grupos.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="estudiante_id" class="form-label">Estudiante</label>
                            <select name="estudiante_id" class="form-select form-select-sm" aria-label="Seleccione un estudiante" required>
                                <option value="">Seleccione un estudiante</option>
                                @foreach ($estudiantes as $estudiante)
                                <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="grupo_id" class="form-label">Grupo</label>
                            <select name="grupo_id" class="form-select form-select-sm" aria-label="Seleccione un grupo" required>
                                <option value="">Seleccione un grupo</option>
                                @foreach ($grupos as $grupo)
                                <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2">Crear</button>
                                <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
