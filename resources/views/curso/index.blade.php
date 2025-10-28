@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1 class="mb-4 text-center">Listado de cursos</h1>

  <div class="row">
    @foreach ($cursos as $curso)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">{{ $curso->name }}</h5>
            <p class="card-text">{{ $curso->descripcion }}</p>
            <p class="card-text"><strong>Archivo:</strong> {{ $curso->urlPdf }}</p>
            <iframe src="{{ asset('storage/public/images/' . $curso->urlPdf) }}" frameborder="0" width="100%" height="150"></iframe>
          </div>
          <div class="card-footer d-flex justify-content-between flex-wrap">
            <a href="{{ route('curso.show', $curso->id) }}" class="btn btn-sm btn-info mb-1">Mostrar</a>
            <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-sm btn-warning mb-1">Editar</a>
            <form action="{{ route('curso.destroy', $curso->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este curso?')" class="mb-1">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection