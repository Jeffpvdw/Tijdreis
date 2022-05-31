<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClearUnpaidController extends Controller
{
    public function check() {
       /* DB::raw("DELETE FROM `orders` WHERE mollie_payment_status = 'unpaid' AND created_at < (NOW() - INTERVAL 30 MINUTE);" );
        echo 'done'; */
        $delete = DB::table('orders')
            ->selectRaw();
    }
}
