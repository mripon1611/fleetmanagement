@extends('template')

@section('maincontents')

<?php
    use App\Http\Controllers\DriverController;
    $freevehicles = DriverController::freeVehicle();
    $assignvehicletodrivers = DriverController::assignVehicleToDriver();
    $sl = 1;
?>

<!-- Page-header start -->
@include('pages.Driver.header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <h5>Driver List</h5>

                </div>
                <div class="card-block">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdriver">Add New Driver</button>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Name BN</th>
                                    <th>Contact</th>
                                    <th>Emergency</th>
                                    <th>Assigned Vehicle</th>
                                    <th>Blood Group</th>
                                    <th>NID</th>
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
                                    <td>{{$data['name_bn']}}</td>
                                    <td>{{$data['contact']}}</td>
                                    <td>{{$data['emergency']}}</td>
                                    @if($data['isassigned'] ==1)
                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                            @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                            <td>{{$assignvehicletodriver->vregno}}</td>
                                            @break
                                            @endif
                                        @endforeach
                                    @else
                                    <td>Not Assigned</td>
                                    @endif
                                    <td>{{$data['blood']}}</td>
                                    <td>{{$data['nid']}}</td>
                                    <td>
                                        @if($data['isassigned'] ==1)
                                        <button class="btn btn-success edit p-1 m-1" data-toggle="modal" data-target="#driverupdates_{{$data['id']}}">
                                            <i class="fas fa-eye"></i>Assigned
                                        </button>
                                        @else
                                        <button class="btn btn-primary edit p-1 m-1" data-toggle="modal" data-target="#driverupdates_{{$data['id']}}">
                                            <i class="fas fa-eye"></i>N/Assign
                                        </button>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-warning float-left p-1 m-1" data-toggle="modal" data-target="#details_{{$data['id']}}">
                                            <i class="fas fa-eye"></i>Details
                                        </button>
                                        <form action="/drivinghistory" class="float-left" method="POST" enctype="multipart/form-data">
                                            @csrf()
                                            <input type="hidden" id="license" name="license" value="{{$data['license']}}">
                                            <button class="btn btn-success p-1 m-1" type="submit"><i class="fas fa-biking"></i>History</button>
                                        </form>
                                        <!-- <a href="/{{$data['license']}}" class="btn btn-success"><i class="fas fa-biking"></i>History</a> -->
                                    </td>
                                </tr>

                                <!--start Modal driver updates -->
                                @include('Modals.Driver.updates')
                                <!-- End Modal driver updates -->

                                <!--start Modal driver details -->
                                @include('Modals.Driver.details')
                                <!-- End Modal driver details -->
                                
                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Name BN</th>
                                    <th>Contact</th>
                                    <th>Emergency</th>
                                    <th>Assigned Vehicle</th>
                                    <th>Blood Group</th>
                                    <th>NID</th>
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

<!-- Modal normal add new driver -->
@include('Modals.Driver.addnew')
<!-- Modal end add new driver -->

@endsection