@extends('template')
@section('title','vehicle ministartions')
@section('maincontents')

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Vehicle Overview</h3>
                        <a href="/vehicle" class="btn btn-info">Update</a>
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
                                    @if($vehicle['vehicleadded']==='')
                                    <td>NULL</td>
                                    @else
                                    <td>{{$vehicle['vehicleadded']}}</td>
                                    @endif
                                    <td><span class="font-weight-bold">Assigned number: </span></td>
                                    <td>{{$vehicle['driver']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Papers</h3>
                        <a href="#" class="btn btn-primary">Add New</a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table
                            class="table table-hover text-center table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Paper Type</th>
                                    <th>Issue Date</th>
                                    <th>Expire Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicle_papers as $vehicle_paper)
                                <tr>
                                    @if($vehicle_paper->papers_type === 'taxtoken')
                                    <td>Tax Token</td>
                                    @elseif($vehicle_paper->papers_type === 'insurance')
                                    <td>Insurance</td>
                                    @elseif($vehicle_paper->papers_type === 'fitness')
                                    <td>Fitness</td>
                                    @endif
                                    <td>{{$vehicle_paper->issue_date}}</td>
                                    <td>{{$vehicle_paper->expire_date}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Paper Type</th>
                                    <th>Issue Date</th>
                                    <th>Expire Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Refuel Requisition</h3>
                        <a href="/refuel-requisition" class="btn btn-info">Re-fuel</a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table
                            class="table table-striped table-bordered nowrap">
                            <tbody>
                                <tr>
                                    <td><span class="font-weight-bold">Previous ODO: </span></td>
                                    <td>{{$refuel['pvsodo']}}</td>
                                    <td><span class="font-weight-bold">Current ODO: </span></td>
                                    <td>{{$refuel['crodo']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Fuel Type: </span></td>
                                    <td>{{$refuel['fueltype']}}</td>
                                    <td><span class="font-weight-bold">Total Quantity: </span></td>
                                    <td>{{$refuel['ttlqty']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Cost/Litter: </span></td>
                                    <td>{{$refuel['costplitter']}}</td>
                                    <td><span class="font-weight-bold">Total Cost: </span></td>
                                    <td>{{$refuel['totalprice']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold">Created Date: </span></td>
                                    <td>{{$refuel['created_date']}}</td>
                                    <td><span class="font-weight-bold">Staff Name: </span></td>
                                    <td>{{$refuel['staffname']}}</td>
                                </tr>
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


@endsection