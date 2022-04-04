<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderController
{
    public function sendOrder (Request $request) {
        
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'location' => $request->location,
            'date' => $request->date
        ];

        dump($data);

        DB::table('orders')->insert([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email
        ]);
    }
}