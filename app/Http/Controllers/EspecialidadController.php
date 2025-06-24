<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('especialidad.mostrare');
        }else{
            return redirect('login');
        }
    }
}
