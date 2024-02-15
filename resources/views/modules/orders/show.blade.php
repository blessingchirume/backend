@extends('app')

@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Order &raquo; Edit</h1>
                </div><!-- /.col -->
            </div>
        </div>
        <div class="container-fluid">
            @include('partials.alert')
        </div>
    </div>

    <div class="card">
        <form id="update-employee-form" method="post" action="{{route('order.update', $order)}}">
            <div class="card-header">
                <a href="{{ route('order.index') }}" type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    back
                </a>
            </div>
            <div class="card-body">

                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Order Number</label>
                            <input class="form-control" id="name" name="order_number" type="text" placeholder="First Name" value="{{$order->order_number}}" required readonly>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Order ref number</label>
                            <input class="form-control" id="last_name" name="order_ref_number" type="text" placeholder="Last Name" value="{{$order->order_ref_number}}" required readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="useer_role">Payment status</label>
                            <select class="form-control" name="payment_status">
                                <option value="0">PENDING</option>
                                <option value="1">SUCCESS</option>
                                <option value="2">REJECTED</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Customer delivery status</label>
                            <select class="form-control" name="customer_delivery_status">
                                <option value="0">PENDING</option>
                                <option value="1">SUCCESS</option>
                                <option value="2">REJECTED</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Admin delivery status</label>
                            <select class="form-control" name="admin_delivery_status">
                                <option value="0">PENDING</option>
                                <option value="1">SUCCESS</option>
                                <option value="2">REJECTED</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Approval status</label>
                            <select class="form-control" name="approval_status">
                                <option value="0">PENDING</option>
                                <option value="1">SUCCESS</option>
                                <option value="2">REJECTED</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Delivery date</label>

                            <input class="form-control" id="role" name="delivery_date" type="date" placeholder="role" value="{{ $order->delivery_date }}" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Customer</label>
                            <input class="form-control" id="role" name="role" type="text" placeholder="role" value="{{ $order->user->name }} {{ $order->user->surname }}" readonly required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group pull-left">
                    <button type="button" class="btn btn-secondary float-right mr-2" data-bs-toggle="modal" data-bs-target="#update-employee-modal">Update Details</button>
                    <button type="button" class="btn btn-danger  float-right mr-2" data-bs-toggle="modal" data-bs-target="#delete-employee-modal">Delete order</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="modal fade" id="update-employee-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="alert alert-danger"><strong>Warning</strong> You are about to update <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#update-employee-form').submit()">update</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete-employee-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <form method="post" id="delete-employee-form" action="{{ route('order.delete', $order) }}" enctype="">
                        {{ csrf_field() }}
                        <div class="alert alert-danger"><strong>Warning</strong> You are about to remove <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#delete-employee-form').submit()">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection