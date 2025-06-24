<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('cita.mostrarc');
        }else{
            return redirect('login');
        }
    }
    public function formulario(){
        if(Auth::check()){
            return view('cita.formularioc');
        }else{
            return redirect('login');
        }
    }
}
