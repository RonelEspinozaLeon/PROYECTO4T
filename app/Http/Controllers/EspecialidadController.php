<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Especialidad;
class EspecialidadController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            $especialidades = Especialidad::all();
            return view('especialidad.mostrare',compact('especialidades'));
        }else{
            return redirect('login');
        }
    }
    public function especialidad()
    {
        if (Auth::check()) {
            return view('especialidad.formularioe');
        } else {
            return redirect('login');
        }
    }
    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        Especialidad::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->back()->with('status', 'Especialidad guardada correctamente.');
    }
}
