@extends('layouts.welcome')
 
@section('body')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('entrenadores.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descripcion"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection