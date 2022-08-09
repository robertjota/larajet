@extends('adminlte::page')

@section('title', 'Calendario')

@section('content_header')
    {{-- @can('admin.categories.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.categories.create') }}">Agregar Categoria</a>
    @endcan --}}
    <h1>Calendario</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <div id="agenda"></div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form id="formulario" action="">
                    @csrf

                    <div class="form-group d-none">
                      <label for="id">Id</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" readonly>
                      @error('id')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el titulo del evento" aria-describedby="helpId" value="{{ old('title') }}">
                      @error('title')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="Description">Descripción</label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="start">Inicio</label>
                      <input type="date" class="form-control" name="start" id="start">
                    </div>

                    <div class="form-group">
                      <label for="end">Fin</label>
                      <input type="date" class="form-control" name="end" id="end">
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

@stop

@section('js')
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="/js/agenda.js"></script>
    <script>
        const baseURL = '<?php echo env('APP_URL'); ?>';
    </script>


@stop
