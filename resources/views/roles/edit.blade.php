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
            <div class="card-header">EDITAR ROL
            </div>
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $role->id],'meSthod' => 'PATCH']) !!}
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Permiso:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('roles.index') }}'">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
