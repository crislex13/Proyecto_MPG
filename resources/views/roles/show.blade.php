@extends('layouts.app')
<!-- @section('content') -->

<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">ROL
                @can('role-create')
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Nombre:</strong>
                    {{ $role->name }}
                </div>
                <div class="lead">
                    <strong>Permisos:</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $permission)
                            <label class="badge badge-success">{{ $permission->name }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
            <button type="button" class="btn btn-primary"
                        onclick="window.location='{{ route('roles.index') }}'">Atras</button>
        </div>
    </div>
</div>
@endsection
