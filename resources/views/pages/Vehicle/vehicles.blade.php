@extends('template')

@section('maincontents')

<!-- Page-header start -->
@include('pages.Vehicle.header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Vehicle List</h5>
                </div>
                <div class="card-block">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewvehicle">Add New Vehicle</button>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table id="vehicletable" class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Registration Number</th>
                                    <th>Assigned Driver</th>
                                    <th>Seat capacity</th>
                                    <th>Owner Name</th>
                                    <th>Assign Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
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
                                    <td>Not Assigned</td>
                                    @endif
                                    <td>{{$data['seatcapacity']}}</td>
                                    <td>{{$data['ownername']}}</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary p-1 m-1" data-toggle="modal" data-target="#moredetails_{{$data['id']}}">
                                            <i class="fas fa-eye"></i>N/Assign
                                        </button>
                                    </td>
                                    <td>
                                        <form action="/vehicledocuments" class="float-left" method="POST" enctype="multipart/form-data">
                                            @csrf()
                                            <input type="hidden" id="regno" name="regno" value="{{$data['regno']}}">
                                            <button class="btn btn-success p-1 m-1" type="submit"><i class="fas fa-eye"></i></i>Documents</button>
                                        </form>
                                        <!-- <a href="/{{$data['regno']}}" class="btn btn-xs btn-success"><i class="fas fa-eye"></i></i>Documents</a> -->
                                        <button class="btn btn-xs btn-primary float-left p-1 m-1" data-toggle="modal" data-target="#vehicledetails_{{$data['id']}}"><i class="fas fa-eye"></i>Details</button>
                                        <button class="btn btn-xs btn-success float-left p-1 m-1" data-toggle="modal" data-target="#vehicleupdates_{{$data['id']}}"><i class="fas fa-edit"></i>Update</button>
                                        <button class="btn btn-xs btn-danger float-left p-1 m-1"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
                                <!-- Modal  details -->
                                @include('Modals.Vehicle.details')
                                <!--End Modal  details -->

                                <!-- Modal  updates -->
                                @include('Modals.Vehicle.updates')
                                <!--End Modal  updates -->

                                <!-- Modal assign details -->
                                @include('Modals.Vehicle.assigndetails')
                                <!-- End Modal assign details -->

                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Registration Number</th>
                                    <th>Assigned Driver</th>
                                    <th>Seat capacity</th>
                                    <th>Owner Name</th>
                                    <th>Assign Status</th>
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

<!-- Modal  add new vehicle -->
 @include('Modals.Vehicle.addnew')
<!--End Modal  add new vehicle -->

@endsection