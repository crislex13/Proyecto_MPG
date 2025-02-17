@extends('layouts.app')
@section('content')
<aside class="right-side">
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Usuario
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}">Atras</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Nombre:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong>Correo electronico:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                    <strong>Contraseña:</strong>
                    ********
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
@endsection