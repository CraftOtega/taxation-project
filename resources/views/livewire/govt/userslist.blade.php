<?php

use Livewire\WithPagination;
use Livewire\Volt\Component;
use App\Models\TaxPayment;

new class extends Component
{
    use WithPagination;

    public function with(): array
    {
        // Fetch paginated TaxPayment records
        $taxPayments = TaxPayment::with('user')->paginate(10);

        // Return the data as an array for use in the view
        return compact('taxPayments');
    }
};

?>




          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All the Lists Of users and Who They Paid For</h5>
              {{-- <p>Add <code>.table-borderless</code> for a table without borders.</p> --}}
              <!-- Active Table -->

              <div class="table-responsive">

              <table class="table table-borderless">
                <thead>
                  <tr>
                        <th scope="col">#</th>
                        <th class="col">Name Of Payer</th>
                        <th class="col">Property Own's Name</th>
                        <th class="col">Property Paid For</th>
                        <th class="col">Amount Paid</th>
                        <th class="col">Payment Status</th>
                        <th class="col">Payer Email</th>
                        <th class="col">Address Property </th>
                        <th class="col">Date Of Payment</th>
                        <th class="col">Action</th>
                  </tr>
                </thead>
                <tbody>

 @forelse ($taxPayments as $payment)

                  <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                     <td >{{ $payment->user->name }}</td>
                        <td >{{ $payment->property_own_name }}</td>

                        <td >{{ $payment->property_name }}</td>
                        <td >${{ number_format($payment->amount_paid, 2) }}</td>
                        <td>Paid</td>


                   
                        <td>{{ $payment->email }}</td>
                        <td>{{ $payment->property_address }}</td>
                        <td>{{ $payment->created_at->format('Y-m-d H:i:s') }}</td>
     
                        <td> <button class="btn btn-info">View</button>        </td>
                  </tr>
                 
                  @empty
                <tr>
                    <td colspan="10" class="border border-gray-300 p-2 text-center">No records found.</td>
                </tr>
            @endforelse
                </tbody>
              </table>
              <!-- End Tables without borders -->
              </div>

            </div>
          </div>
