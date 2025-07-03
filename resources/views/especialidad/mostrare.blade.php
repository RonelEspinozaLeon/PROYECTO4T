@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Lista de Especialidades Registradas</h5>
                </div>
                <div class="card-body">
                    @if($especialidades->isEmpty())
                        <p class="text-muted">No hay especialidades registradas aún.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($especialidades as $especialidad)
                                    <tr>
                                        <td>{{ $especialidad->id }}</td>
                                        <td>{{ $especialidad->nombre }}</td>
                                        <td>{{ $especialidad->descripcion }}</td>
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
