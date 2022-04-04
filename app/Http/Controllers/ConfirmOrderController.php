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
            'email' => $request->email,
            'name' => $request->lastname,
            'date' => $request->date,
            'location' => $request->location
        ];

        Mail::to("info@hvhardenberg.nl")->send(new ConfirmOrder($data));
    }

}