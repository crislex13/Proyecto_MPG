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
            <div class="card-header">EDITAR USUARIO
            </div>

            <div class="card-body">
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Correo:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Correo electronico','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Contraseña:</strong>
                        {!! Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Confirmar Contraseña:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirmar contraseña','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Rol:</strong>
                        {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('users.index') }}'">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</aside>
@endsection