<?php


namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Reservation;
use App\Models\User;

class PaymentController
{

    public function testPayment(int $reservationId)
    {
        $participant = Participant::where(['reservation_id' => $reservationId])->get();
        $reservation = Reservation::find($reservationId);

        $user = $reservation->email;



        $item = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
        $item->unitPrice(money(20000, 'EUR')); //1 EUR
        $item->description('energie-10-06-2022');
        $chargeItem = $item->make();

        $item2 = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
        $item2->unitPrice(money(0, 'EUR'));
        $item2->description('Test Item 4');
        $chargeItem2 = $item2->make();

        $result = $user->newCharge()
            ->addItem($chargeItem)
            ->addItem($chargeItem2)
            ->setRedirectUrl('https://jimvogelzang.icthardenberg.nl/mollie.nl')
            ->create();

        if (is_a($result, \Laravel\Cashier\Http\RedirectToCheckoutResponse::class)) {
            return $result;
        }
        return back()->with('status', 'Thank you.');
    }
}
