@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-3 mt-3">
        <div class="col-12">
            <h1 class="text-center">Lista de estudiantes</h1>
        </div>
    </div>

    <form action="{{ route('estudiantes.index') }}" method="GET">
        <div class="row mb-3">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('docentes.create') }}" class="btn btn-secondary">Crear Nuevo</a>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->apellido }}</td>
                            <td>{{ $estudiante->email }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning m-1">Editar</a>
                                    <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-info me-1">Ver</a>
                                    <a href="{{ route('estudiantes.delete', $estudiante->id) }}" class="btn btn-danger m-1">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $estudiantes->links() }}
        </div>
    </div>
@endsection
