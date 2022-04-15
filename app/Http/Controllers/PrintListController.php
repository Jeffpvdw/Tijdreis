<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrintListModel;

class PrintListController extends Controller
{
    public function emptyCheck(){
        $tour_id = 0;

        if (!empty($_GET["tour_id"])) {
            echo 'Uw ingevulde tour_id is: ' . $_GET["tour_id"];
            $tour_id = $_GET["tour_id"];
            PrintListModel::requestList($tour_id);
        } else {
            echo 'Vul alstublieft een tour ID in';
        }
    }

    static function printList($results) {
        if (!empty($results)) {
            dump($results);
        } else {
            echo 'Er is geen tour of er zijn geen deelnemers gevonden';
        }
        }
}
