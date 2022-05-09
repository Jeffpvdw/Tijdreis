<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmOrder;

class ConfirmOrderController
{
    function sendMail(Request $request)
    {
        $data = [
            'email' => $request->user_mail,
            'phone' => $request->telefoonnumer,
            'firstname' => $request->firstName_,
            'lastname' => $request->lastName_,
            'tour' => $request->tour,
            'price' => $request->totalPrice
        ];

        Mail::to("info@hvhardenberg.nl")->send(new ConfirmOrder($data));
        return view("succes");
    }

}