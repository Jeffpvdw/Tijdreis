<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class ContactController
{
    function sendMail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'msg' => $request->msg
        ];

        Mail::to("info@hvhardenberg.nl")->send(new ContactForm($data));
    }

}
