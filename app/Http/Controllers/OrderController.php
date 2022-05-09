<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function get()
    {
        $tours = Tour::where('dateTime', '>',  Carbon::now())->get();
        return view('gegevens', ['tours' => $tours]);
    }
}
