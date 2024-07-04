@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a Mi Web</div>

                <div class="card-body">
                    @auth
                    <div class="alert alert-success" role="alert">
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                    @else
                    <div class="alert alert-danger" role="alert">
                        <p>No has ingresado aún.</p>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
