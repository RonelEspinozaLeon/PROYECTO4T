@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">{{ __('Bienvenido al Panel Principal') }}</h5>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="mb-3">Hola  👋</h4>
                    <p>Estás conectado como <strong>{{ ucfirst(Auth::user()->tipo) }}</strong>.</p>
                    <p>Utiliza el menú para acceder a tus funciones.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
<!-- 
<h1>ELIGE EL TIPO DE USUARIO</h1>
<table border="red" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a class="nav-link" href="paciente/formulario/">Paciente</a>
                    <a class="nav-link" href="doctor/formulario/">Doctor</a>
                
                </div>
            </div>
        </div>
    </div>
</table>
  -->