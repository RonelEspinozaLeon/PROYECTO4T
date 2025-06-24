<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('horario.mostrarh');
        }else{
            return redirect('login');
        }
    }
}
