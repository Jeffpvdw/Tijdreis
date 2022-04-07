<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function add_persons($person)
    {
        $count = $_POST["demo"];

        if (!empty($count)) {
            for ($teller = 1; $teller < $count; $teller++)
                if (isset($_POST["first-name_$teller"]) && ($_POST["last-name_$teller"]) && ($_POST["date_$teller"])) {
                    header('Location: pagina.php');
                } elseif (empty($_POST["first-name_$teller"]) && (empty($_POST["last-name_$teller"]) && (empty($_POST["date_$teller"])))) {
                    header('Location: pagina.php');
                } else {
                    header('Refresh: 3; url=check.php');
                    echo "Niet alle gegevens zijn ingevuld, je word automatisch teruggestuurd naar de pagina";
                }
        } else {
            header('Location: pagina.php');
        }
    }
}
