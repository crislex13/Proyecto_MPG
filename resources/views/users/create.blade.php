@extends('layouts.app')
<!-- @section('content') -->
<aside class="right-side">
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Upps!</strong> 
                Algo salió mal, verifique los errores a continuación.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">AGREGAR USUARIO
            </div>

            <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Correo Electronico:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Correo Electronico','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Contraseña:</strong>
                        {!! Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Confirmar Contraseña:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirmar Contraseña','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Rol:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('users.index') }}'">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</aside>
@endsection