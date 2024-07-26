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
    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link " id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Items</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="patient-details-acruals-tab" data-toggle="pill" href="#patient-details-acruals" role="tab" aria-controls="patient-details-acruals" aria-selected="true">Details</a>
        </li>
    </ul>
    <div class="tab-content" id="custom-content-below-tabContent">
        <div class="tab-pane fade show " id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
            <div class="card">
                <div class="card-header">
                    <div class="float-right btn-group btn-group-sm">
                        {{--<a href="{{ route('episode.create', $patient) }}" type="button" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Generate
                        </a>--}}
                    </div>
                </div>
                <div class="card-body">
                    <table id="table1" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>item Code</th>
                                <th>Item Description</th>
                                <th>Price</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $value)
                            <tr>
                                <td>{{ $value->item_code }}</td>
                                <td>{{ $value->item_description }}</td>
                                <td>{{ $value->price }}</td>
                               
                                <td>
                                   {{-- <a href="{{ route('patient.episode.show', $value)}}"><i class="fa fa-eye success m-2"></i></a>
                                    <a href="{{ route('patient.episode.show', $value)}}"><i class="fa fa-edit primary m-2"></i></a>
                                    <a href="{{ route('doctors.observation', $value)}}"><i class="fa fa-clipboard m-2"></i></a>
                                    <a href="{{ route('patient.episode.show', $value)}}"><i class="fa fa-trash m-2"></i></a>--}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="patient-details-acruals" role="tabpanel" aria-labelledby="patient-details-acruals-tab">
            <div class="card">
                <form id="update-employee-form" method="post" action="{{route('order.update', $order)}}">
                    <div class="card-header">
                        <a href="{{ route('order.index') }}" type="button" class="btn btn-outline-success float-right" style="margin-right: 5px;">
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
                                    <x-status-input :status="$order->payment_status" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Customer delivery status</label>
                                    <x-status-input :status="$order->customer_delivery_status" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Admin delivery status</label>
                                    <x-status-input :status="$order->admin_delivery_status" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Approval status</label>
                                    <x-status-input :status="$order->approval_status" />
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
                            <button type="button" class="btn btn-success float-right mr-2" data-bs-toggle="modal" data-bs-target="#approve-order-modal">Approve</button>
                            <button type="button" class="btn btn-danger float-right mr-2" data-bs-toggle="modal" data-bs-target="#reject-order-modal">Reject</button>
                            <button type="button" class="btn btn-warning float-right mr-2" data-bs-toggle="modal" data-bs-target="#dispatch-order-modal">Dispatch</button>
                            <button type="button" class="btn btn-success float-right mr-2" data-bs-toggle="modal" data-bs-target="#confirm-delivery-modal">Confirm Delivery</button>

                            <button type="button" class="btn btn-secondary float-right mr-2" data-bs-toggle="modal" data-bs-target="#update-employee-modal">Update Details</button>
                            <button type="button" class="btn btn-danger  float-right mr-2" data-bs-toggle="modal" data-bs-target="#delete-employee-modal">Delete order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<div class="modal fade" id="update-employee-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Order</h4>
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
                <h4 class="modal-title">Delete Order</h4>
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

<div class="modal fade" id="approve-order-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Approve Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="approve-order-form" action="{{ route('order.approve', $order) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <div class="alert alert-danger"><strong>Warning</strong> You are about to update <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#approve-order-form').submit()">Approve</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reject-order-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reject Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="reject-order-form" action="{{ route('order.reject', $order) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <div class="alert alert-danger"><strong>Warning</strong> You are about to update <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#reject-order-form').submit()">update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="dispatch-order-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Dispatch Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="dispatch-order-form" action="{{ route('order.dispatch', $order) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <div class="alert alert-danger"><strong>Warning</strong> You are about to update <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#dispatch-order-form').submit()">update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delivery-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delivery</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="confirm-delivery-form" action="{{ route('order.delivery.confirm', $order) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <div class="alert alert-danger"><strong>Warning</strong> You are about to confirm deliver for order <strong>{{ $order->order_number }}</strong>, this action cannot be reversed</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="$('#confirm-delivery-form').submit()">update</button>
            </div>
        </div>
    </div>
</div>
@endsection