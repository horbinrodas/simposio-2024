<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DiplomaEmail;
use App\Models\Participante;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Dompdf\Dompdf;
use Dompdf\Options;

class DiplomaController extends Controller
{
    public function mostrarFormularioCorreo()
    {
        return view('enviar_correo');
    }

    public function buscarCarnet(Request $request)
    {
        $request->validate([
            'carnet' => 'required|string|max:255',
        ]);

        $carnet = $request->input('carnet');
        $participante = Participante::where('carnet', $carnet)->first();

        if ($participante) {
            Session::flash('persona', $participante);
        } else {
            return redirect()->back()->withErrors(['No se encontró ningún participante con ese carnet.']);
        }

        return redirect()->route('enviar-correo');
    }

    public function generarDiploma(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $nombre = $request->input('nombre');
        $email = $request->input('email');

        $participante = Participante::firstOrNew(['email' => $email]);
        $participante->nombre = $nombre;
        $participante->save();

        $pdfContent = $this->generarContenidoPDF($nombre);

        $this->enviarCorreoConDiploma($participante, $pdfContent);

        return redirect()->back()->with('success', 'Diploma generado y enviado con éxito.');
    }

    private function generarContenidoPDF($nombre)
    {
        $html = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Diploma</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f9f9f9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .diploma-container {
                    width: 100%;
                    border: 10px solid #1e3a8a; /* Azul */
                    border-radius: 15px;
                    padding: 20px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    text-align: center;
                    position: relative;
                }
                .diploma-header {
                    background-color: #d32f2f; /* Rojo */
                    color: white;
                    padding: 10px;
                    border-radius: 10px 10px 0 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .diploma-header img {
                    width: 80px; /* Ajusta el tamaño según sea necesario */
                    height: auto;
                    margin: 0 20px;
                }
                .diploma-body {
                    padding: 20px;
                }
                .diploma-footer {
                    background-color: #1e3a8a; /* Azul */
                    color: white;
                    padding: 10px;
                    border-radius: 0 0 10px 10px;
                }
                h1, h2, p {
                    margin: 10px 0;
                }
                .recipient {
                    font-size: 1.5em;
                    margin: 20px 0;
                    color: #1e3a8a; /* Azul */
                }
                .event-details {
                    font-size: 1em;
                    color: #333;
                }
            </style>
        </head>
        <body>
            <div class="diploma-container">
                <div class="diploma-header">
                    <img src="' . public_path('umg.png') . '" alt="UMG Logo">
                    <h1>Diploma de Participación</h1>
                    <img src="' . public_path('logoSimposio.jpg') . '" alt="Logo Simposio">
                </div>
                <div class="diploma-body">
                    <p>Otorgado a:</p>
                    <div class="recipient">' . $nombre . '</div>
                    <p>Por su participación en el evento:</p>
                    <div class="event-details">
                        <p><strong>Simposio Universidad Mariano Gálvez</strong></p>
                        <p>Campus Quetzaltenango</p>
                        <p>16 de mayo de 2024</p>
                    </div>
                </div>
                <div class="diploma-footer">
                    <p>Universidad Mariano Gálvez, Campus Quetzaltenango</p>
                </div>
            </div>
        </body>
        </html>';

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->output();
    }

    private function enviarCorreoConDiploma($participante, $pdfContent)
    {
        Mail::to($participante->email)->send(new DiplomaEmail($pdfContent, $participante));
    }
}
