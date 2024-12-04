<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class taskpayment_user extends Model
{


    protected $fillable = [
        'user_id',
        'taskpayment_id',
        'property_own_name',
        'recipient_type',
        'property_name',
        'tax_type',
        'resident_status',
        'property_address',
        'amount_paid',
        'payment_unique_id',




    ];
}
