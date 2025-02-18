@extends('layouts.app')
<!-- @section('content') -->
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>¡Ups!</strong> Algo salió mal, por favor revisa los errores a continuación.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">CREAR PERMISO
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('permissions.index') }}'">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection