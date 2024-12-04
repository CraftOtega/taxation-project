<?php

namespace App\Livewire\Agent\Users;

use Livewire\Component;
use App\Models\TaxPayment;
use Barryvdh\DomPDF\Facade\Pdf;


class AllTaxPaymentPdf extends Component
{








    public function render()
    {
        return view('livewire.agent.users.all-tax-payment-pdf');
    }
}
