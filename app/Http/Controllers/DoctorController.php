<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function mostrar()
    {
        if (Auth::check()) {
            return view('doctor.mostrard');
        } else {
            return redirect('login');
        }
    }


    public function guardar(Request $request)
    {
        Doctor::create([
            'user_id' => Auth::id(),
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'ubicacion' => $request->ubicacion,
            'biografia' => $request->biografia,
            'especialidad_id' => $request->especialidad_id,
            'horario_id' => $request->horario_id,
        ]);

        return redirect('/doctor/home')->with('status', 'Datos del doctor guardados correctamente.');
    }
    
    
    

}
