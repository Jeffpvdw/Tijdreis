<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FailedPayment extends Controller
{
$user = App\User::find(2);
$order = $user->orders->find(1) // id of the failed order;
$order->retryNow();

}
