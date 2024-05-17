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

    public function storePago(Request $request)
    {
        // Validar los datos del pago
        try {
            $request->validate([
                'cod_participante' => 'required|string|max:255',
                'cod_pago' => 'required|string|max:255|unique:pagos,codigo_pago',
                //'monto' => 'required|numeric|between:0.00,1000.00',
                'fecha_pago' => 'required|date',
                'comprobante' => 'required|file|max:10000|mimes:pdf,jpg,jpeg,png',
            ]);
        } catch (\Exception $e) {
            // Handle any error that may occur during the process
            return view('pago', ['message' => $e->getMessage()]);
        }

        // Si se ha enviado el formulario
        if ($request) {
            try {
                // Buscar al participante por su código
                $participante = Participante::where('codigo_participante', $request->cod_participante)->first();
                if ($participante) {
                    // Crear un nuevo pago
                    $filename = uniqid() . '.' . $request->comprobante->getClientOriginalExtension();
                    $request->comprobante->move(storage_path('app/comprobantes'), $filename);
                    
                    $pago = $participante->pago()->firstOrNew();
                    $pago->codigo_pago = $request->cod_pago;
                    $pago->monto = 350.00;
                    $pago->fecha_pago = $request->fecha_pago;
                    $pago->comprobante = $filename;
                    $pago->estado = 'recibido';
                    $pago->save();
                    $participante->pago()->save($pago);

                    // Enviar el correo electrónico de confirmación
                    //Mail::send(new ConfirmacionPago($participante));

                    // Redireccionar si todo ha sido exitoso
                    return view('pago', ['message' => '¡Pago registrado exitosamente!, espere la confirmación de su inscripción.']);
                } else {
                    return view('pago', ['message' => 'No se encontró el participante con el código proporcionado.']);
                }
            } catch (\Exception $e) {
                // Manejar cualquier error que pueda ocurrir durante el proceso
                return view('pago', ['message' => $e->getMessage()]);
            }
        }
        // Si no se ha enviado el formulario, redirecciona de vuelta al formulario de inscripción
        return view('pago', ['message' => 'Hubo un problema al procesar el formulario.']);

    }
}
