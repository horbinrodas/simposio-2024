<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmacionRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $participante;

    public function __construct($participante)
    {
        $this->participante = $participante;
    }

    public function build()
    {
        return $this
            ->from('no-reply@autoselect.online')
            ->to($this->participante->email)
            ->subject('Confirmación de Registro')
            ->view('emails.confirmacion_registro');
    }
}
