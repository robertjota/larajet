@extends('adminlte::page')

@section('title', 'Listado de Categorias')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.categories.create') }}">Agregar Categoria</a>
    @endcan
    <h1>Listado de Categorias</h1>
@stop

@section('content')

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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('delete')

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
