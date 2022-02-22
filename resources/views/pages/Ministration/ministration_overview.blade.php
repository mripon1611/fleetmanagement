@extends('template')
@section('title','vehicle ministartions')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Ministration.overview_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Vehicle Overview</h3>
                        <a href="/vehicles" class="btn btn-info">Update</a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table
                            class="table table-striped table-bordered nowrap">
                            <tbody>
                                <tr>
                                    <td><span class="font-weight-bold">Vehicle Code: </span></td>
                                    <td>{{$vehicle['vcode']}}</td>
                                    <td><span class="font-weight-bold">Vehicle Name: </span></td>
                                    <td>{{$vehicle['name']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Registration Number: </span></td>
                                    <td>{{$vehicle['regno']}}</td>
                                    <td><span class="font-weight-bold">Registration Number BN: </span></td>
                                    <td>{{$vehicle['regno_bn']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Seat Capacity: </span></td>
                                    <td>{{$vehicle['seatcapacity']}}</td>
                                    <td><span class="font-weight-bold">Owner Name: </span></td>
                                    <td>{{$vehicle['ownername']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Added Date: </span></td>
                                    <td>{{$vehicle['vehicleadded']==''?'NULL':$vehicle['vehicleadded']}}</td>
                                    <td><span class="font-weight-bold">Assigned number: </span></td>
                                    <td>{{$vehicle['driver']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($ministration_codes as $ministration_code)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header mb-3">
                            <div class="d-flex justify-content-between">
                                <h4>Ministration Code: {{$ministration_code->ministration_code}}</h4>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table
                                    class="table table-hover text-center table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Service Type</th>
                                            <th>Requested Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_ministrations as $ministration)
                                        <tr>
                                            @if($ministration_code->ministration_code == $ministration->ministration_code)
                                            <td>{{$ministration->ministration_type}}</td>
                                            <td>{{$ministration->requested_date}}</td>
                                            <td><a href="/delete-{{$ministration->id}}"><i class="fas fa-trash-alt"></i></a></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addnewservice_{{$ministration_code->ministration_code}}">Add Service</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal  add new service -->
                @include('Modals.Ministration.addnew')
                <!--End Modal  add new service -->

                @endforeach

            </div>

            <!-- Zero config.table end -->
        </div>
    </div>
</div>
<!-- Page-body end -->


@endsection