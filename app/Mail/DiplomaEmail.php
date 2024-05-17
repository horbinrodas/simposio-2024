<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DiplomaEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;

    /**
     * Create a new message instance.
     *
     * @param  string  $pdfContent
     * @return void
     */
    public function __construct($pdfContent)
    {
        $this->pdfContent = $pdfContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.diploma')
                    ->attachData($this->pdfContent, 'diploma.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Participante;

class DiplomaEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;
    public $participante;

    public function __construct($pdfContent, Participante $participante)
    {
        $this->pdfContent = $pdfContent;
        $this->participante = $participante;
    }

    public function build()
    {
        return $this->view('emails.diploma')
                    ->from('no-reply@autoselect.online')
                    ->to($this->participante->email)
                    ->subject('Diploma')
                    ->attachData($this->pdfContent, 'diploma.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
