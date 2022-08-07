@extends('adminlte::page')

@section('title', 'Listado de Roles')

@section('content_header')
    {{-- @can('admin.roles.create') --}}
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.roles.create') }}">Agregar Nuevo Rol</a>
    {{-- @endcan --}}
<h1>Listado de Roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td width="10px">
                                @can('admin.roles.edit')
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.roles.edit', $rol) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.roles.destroy')
                                    <form action="{{ route('admin.roles.destroy', $rol) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
