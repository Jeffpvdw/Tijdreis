<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrintListModel;
use Illuminate\Support\Facades\DB;


class PrintListController extends Controller
{
    public function emptyCheck(Request $request){
        // dd($request->tour_id);

        if($request->tour_id) {
            echo "Uw ingevulde tour_id is: " . $request->tour_id;

            $tour = DB::select('SELECT
            `p`.`id`,
            `p`.`firstname`,
            `p`.`preposition`,
            `p`.`lastname`,
            `s`.`birthdate`,
            `s`.`zipcode`,
            `r`.`comment`
        FROM
            `participants` `p`
        JOIN `statistics` `s` ON
            `p`.`id` = `s`.`participant_id`
        JOIN `reservations` `r` ON
            `p`.`reservation_id` = `r`.`id`
        WHERE
            `r`.`tour_id` = ' . $request->tour_id, [1]);

            return view('print')->with([
                'tour' => $tour
            ]);
        } else {
            return view('print');
        }

        // if (!empty($_GET["tour_id"])) {
        //     echo 'Uw ingevulde tour_id is: ' . $_GET["tour_id"];
        //     $tour_id = $_GET["tour_id"];
        //     PrintListModel::requestList($tour_id);
        // } else {
        //     echo 'Vul alstublieft een tour ID in';
        // }
        // return view('print');
    }

    // static function printList($results) {
    //     if (!empty($results)) {
    //         return view('print')->with([
    //             'data' => $results,
    //         ]);
    //         // echo $results;
    //     } else {
    //         echo 'Er is geen tour of er zijn geen deelnemers gevonden';
    //     }
    //     }
}
