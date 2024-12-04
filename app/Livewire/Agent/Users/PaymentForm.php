<?php

namespace App\Livewire\Agent\Users;

use Livewire\Component;
use App\Models\TaxPayment;

class PaymentForm extends Component
{



    public $owner_name;
    public $property_name;
    public $email;

    public $property_address;

   public $phone_number;
    public $amount;

    protected $rules = [
        'owner_name' => 'required|string|max:255',
        'property_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'property_address' => 'required|string|max:500',
        'phone_number' => 'required|numeric',
        'amount' => 'required|numeric|min:1',
    ];

    public function submit()
    {
        $validatedData = $this->validate();


       // $validatedData['user_id'] = auth()->id();


        // Process the validated data (e.g., save to database)
        // TaxPayment::create($validatedData);

        // TaxPayment::create([


        //          ]);


        $taxpayment = new TaxPayment;
        $taxpayment->user_id = auth()->id();
        $taxpayment->property_own_name = $this->owner_name;
        $taxpayment->property_name = $this->property_name;
        $taxpayment->email = $this->email;
        $taxpayment->property_address = $this->property_address;

        $taxpayment->phone = $this->phone_number;
        $taxpayment->amount_paid = $this->amount;
        $taxpayment->payment_unique_id = 7657451;
        $taxpayment->save();



        $this->reset(['owner_name', 'property_name', 'email', 'property_address', 'phone_number', 'amount']);


        session()->flash('success', 'Payment successfully submitted!');
        // return $this->redirect('payment-history', navigate: true);
        $this->redirect(route('payment-page', absolute: false), navigate: true);


    }





    public function render()
    {
        return view('livewire.agent.users.payment-form');
    }








}
