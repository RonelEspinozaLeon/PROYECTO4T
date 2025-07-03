@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Registrar Especialidad</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('especialidad.guardar') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre de la especialidad</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="3" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Especialidad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
