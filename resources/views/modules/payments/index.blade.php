@extends('app')

@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment &raquo; Listing</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            @include('partials.alert')
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table id="employeeTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Number</th>
                        <th>Reference Number</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>approval_status</th>
                        <th>Date</th>
                        {{--<th>Customer</th>
                        <th>Created</th>
                        <th>Updated</th>--}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $index => $payment)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$payment->order_number}}</td>
                        <td>{{$payment->ref_number}}</td>
                        <td>{{$payment->type}}</td>
                        <td>{{$payment->amount}}</td>
                        <td>{{strtoupper($payment->status)}}</td>
                        <td>{{$payment->payment_date}}</td>
                        {{--<td>{{$value->user_id}}</td>
                        <td>{{$payment->created_at}}</td>
                        <td>{{$payment->updated_at}}</td>--}}
                        <td>
                            <a href="{{ route('payment.poll', $payment->id) }}">Poll</a>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection