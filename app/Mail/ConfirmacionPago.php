<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Participante;

class ConfirmacionPago extends Mailable
{
    use Queueable, SerializesModels;

    public $participante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Participante $participante)
    {
        $this->participante = $participante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->participante->pago->estado = 'validado';
        $this->participante->pago->save();
        $string = '127.0.0.1:8000/participacion/'.$this->participante->codigo_participante;
        $qr = QrCode::size(200)->generate($string);
        return $this
            ->from('no-reply@autoselect.online')
            ->to($this->participante->email)
            ->subject('Confirmación de Pago')
            ->view('emails.confirmacion_pago')->with([
                'qr' => $qr,
            ]);
    }
}