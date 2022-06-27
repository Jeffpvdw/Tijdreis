<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;

$table->string('mollie_customer_id')->nullable();
$table->string('mollie_mandate_id')->nullable();
$table->decimal('tax_percentage', 6, 4)->default(0); // optional
$table->dateTime('trial_ends_at')->nullable(); // optional
$table->text('extra_billing_information')->nullable(); // optional
}
