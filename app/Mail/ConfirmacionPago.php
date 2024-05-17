<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
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
        return $this
            ->from('no-reply@autoselect.online')
            ->to($this->participante->email)
            ->subject('Confirmación de inscripcion')
            ->view('emails.confirmacion_pago');
    }
}