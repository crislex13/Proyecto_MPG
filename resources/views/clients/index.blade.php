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
                <div class="card-header">Clients
                    @can('role-create')
                        <span class="float-right">
                            <a class="my-button" href="{{ route('clients.create') }}">Nuevo Cliente</a>
                        </span>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>CI</th>
                                <th>Teléfono</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Correo Electrónico</th>
                                <th>Disciplina</th>
                                <th>Plan</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $client)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Número autoincremental -->
                                    <td>{{ $client->nombre }}</td>
                                    <td>{{ $client->apellido_paterno }}</td>
                                    <td>{{ $client->apellido_materno }}</td>
                                    <td>{{ $client->ci }}</td>
                                    <td>{{ $client->telefono }}</td>
                                    <td>{{ $client->fecha_nacimiento }}</td>
                                    <td>{{ $client->correo }}</td>
                                    <td>{{ $client->disciplina }}</td>
                                    <td>{{ $client->plan }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('clients.show', $client->id) }}">Show</a>
                                        @can('client-edit')
                                            <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edit</a>
                                        @endcan
                                        @can('client-delete')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</aside>

    <style>
        /* .my-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .my-button:hover {
            background-color: #45a049;
        }

        .my-button:active {
            background-color: #3e8e41;
        }

        .container {
            padding: 20px;
            /* 20px en todos los lados */
        } */
    </style>
@endsection