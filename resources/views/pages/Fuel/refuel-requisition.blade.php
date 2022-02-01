@extends('template')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Fuel.header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <h3>Refuel Requisition</h3>
                </div>
                <div class="card-block">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnew">Add New</button>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Reg No</th>
                                    <th>Staff Name</th>
                                    <th>Total Quantity</th>
                                    <th>Total Price</th>
                                    <th>Fuel Type</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$data['vregno']}}</td>
                                    <td>{{$data['staffname']}}</td>
                                    <td>{{$data['ttlqty']}}</td>
                                    <td>{{$data['totalprice']}}</td>
                                    <td>{{$data['fueltype']}}</td>
                                    <td>{{$data['created_date']}}</td>
                                    <td>
                                        <button class="btn btn-xs btn-success float-left p-1 m-1" data-toggle="modal" data-target="#details_{{$data['id']}}"><i class="fas fa-eye"></i>Details</button>
                                        <button class="btn btn-xs btn-primary float-left p-1 m-1" data-toggle="modal" data-target="#updates_{{$data['id']}}"><i class="fas fa-edit"></i>Updates</button>
                                        <form action="/refuelreqhistory" class="float-left" method="POST" enctype="multipart/form-data">
                                            @csrf()
                                            <input type="hidden" id="vregno" name="vregno" value="{{$data['vregno']}}">
                                            <button class="btn btn-success p-1 m-1" type="submit"><i class="fas fa-history"></i>History</button>
                                        </form>
                                        <button class="btn btn-xs btn-danger float-left p-1 m-1"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
                                <!-- Modal  details  -->
                                @include('Modals.Fuel.details')
                                <!--End Modal  details -->

                                <!-- Modal  updates -->
                                @include('Modals.Fuel.updates')
                                <!--End Modal  updates -->

                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Reg No</th>
                                    <th>Staff Name</th>
                                    <th>Total Quantity</th>
                                    <th>Total Price</th>
                                    <th>Fuel Type</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Zero config.table end -->
        </div>
    </div>
</div>
<!-- Page-body end -->

<!-- Modal  add new  -->
@include('Modals.Fuel.addnew')
</div>
<!--End Modal  add new  -->

@endsection