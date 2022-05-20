<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClearUnpaidController extends Controller
{
    public function check() {
        DB::raw()
        echo 'done';
    }
}
