<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('doctor.mostrard');
        }else{
            return redirect('login');
        }
    }
}
