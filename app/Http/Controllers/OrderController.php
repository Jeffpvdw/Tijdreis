<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        JOIN `themes` `th` ON `t`.`theme_id` = `th`.`id`
        JOIN `reservations` `r` ON `r`.`tour_id` = `t`.`id`
        JOIN `participants` `p` ON `p`.`reservation_id` = `r`.`id`
        WHERE `t`.`dateTime` > NOW()
        GROUP BY `r`.`tour_id`
SQL);

        return view('gegevens', ['tours' => $tours]);
    }
}
