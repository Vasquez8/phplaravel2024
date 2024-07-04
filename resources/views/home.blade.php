@extends('layouts.app')
@section('content')
<div class="alert alert-success" role="alert">
    Mi web
    @auth
    <p>{{ auth()->user()->email }}</p>
    @else
    <p>No a ingresado</p>
    @endauth
</div>
@endsection