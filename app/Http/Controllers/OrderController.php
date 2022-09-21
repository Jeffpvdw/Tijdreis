<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Participant;
use App\Models\Tour;
use App\Models\Theme;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use \stdClass;

class OrderController extends Controller
{

    public function get()
    {   
        $dateNow = date('Y-m-d H:i:s');

        $tours = Tour::where('capacity', '>', '0')->where('dateTime' , '>', $dateNow)->with('themes')->get();

        return view('gegevens', ['tours' => $tours]);
    }

    public function post(Request $request)
    {
        $reservation = new Reservation();
        $reservation->tour_id = $request->tour;
        $reservation->email = $request->user_mail;
        $reservation->phone = $request->phone;
        $reservation->comment = $request->message;
        $reservation->save();

        $participants = 0;
        foreach($request->participant as $id => $person) {
            $participant[$id] = new Participant();
            $participant[$id]->reservation_id = $reservation->id;
            $participant[$id]->firstname = $person['firstName'];
            $participant[$id]->preposition = $person['proposition'];
            $participant[$id]->lastname = $person['lastName'];
            $participant[$id]->birth_date = $person['date'].'-01';
            $participant[$id]->save();
            $participants++;
        }

        $tour = Tour::where('id', $reservation->tour_id)->get()->first();
        $tour->capacity = $tour->capacity - $participants;
        $tour->save();

        return redirect()->route('PaymentController', ['reservation' => $participant[$id]->reservation_id]);
    }
}
