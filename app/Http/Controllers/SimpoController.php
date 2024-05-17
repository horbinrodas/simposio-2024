<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participante;

class SimpoController extends Controller
{
    public function index()
    {
        return view('Inscribirse');
    }

    public function ingresar(Request $request)
    {
        $data=new Participante;

        $data->nombre=$request->nombre;
        $data->apellido=$request->apellido;
        $data->carnet=$request->carnet;
        $data->email=$request->email;
        $data->telefono=$request->telefono;

        $data->save();

        return redirect()->back();
        
    }

}
