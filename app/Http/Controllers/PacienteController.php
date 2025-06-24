<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('paciente.mostrarp');
        }else{
            return redirect('login');
        }
    }
}
