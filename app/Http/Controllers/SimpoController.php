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
        $data->email=$request->email;
        $data->telefono=$request->telefono;
        $data->codigo_qr=$request->codigo_qr;

        if(codigo_qr){
            $nombreqr=time().'.'.$codigo_qr->getClientOriginalExtension();
            $request->codigo_qr->move('participante',$nombreqr);
            $data->codigoqr=$nombreqr;
        }

        $data->save();

        return redirect()->back();
        
    }

}
