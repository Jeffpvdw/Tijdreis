<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("website@tijdrijs-hardenberg.nl", "contact Formulier Tijdreis Hardenberg")
                    ->subject("Nieuw contactformulier")
                    ->replyTo($this->data['email'])
                    ->cc([$this->data['email']])
                    ->view('contactFormMail')
                    ->with(['data' => $this->data]);
    }
}
