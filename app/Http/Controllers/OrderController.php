<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function validate_phone_number($phone_number)
    {
       // Staat een +, - en . toe in het telefoonnummer
       $filtered_phone_number = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);
       // Verwijderd "-" van het nummer
       $phone_to_check = str_replace("-", "", $filtered_phone_number);
       // Controleer de lengte van het nummer
       if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
          return false;
       } else {
          return true;
       }
    }

    public function validate_phone(Request $request)
    {
    $telefoonnummer = $request->input('telefoonnummer');
    if (isset($telefoonnummer) == true && empty($telefoonnummer) == false) {
       $phone = $telefoonnummer ?? null;
       if (($phone) == true) {
          //
       } else {
          echo "Ongeldig telefoonnummer, probeer opnieuw";
       }
    }
}

    public function validate_mail(Request $request)
    {
        $user_mail = $request->input('user_mail');
        if (isset($user_mail) == true && empty($user_mail) == false) {
            $email = $user_mail;
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
                // nay
            } else {
                echo 'Ongeldig emailadres, probeer opnieuw';
            }
        }
    }
}