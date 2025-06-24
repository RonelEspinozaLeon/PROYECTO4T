<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('cita.mostrarc');
        }else{
            return redirect('login');
        }
    }
}
