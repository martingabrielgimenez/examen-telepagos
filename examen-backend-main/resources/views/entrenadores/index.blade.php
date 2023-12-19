@extends('layouts.welcome')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de entrenadores</h1>
        <a href="{{ route('entrenador.create') }}" class="btn btn-primary">Agregar entrenador</a>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Detalles</th>
                <th>Equipos</th>
            </tr>
        </thead>
        <tbody>
            @if($entrenador->count() > 0)
                @foreach($entrenador as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('entrenador.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalles</a>
                                <a href="{{ route('entrenador.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('entrenador.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Eliminar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Entrenador no encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
    
@endsection