@extends('adminlte::page')

@section('title', 'Editar Rol')

@section('content_header')
<h1>Asignar Rol</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route'=> ['admin.roles.update', $role], 'method' => 'put']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
