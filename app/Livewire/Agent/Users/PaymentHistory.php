<?php

namespace App\Livewire\Agent\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TaxPayment;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class PaymentHistory extends Component
{
    use WithPagination;

    public $query = '';
    public $userId;



    public function search()
    {
        $this->resetPage();
    }




    // public function render()
    // {



    //     // $taxPayments = TaxPayment::orderBy('created_at', 'desc')->paginate(10);
    //     $taxPayments = TaxPayment::where('user_id', auth()->id())
    //          ->where('property_own_name', 'like', '%' . $this->query . '%')
    //         ->orWhere('property_name', 'like', '%' . $this->query . '%')
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(10);


    //     return view('livewire.agent.users.payment-history', [
    //         'taxPayments' => $taxPayments,
    //     ]);
    // }



    public function render()
{
    $taxPayments = TaxPayment::where('user_id', auth()->id()) // Ensure user_id matches the authenticated user
        ->where(function ($query) {
            $query->where('property_own_name', 'like', '%' . $this->query . '%')
                  ->orWhere('property_name', 'like', '%' . $this->query . '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('livewire.agent.users.payment-history', [
        'taxPayments' => $taxPayments,
    ]);
}



    public function downloadPDF()
    {

        // Fetch all tax payments
        $taxPayments = TaxPayment::all();

        // Generate PDF view with the data
        $pdf = Pdf::loadView('agent.users.pdf.AllTaxPaymentPdf', compact('taxPayments'))
            ->setPaper('a4', 'landscape');
        ;

        // Return the generated PDF for download
        // return response()->streamDownload(
        //     fn () => print($pdf->output()),
        //     'tax_payments.pdf'
        // );

        return response()->streamDownload(function () use ($pdf) {

            echo $pdf->stream();

        }, 'users.pdf');

    }





    public function downloadUserPDF($userId)
    {
        $this->userId = $userId;

        // Fetch the specific tax payment record
        $taxPayments = TaxPayment::where('id', $this->userId)->first();

        if (!$taxPayments) {
            session()->flash('error', 'No tax payments found for this user.');
            return;
        }

        // Fetch the property name
        $propertyName = $taxPayments->property_name ?? 'unknown_error_property';

        // Generate the PDF
        $pdf = Pdf::loadView('agent.users.pdf.SingleTaxPaymentPdf', compact('taxPayments'))
            ->setPaper('a4', 'landscape');

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "user_{$propertyName}_tax_payments.pdf");



        // Generate PDF view with the data
        // $pdf = Pdf::loadView('pdf.tax-payments-user', compact('taxPayments'));

        // Return the generated PDF for download
        // return response()->streamDownload(
        //     fn () => print($pdf->output()),
        //     "user_{$this->userId}_tax_payments.pdf"
        // );
    }











}
