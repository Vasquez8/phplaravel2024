@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Lista de Asistencias</h1>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('asistencias.index') }}" method="GET">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <label for="grupo_id" class="form-label">Grupos</label>
            <select name="grupo_id" class="form-control">
                <option value="">Seleccione un grupo</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="Fecha">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
                        @if ($asistencias->isEmpty())
                            <div class="alert alert-warning" role="alert">
                                No se encontraron registros.
                            </div>
                        @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Estudiante</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora de Entrada</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                    <tr>
                                        <td>{{ $asistencia->grupo ? $asistencia->grupo->nombre : 'Grupo no encontrado' }}</td>
                                        <td>{{ $asistencia->estudiante ? $asistencia->estudiante->nombre : 'Estudiante no encontrado' }}</td>
                                        <td>{{ $asistencia->fecha }}</td>
                                        <td>{{ $asistencia->hora_entrada }}</td>
                                        <td>
                                        <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-info m-2">Ver</a>                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $asistencias->links() }}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
