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
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to("info@hvhardenberg.nl")->send(new ContactForm($data));
        return view("contactsend");
    }

}
