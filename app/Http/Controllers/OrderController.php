<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
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

    public function validate_phone($phone)
    {
    if (isset($_POST['telefoonnummer']) == true && empty($_POST['telefoonnummer']) == false) {
       $phone = $_POST['telefoonnummer'] ?? null;
       if (($phone) == true) {
          //
       } else {
          echo "Ongeldig telefoonnummer, probeer opnieuw";
       }
    }
}

    public function validate_mail()
    {
        if (isset($_POST['user_mail']) == true && empty($_POST['user_mail']) == false) {
            $email = $_POST['user_mail'];
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
                // nay
            } else {
                echo 'Ongeldig emailadres, probeer opnieuw';
            }
        }
    }
}