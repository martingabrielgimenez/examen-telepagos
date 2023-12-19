@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalles entrenador</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="title" class="form-control" placeholder="Nombre" value="{{ $entrenador->title }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Detalles</label>
            <input type="text" name="description" class="form-control" placeholder="Detalles del entrenador" value="{{ $entrenador->description }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Equipos</label>
            <textarea class="form-control" name="equipos" placeholder="Descripción" readonly>{{ $entrenador->equipos }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Createdo el</label>
            <input type="text" name="created_at" class="form-control" placeholder="Creado el" value="{{ $entrenador->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Actualizado el</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Creado el" value="{{ $entrenador->updated_at }}" readonly>
        </div>
    </div>
@endsection