<?php

namespace App\Livewire\Agent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\TaxPayment;


class RegisterUser extends Component
{


    public $owner_name;
    public $email;


   public $phone_number;
    public $stin_number;




    protected $rules = [
        'owner_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|numeric',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        $taxpayment = new TaxPayment;
        $taxpayment->user_id = auth()->id();
        $taxpayment->property_own_name = $this->owner_name;
        $taxpayment->email = $this->email;

        $taxpayment->phone = $this->phone_number;
        $taxpayment->stin_number = $this->stin_number;
        $taxpayment->payment_unique_id = 7657451;
        $taxpayment->save();



        $this->reset(['owner_name', 'property_name', 'email', 'property_address', 'phone_number', 'amount']);


        session()->flash('success', 'Payment successfully submitted!');
        // return $this->redirect('payment-history', navigate: true);
        $this->redirect(route('payment-page', absolute: false), navigate: true);


    }


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.agent.register-user');
    }
}
