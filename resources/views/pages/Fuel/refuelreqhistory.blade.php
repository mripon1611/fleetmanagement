@extends('template')
@section('title','refuel requisition history')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Fuel.historyheader')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <p>Refuel Requisition History : <span style="color:#1684c5;">
                            {{$vcode}}
                        </span>
                    </p>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="refuel-history"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Reg No</th>
                                    <th>Staff Name</th>
                                    <th>Previous ODO</th>
                                    <th>Current ODO</th>
                                    <th>Total Quantity</th>
                                    <th>Total Price</th>
                                    <th>Fuel Type</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$data->vregno}}</td>
                                    <td>{{$data->staffname}}</td>
                                    <td>{{$data->pvsodo == ''?'NULL':$data->pvsodo}}</td>
                                    <td>{{$data->crodo}}</td>
                                    <td>{{$data->ttlqty}}</td>
                                    <td>{{$data->totalprice}}</td>
                                    <td>{{$data->fueltype}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->created_date}}</td>
                                    <td>
                                        <button class="btn btn-info p-1" data-toggle="modal" data-target="#refueledit_{{$data->id}}"><i class="fas fa-edit"></i>Edit</button>
                                        <a href="#" class="btn btn-danger p-1"><i class="fas fa-trash-alt"></i>Delete</a>
                                    </td>
                                </tr>

                                <!-- Modal  edit -->
                                @include('Modals.Fuel.edit')
                                <!--End Modal  edit -->
                                
                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Reg No</th>
                                    <th>Staff Name</th>
                                    <th>Previous ODO</th>
                                    <th>Current ODO</th>
                                    <th>Total Quantity</th>
                                    <th>Total Price</th>
                                    <th>Fuel Type</th>
                                    <th>Status</th>
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

@endsection