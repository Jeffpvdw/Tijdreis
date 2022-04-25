<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function age()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }
    
    
}

$people = DB::select('select * from statistics');
