<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmOrder extends Mailable
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
        return $this->from("website@tijdrijs-hardenberg.nl", "Order Bevestiging Tijdreis Hardenberg")
                    ->subject("Order Bevestiging Tijdreis Hardenberg")
                    ->view('confirmOrderMail')
                    ->with(['data' => $this->data]);
        
    }
}
