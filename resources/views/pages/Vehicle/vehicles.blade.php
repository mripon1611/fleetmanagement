@extends('template')
@section('title','manage vehicle')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Vehicle.header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Vehicle List</h3>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewvehicle">Add New Vehicle</button>
                    </div>
                </div>
                    @if(Session::has('success'))
						<div class="alert alert-success mt-2 mb-2">
                            <button type="button" class="close"
                                data-dismiss="alert" aria-label="Close">
                                <i
                                    class="icofont icofont-close-line-circled"></i>
                            </button>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
					@endif
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="vehicletable" class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Code</th>
                                    <th>Name</th>
                                    <th>Registration Number</th>
                                    <th>Assigned Driver</th>
                                    <th>Seat capacity</th>
                                    <th>Owner Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$data['vcode']}}</td>
                                    <td>{{$data['name']}}</td>
                                    <td>{{$data['regno']}}</td>
                                    @if($data['toassigned'] ==1)
                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                            @if($assignvehicletodriver->vregno == $data['regno'])
                                            <td>{{$assignvehicletodriver->drivername}}</td>
                                            @break
                                            @endif
                                        @endforeach
                                    @else
                                    <td>NULL</td>
                                    @endif
                                    <td>{{$data['seatcapacity']}}</td>
                                    <td>{{$data['ownername']}}</td>
                                    <td>
                                        <a href="/vehicle-documents-{{$data['vcode']}}" class="btn btn-success float-left p-1 mt-1 mr-1"><i class="fas fa-eye"></i>Documents</a>
                                        <a href="/vehicle-ministrations-{{$data['vcode']}}" class="btn btn-info float-left p-1 mt-1 mr-1"><i class="fas fa-eye"></i>Ministrations</a>
                                        <a href="/vehicle-overview-{{$data['vcode']}}" class="btn btn-success float-left p-1 mt-1 mr-1"><i class="fas fa-eye"></i>Overview</a>
                                        <button class="btn btn-xs btn-primary float-left p-1 mt-1 mr-1" data-toggle="modal" data-target="#vehicledetails_{{$data['id']}}"><i class="fas fa-eye"></i>Details</button>
                                        <button class="btn btn-xs btn-success float-left p-1 mt-1 mr-1" data-toggle="modal" data-target="#vehicleupdates_{{$data['id']}}"><i class="fas fa-edit"></i>Update</button>
                                        <button class="btn btn-xs btn-danger float-left mt-1 p-1"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
                                <!-- Modal  details -->
                                @include('Modals.Vehicle.details')
                                <!--End Modal  details -->

                                <!-- Modal  updates -->
                                @include('Modals.Vehicle.updates')
                                <!--End Modal  updates -->

                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Zero config.table end -->                                       
        </div>
    </div>
</div>
<!-- Page-body end -->

<!-- Modal  add new vehicle -->
 @include('Modals.Vehicle.addnew')
<!--End Modal  add new vehicle -->

@endsection