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
            <div class="card-header">PERMISO
                @can('role-create')
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Nombre:</strong>
                    {{ $permission->name }}
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary"
                        onclick="window.location='{{ route('permissions.index') }}'">Atras</button>
    </div>
</div>
@endsection