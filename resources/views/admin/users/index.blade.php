@extends('adminlte::page')

@section('title', 'Listado de Usuarios')

@section('content_header')
<h1>Listado de Usuarios</h1>
@stop

@section('content')

    @livewire('admin.users-index')

@stop

@section('js')
    <script>
        var info = "{{session('info')}}";
        if (info) {
            Swal.fire({
                type: 'success',
                title: '{{session('info')}}',
                showConfirmButton: false,
                timer: 2500
            })
        }
    </script>
@stop
