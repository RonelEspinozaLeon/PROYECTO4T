@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Panel del Paciente</h5>
                </div>

                <div class="card-body">
                    <h4 class="mb-3">Hola {{ $paciente->nombre }}</h4>

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nombre:</strong> {{ $paciente->nombre }}</li>
                        <li class="list-group-item"><strong>Apellido:</strong> {{ $paciente->apellido }}</li>
                        <li class="list-group-item"><strong>Fecha de nacimiento:</strong> {{ $paciente->fecha_nacimiento }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
