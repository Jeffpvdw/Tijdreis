<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function age()
    {
        return $this->birthdate->diffInYears(\Carbon\Carbon::now());
        // $ages = DB::table('statistics')
        // ->selectRaw("TIMESTAMPDIFF(YEAR, DATE(birthdate), current_date) AS age")
        // ->get();
    }
    public function selectpeople(){
        //$people = statistics::all();// DB::select('select * from statistics');
        $ages = DB::table('statistics')
                ->selectRaw("TIMESTAMPDIFF(YEAR, DATE(birthdate), current_date) AS age, COUNT(TIMESTAMPDIFF(YEAR, DATE(birthdate), current_date)) as count")
                ->groupBy('age')
                ->get();

        return view('backpack::base/dashboard', [
            //'people' => $people, 
            'ages' => $ages,
            'controller' => $this,
        ]);
    }
}


