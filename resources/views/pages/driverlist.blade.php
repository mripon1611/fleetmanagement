@extends('template')

@section('maincontents')

<?php
    use App\Http\Controllers\DriverController;
    $freevehicles = DriverController::freeVehicle();
    $assignvehicletodrivers = DriverController::assignVehicleToDriver();
    $sl = 1;
?>

<!-- Page-header start -->
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-12">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item" style="float: left;">
                        <a href="/"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item" style="float: left;">
                        <a href="/driverlist">Manage Driver</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
                                <div id="driverupdates_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/driverupdate" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Driver Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <img src="uploads/{{$data['photograph']}}" alt="Driver Photograph" width="100px">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="file" class="form-control" id="photograph" name="photograph">
                                                                <span class="md-line text-danger">@error('photograph'){{$message}}@enderror</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="mname" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name_bn">Name BN</label>
                                                                <input type="text" class="form-control" id="mname_bn" name="name_bn" value="{{$data['name_bn']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="nid">NID</label>
                                                                <input type="text" class="form-control" id="mnid" name="nid" value="{{$data['nid']}}" readonly>
                                                                <span class="md-line"></span>
                                                                    
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="blood">Blood Group</label>
                                                                <input type="text" class="form-control" id="mblood" name="blood" value="{{$data['blood']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license">Driving License Number</span></label>
                                                                <input type="text" class="form-control" id="license" name="license" value="{{$data['license']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license_ex">License Expairy</span></label>
                                                                <input type="date" class="form-control" id="license_ex" value="{{$data['license_ex']}}" >
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="join_date">Join Date</label>
                                                                <input type="date" class="form-control" id="join_date" name="join_date" value="{{$data['join_date']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="salary">Salary</label>
                                                                <input type="number" class="form-control" id="salary" name="salary" value="{{$data['salary']}}">
                                                                <span class="md-line"></span>
                                                            </div>                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="contact">Contact Number</label>
                                                                <input type="text" class="form-control" id="mcontact" name="contact" value="{{$data['contact']}}" >
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="emergency">Emergency</label>
                                                                <input type="text" class="form-control" id="memergency" name="emergency" value="{{$data['emergency']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                                                                                                
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vehicle">Assign Vehicle</label>
                                                                <select id="vehicle" class="form-control" name="vehicle">
                                                                    @if($data['isassigned'] ==1)
                                                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                            @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                            <option value="{{$assignvehicletodriver->vregno}}">{{$assignvehicletodriver->vregno}}</option>
                                                                            @break
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                    <option>Select Vehicle</option>
                                                                    @endif
                                                                    @foreach($freevehicles as $freevehicle)
                                                                    <option value="{{$freevehicle->regno}}">{{$freevehicle->regno}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Asign date</label>
                                                                @if($data['isassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                        <input type="date" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}">
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="date" class="form-control" id="assigndate" name="assigndate" placeholder="01XXXXXXXXX">
                                                                @endif
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-md btn-block waves-effect text-center">Save Change</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal driver updates -->

                                <!--start Modal driver details -->
                                <div id="details_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Driver Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-12 text-center">
                                                                <img src="uploads/{{$data['photograph']}}" alt="Driver Photograph" width="180px">
                                                            </div>

                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="mname" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name_bn">Name BN</label>
                                                                <input type="text" class="form-control" id="mname_bn" name="name_bn" value="{{$data['name_bn']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="nid">NID</label>
                                                                <input type="text" class="form-control" id="mnid" name="nid" value="{{$data['nid']}}" readonly>
                                                                <span class="md-line"></span>
                                                                    
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="blood">Blood Group</label>
                                                                <input type="text" class="form-control" id="mblood" name="blood" value="{{$data['blood']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license">Driving License Number</span></label>
                                                                <input type="text" class="form-control" id="license" name="license" value="{{$data['license']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license_ex">License Expairy</span></label>
                                                                <input type="date" class="form-control" id="license_ex" value="{{$data['license_ex']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="join_date">Join Date</label>
                                                                <input type="date" class="form-control" id="join_date" name="join_date" value="{{$data['join_date']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="salary">Salary</label>
                                                                <input type="number" class="form-control" id="salary" name="salary" value="{{$data['salary']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="contact">Contact Number</label>
                                                                <input type="text" class="form-control" id="mcontact" name="contact" value="{{$data['contact']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="emergency">Emergency</label>
                                                                <input type="text" class="form-control" id="memergency" name="emergency" value="{{$data['emergency']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                                                                                                
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vehicle">Assign Vehicle</label>
                                                                @if($data['isassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                        <input type="text" class="form-control" id="vehicle" name="vehicle" value="{{$assignvehicletodriver->vregno}}" readonly>
                                                                         @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="text" class="form-control" id="vehicle" name="vehicle" value="Not Assigned" readonly>
                                                                @endif     
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Asign date</label>
                                                                @if($data['isassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                        <input type="text" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}" readonly>
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="text" class="form-control" id="assigndate" name="assigndate" value="0000-00-00" readonly>
                                                                @endif
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>
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
<div id="addnewdriver" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnewdriver" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Add New Driver</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Mr. X">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name_bn">Name BN</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="মি. এক্স">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name_bn'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nid">NID<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="nid" name="nid" placeholder="241425XXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('nid'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="blood">Blood Group<span style="color: red;">*</span></label>
                                <select id="blood" class="form-control" name="blood">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <span class="md-line"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="license">Driving License<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="license" name="license" placeholder="1998XXXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('license'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="license_ex">License Expairy<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="license_ex" name="license_ex" >
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('license_ex'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="join_date">Join Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="join_date" name="join_date" placeholder="YYYY-MM-DD">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('join_date'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="salary">Salary<span style="color: red;">*</span></label>
                                <input type="number" class="form-control" id="salary" name="salary" placeholder="15000">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('salary'){{$message}}@enderror</span>
                            </div>
                                                                
                            <input type="hidden" class="form-control" id="isassigned" name="isassigned" value="0" readonly>
                                                                
                            <div class="form-group col-md-6">
                                <label for="contact">Contact Number<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="01XXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('contact'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emergency">Emergency<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="emergency" name="emergency" placeholder="01XXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('emergency'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="photograph">Photograph<span style="color: red;">*</span></label>
                                <input type="file" class="form-control" id="photograph" name="photograph">
                                <span class="md-line text-danger">@error('photograph'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row m-t-15">
                            <div class="col-md-12">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block waves-effect text-center">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end of form -->
        </div>
    </div>
</div>
<!-- Modal end add new driver -->

@endsection