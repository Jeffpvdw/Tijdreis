<?php


namespace App\Http\Controllers;

use App\Models\User;

class PaymentController
{

    public function testPayment()
    {
        $user = User::find(2);

        $item = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
        $item->unitPrice(money(49999, 'EUR')); //1 EUR
        $item->description('Test Item 3');
        $chargeItem = $item->make();

        $item2 = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
        $item2->unitPrice(money(0, 'EUR'));
        $item2->description('Test Item 4');
        $chargeItem2 = $item2->make();

        $result = $user->newCharge()
            ->addItem($chargeItem)
            ->addItem($chargeItem2)
            ->create();

        if (is_a($result, \Laravel\Cashier\Http\RedirectToCheckoutResponse::class)) {
            return $result;
        }
        return back()->with('status', 'Thank you.');
    }
}
