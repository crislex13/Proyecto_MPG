@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="justify-content-center">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Clientes
                    @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}">Back</a>
                        </span>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="lead">
                        <strong>Nombre:</strong>
                        {{ $client->nombre }}
                    </div>
                    <div class="lead">
                        <strong>Apellido Paterno:</strong>
                        {{ $client->apellido_paterno }}
                    </div>
                    <div class="lead">
                        <strong>Apellido Materno:</strong>
                        {{ $client->apellido_materno }}
                    </div>
                    <div class="lead">
                        <strong>Ci:</strong>
                        {{ $client->ci }}
                    </div>
                    <div class="lead">
                        <strong>Teléfono:</strong>
                        {{ $client->telefono }}
                    </div>
                    <div class="lead">
                        <strong>Fecha de Nacimiento:</strong>
                        {{ $client->fecha_nacimiento }}
                    </div>
                    <div class="lead">
                        <strong>Correo Electrónico:</strong>
                        {{ $client->correo }}
                    </div>
                    <div class="lead">
                        <strong>Disciplina:</strong>
                        {{ $client->disciplina }}
                    </div>
                    <div class="lead">
                        <strong>Plan:</strong>
                        {{ $client->plan }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection