<?php
use App\Models\User;

$user = App\Models\User::find(1);

$item = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
$item->unitPrice(money(100,'EUR')); //1 EUR
$item->description('Test Item 1');
$chargeItem = $item->make();

$item2 = new \Laravel\Cashier\Charge\ChargeItemBuilder($user);
$item2->unitPrice(money(200,'EUR'));
$item2->description('Test Item 2');
$chargeItem2 = $item2->make();

$result = $user->newCharge()
    ->addItem($chargeItem)
    ->addItem($chargeItem2)
    ->create();

if(is_a($result, \Laravel\Cashier\Http\RedirectToCheckoutResponse::class)) {
    return $result;
}

return back()->with('status', 'Thank you.');
