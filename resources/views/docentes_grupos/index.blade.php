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
            <h1 class="card-title mb-0 text-center">Lista Docente Grupo</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('docentes_grupos.index') }}" method="GET" class="row g-3 align-items-center mb-3">
                @csrf
                <div class="col-sm-4">
                    <label for="docente_id" class="form-label">Docente</label>
                    <select name="docente_id" class="form-select" required>
                        <option value="">Seleccione un docente</option>
                        @foreach ($docentes as $docente)
                        <option value="{{ $docente->id }}">
                            {{ $docente->nombre }} {{ $docente->apellido }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-8">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary me-md-2">Buscar</button>
                        <a href="{{ route('docentes_grupos.create') }}" class="btn btn-secondary">Crear Nuevo</a>
                    </div>
                </div>
            </form>

            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docenteGrupos as $docenteGrupo)
                        <tr>
                            <td>{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}</td>
                            <td>{{ $docenteGrupo->grupo->nombre }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('docentes_grupos.edit', $docenteGrupo->id) }}" class="btn btn-warning m-1">Editar</a>
                                    <a href="{{ route('docentes_grupos.show', $docenteGrupo->id) }}" class="btn btn-info m-1">Ver</a>
                                    <a href="{{ route('docentes_grupos.delete', $docenteGrupo->id) }}" class="btn btn-danger m-1">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    {{ $docenteGrupos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
