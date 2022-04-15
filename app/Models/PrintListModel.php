<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PrintListController;

class PrintListModel extends Model
{
    use HasFactory;

    static function requestList($tour_id){
        dump($tour_id);
        $results = DB::select('SELECT
                                 `p`.`id`,
                                 `p`.`firstname`,
                                 `p`.`preposition`,
                                 `p`.`lastname`,
                                 `s`.`birthdate`,
                                 `s`.`zipcode`
                             FROM
                                 `participants` `p`
                             JOIN `statistics` `s` ON
                                 `p`.`id` = `s`.`participant_id`
                             JOIN `reservations` `r` ON
                                 `p`.`reservation_id` = `r`.`id`
                             WHERE
                                 `r`.`tour_id` = ' . $tour_id, [1]);
        PrintListController::printList($results);
    }
}
