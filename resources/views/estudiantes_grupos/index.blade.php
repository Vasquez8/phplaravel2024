@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-header text-black">
            <h1 class="card-title mb-0 text-center">Lista Estudiante Grupo</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes_grupos.index') }}" method="GET">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label for="estudiante_id" class="form-label">Estudiante</label>
                        <select name="estudiante_id" class="form-control" required>
                            <option value="">Seleccione un estudiante</option>
                            @foreach ($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">
                                {{ $estudiante->nombre }} {{ $estudiante->apellido }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4 align-self-end">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        <a href="{{ route('estudiantes_grupos.create') }}" class="btn btn-secondary ms-2">Crear Nuevo</a>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudianteGrupos as $estudianteGrupo)
                        <tr>
                            <td>{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</td>
                            <td>{{ $estudianteGrupo->grupo->nombre }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('estudiantes_grupos.edit', $estudianteGrupo->id) }}" class="btn btn-warning m-1">Editar</a>
                                    <a href="{{ route('estudiantes_grupos.show', $estudianteGrupo->id) }}" class="btn btn-info m-1">Ver</a>
                                    <a href="{{ route('estudiantes_grupos.delete', $estudianteGrupo->id) }}" class="btn btn-danger m-1">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    {{ $estudianteGrupos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
