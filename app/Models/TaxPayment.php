<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxPayment extends Model
{
    protected $fillable = [
        'user_id',
        'property_own_name',
        'property_name',
        'email',
        'property_address',
        'amount_paid',
        'payment_unique_id',




    ];






    public function user()
{
    return $this->belongsTo(User::class);
}

}
