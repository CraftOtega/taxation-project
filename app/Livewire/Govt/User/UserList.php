<?php

namespace App\Livewire\Govt\User;

use Livewire\Component;
use App\Models\TaxPayment;

class UserList extends Component
{
    public function render()
    {

 

         $taxPayments = TaxPayment::orderBy('created_at', 'desc')->get();


        return view('livewire.govt.user.user-list', [
            'taxPayments' => $taxPayments,
        ]);
    }
}
