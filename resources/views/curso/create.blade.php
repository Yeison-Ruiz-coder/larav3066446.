@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1 class="mb-4 text-center">Crear Curso</h1>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="{{ route('curso.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Nombre del curso</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Ej. Laravel desde cero" required>
            </div>

            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Breve descripción" required>
            </div>

            <div class="mb-3">
              <label for="urlPdf" class="form-label">Archivo PDF</label>
              <input type="file" name="urlPdf" id="urlPdf" class="form-control" accept=".pdf">
            </div>

            <button type="submit" class="btn btn-success w-100">
              <i class="fas fa-plus-circle me-2"></i> Registrar Curso
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection