<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 14px;
      text-align: left;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
    }
    th {
      background-color: #f4f4f4;
      font-weight: bold;
      text-transform: uppercase;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>S/N</th>
      <th>Order</th>
      <th>Date</th>
      <th>Property Owner's Name</th>
      <th>Property Name</th>
      <th>Phone No</th>
      <th>Amount</th>
      <th>Property Address</th>
      <th>Payment Status</th>
    </tr>
  </thead>
  <tbody>


    @forelse ($taxPayments as $payment)

    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>##35463</td>
      <td>{{ $payment->created_at->format('Y-m-d H:i:s') }}</td>
      <td>{{ $payment->property_own_name }}</td>
      <td>{{ $payment->property_name }}</td>
      <td>{{ $payment->phone }}</td>
      <td>${{ number_format($payment->amount_paid, 2) }}</td>
      <td>{{ $payment->property_address }}</td>
      <td>Paid</td>

    </tr>

    @empty
    <tr>
        <td colspan="7">No records found.</td>
    </tr>
@endforelse

  </tbody>
</table>

</body>
</html>
