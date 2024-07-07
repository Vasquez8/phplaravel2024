@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h1 class="mb-4 text-center">Lista de Docentes</h1>

    <form action="{{ route('docentes.index') }}" method="GET">
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

    <div class="table-responsive">
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
                @foreach ($docentes as $docente)
                <tr>
                    <td>{{ $docente->nombre }}</td>
                    <td>{{ $docente->apellido }}</td>
                    <td>{{ $docente->email }}</td>
                    <td>
                        <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning m-1">Editar</a>
                        <a href="{{ route('docentes.show', $docente->id) }}" class="btn btn-info m-1">Ver</a>
                        <a href="{{ route('docentes.delete', $docente->id) }}" class="btn btn-danger m-1">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
            {{ $docentes->links() }}
        </div>
    </div>
</div>
@endsection
