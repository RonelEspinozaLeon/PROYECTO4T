@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Registro de Datos del Doctor</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('doctor.guardar') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion" class="form-label">Ubicación</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="biografia" class="form-label">Biografía</label>
                            <textarea name="biografia" id="biografia" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="especialidad_id" class="form-label">Especialidad ID</label>
                            <input type="number" name="especialidad_id" id="especialidad_id" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="horario_id" class="form-label">Horario ID</label>
                            <input type="number" name="horario_id" id="horario_id" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
