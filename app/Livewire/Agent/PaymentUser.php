<?php

namespace App\Livewire\Agent;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PaymentUser extends Component
{


    public $taxType;
    public $recipientType;
    public $residencyStatus;
    public $amount;
    public $result;

    public $withholdingTaxTable = [
        "Dividends and Interest" => [
            "Corporate" => ["Resident" => 0.1, "Nonresident" => 0.1],
            "NonCorporate" => ["Resident" => 0.1, "Nonresident" => 0.1],
        ],
        "Royalties" => [
            "Corporate" => ["Resident" => 0.1, "Nonresident" => 0.1],
            "NonCorporate" => ["Resident" => 0.05, "Nonresident" => 0.05],
        ],
        // Add the remaining tax types and rates here...
    ];

    public function calculateTax()
    {
        // Validate required fields
        if (!$this->taxType || !$this->recipientType || !$this->residencyStatus || !$this->amount) {
            $this->result = 'Please fill in all fields.';
            return;
        }

        // Get the tax information from the table
        $taxInfo = $this->withholdingTaxTable[$this->taxType] ?? null;

        if (!$taxInfo) {
            $this->result = "Invalid tax type selected.";
            return;
        }

        // Get the rate based on recipient type and residency status
        $rate = $taxInfo[$this->recipientType][$this->residencyStatus] ?? null;

        if ($rate === null) {
            $this->result = "No applicable tax rate for the selected type.";
            return;
        }

        // Calculate the tax amount
        $taxAmount = $this->amount * $rate;

        // Set the result to display in the UI
        $this->result = sprintf(
            "For an amount of %.2f, the withholding tax for %s (%s %s) is %.2f",
            $this->amount,
            $this->taxType,
            $this->recipientType,
            $this->residencyStatus,
            $taxAmount
        );
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.agent.payment-user');
    }
}









