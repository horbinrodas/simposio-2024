<?php

namespace App\Http\Controllers;

use App\Mail\DiplomaEmail;
use App\Mail\ConfirmacionPago;
use App\Models\Participante;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ParticipanteController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del participante
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:participantes,email',
            'telefono' => 'required|string|max:20',
            'carnet' => 'nullable|string|max:255',
        ]);

        // Si se ha enviado el formulario
        if ($request) {
            try {
                
                $participante = new Participante();
                $participante->nombre = $request->nombre;
                $participante->apellido = $request->apellido;
                $participante->email = $request->email;
                $participante->telefono = $request->telefono;
                $participante->carnet = $request->carnet;
                $participante->save();

                // Enviar el correo electrónico de confirmación
                Mail::send(new ConfirmacionPago($participante));

                // Generar y enviar el diploma en formato PDF
                //$this->generarYEnviarDiploma($participante);

                // Redireccionar si todo ha sido exitoso
                return redirect()->back()->with('success', '¡Participante registrado exitosamente!');
            } catch (\Exception $e) {
                // Manejar cualquier error que pueda ocurrir durante el proceso
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
        // Si no se ha enviado el formulario, redirecciona de vuelta al formulario de inscripción
        return redirect()->back()->with('error', 'Hubo un problema al procesar el formulario.');
    }
}
