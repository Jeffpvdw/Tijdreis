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
        $tours = Tour::where('dateTime', '>',  Carbon::now())->with('themes')->get();

        // dd($tours);
        return view('gegevens', ['tours' => $tours]);
    }
}
