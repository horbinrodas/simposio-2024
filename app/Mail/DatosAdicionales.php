<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DatosAdicionales extends Mailable
{
    use Queueable, SerializesModels;

    public $participante;

    public function __construct($participante)
    {
        $this->participante = $participante;
    }

    public function build()
    {
      $this->participante->pago->estado = 'pendiente';
      $this->participante->pago->save();
      return $this
        ->from('no-reply@autoselect.online')
        ->to($this->participante->email)
        ->subject('Datos Adicionales')
        ->view('emails.datos_adicionales');
    }
}
