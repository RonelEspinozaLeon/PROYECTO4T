@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">Registrar Horario</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('horario.guardar') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="diasemana" class="form-label">Día de la semana (1=Lunes, 7=Domingo)</label>
                            <input type="number" name="diasemana" id="diasemana" class="form-control" min="1" max="7" required>
                        </div>

                        <div class="mb-3">
                            <label for="horarioInicio" class="form-label">Hora de inicio</label>
                            <input type="time" name="horarioInicio" id="horarioInicio" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="horarioFin" class="form-label">Hora de fin</label>
                            <input type="time" name="horarioFin" id="horarioFin" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Horario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
