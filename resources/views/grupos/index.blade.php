@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card card-small">
        <div class="card-header text-darck">
            <h2 class="card-title mb-0 text-center">Lista de Grupos</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('grupos.index') }}" method="GET">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre" placeholder="Buscar por Nombre">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('grupos.create') }}" class="btn btn-secondary">Crear Nuevo</a>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($grupos as $grupo)
                            <tr>
                                <td>{{ $grupo->nombre }}</td>
                                <td>{{ $grupo->descripcion }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning m-1">Editar</a>
                                        <a href="{{ route('grupos.show', $grupo->id) }}" class="btn btn-info m-1">Ver</a>
                                        <a href="{{ route('grupos.delete', $grupo->id) }}" class="btn btn-danger m-1">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No se encontraron grupos.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    {{ $grupos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
