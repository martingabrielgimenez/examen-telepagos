@extends('layouts.welcome')
 
@section('body')
    <h1 class="mb-0">Editar entrenador</h1>
    <hr />
    <form action="{{ route('entrenador.update', $entrenador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Editar entrenador</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $entrenador->title }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Detalles</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $entrenador->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection