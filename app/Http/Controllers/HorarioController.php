<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Horario;
class HorarioController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            $horarios = Horario::all();
            return view('horario.mostrarh',compact('horarios'));
        }else{
            return redirect('login');
        }
    }
    public function horario()
    {
        if (Auth::check()) {
            return view('horario.formularioh', );
        } else {
            return redirect('login');
        }
    }
    public function guardar(Request $request)
    {
        $request->validate([
            'diasemana' => 'required|integer|between:1,7',
            'horarioInicio' => 'required|date_format:H:i',
            'horarioFin' => 'required|date_format:H:i|after:horarioInicio',
        ]);

        Horario::create([
            'diasemana' => $request->diasemana,
            'horarioInicio' => $request->horarioInicio,
            'horarioFin' => $request->horarioFin,
        ]);

        return redirect()->back()->with('status', 'Horario guardado correctamente.');
    }
}
