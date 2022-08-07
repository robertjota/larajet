@extends('adminlte::page')

@section('title', 'Listado de Usuarios')

@section('content_header')
<h1>Listado de Usuarios</h1>
@stop

@section('content')

    @livewire('admin.users-index')

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    /* swal.fire(
        'Buen Trabajo',
        'esto es sweetalert2',
        'success'
    ) */
</script>
@stop
