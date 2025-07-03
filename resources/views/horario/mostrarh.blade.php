@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">Lista de Horarios Registrados</h5>
                </div>
                <div class="card-body">
                    @if($horarios->isEmpty())
                        <p class="text-muted">No hay horarios registrados aún.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Día de la Semana</th>
                                    <th>Hora de Inicio</th>
                                    <th>Hora de Fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->id }}</td>
                                        <td>{{ $horario->diasemana }}</td>
                                        <td>{{ $horario->horarioInicio }}</td>
                                        <td>{{ $horario->horarioFin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
