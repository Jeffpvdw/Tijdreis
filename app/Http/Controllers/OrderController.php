<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Tour;
use App\Models\Theme;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use \stdClass;

class OrderController extends Controller
{
    public function get()
    {
        $tours = DB::select(<<<SQL
        SELECT `t`.`id`, `th`.`title`, `t`.`dateTime`, (`t`.`capacity` - COUNT(`p`.`id`)) AS `capacity`
        FROM `tours` `t`
        LEFT JOIN `themes` `th` ON `t`.`theme_id` = `th`.`id`
        LEFT JOIN `reservations` `r` ON `r`.`tour_id` = `t`.`id`
        LEFT JOIN `participants` `p` ON `p`.`reservation_id` = `r`.`id`
        WHERE `t`.`dateTime` > NOW()
        GROUP BY `r`.`tour_id`
SQL);
        
        return view('gegevens', ['tours' => $tours]);
    }

    public function post(Request $request)
    {
        $reservation = new Reservation();
        $reservation->tour_id = $request->tour;
        $reservation->name = $request->lastName_;
        $reservation->email = $request->user_mail;
        $reservation->phone = $request->phone;
        $reservation->comment = $request->message;
        $reservation->save();
    }
}
