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
                <div class="card-header">AGREGAR CLIENTE
                </div>
                <div class="card-body">
                    {!! Form::open(array('route' => 'clients.store', 'method' => 'POST')) !!}
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('nombre', null, array('placeholder' => 'Nombre', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Apellido Paterno:</strong>
                        {!! Form::text('apellido_paterno', null, array('placeholder' => 'Apellido Paterno', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Apellido Materno:</strong>
                        {!! Form::text('apellido_materno', null, array('placeholder' => 'Apellido Materno', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Ci:</strong>
                        {!! Form::text('ci', null, array('placeholder' => 'Ci', 'class' => 'form-control', 'pattern' => '[0-9]{7,12}', 'title' => 'Debe tener entre 7 y 12 dígitos', 'maxlength' => '12')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Telefono:</strong>
                        {!! Form::number('telefono', null, array('placeholder' => 'Telefono', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Fecha de Nacimiento:</strong>
                        {!! Form::date('fecha_nacimiento', null, array('placeholder' => 'Fecha de Nacimiento', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Correo:</strong>
                        {!! Form::email('correo', null, array('placeholder' => 'Correo', 'class' => 'form-control', 'oninput' => 'this.value = this.value.replace(/@.*$/, "@gmail.com")')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Disciplina:</strong>
                        {!! Form::text('disciplina', null, array('placeholder' => 'disciplina', 'class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Plan:</strong>
                        {!! Form::text('plan', null, array('placeholder' => 'Plan', 'class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('clients.index') }}'">Cancelar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection