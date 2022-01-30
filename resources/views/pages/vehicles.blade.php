@extends('template')

@section('maincontents')

<?php
    use App\Http\Controllers\DriverController;
    use App\Http\Controllers\VehicleController;
    $freedrivers = VehicleController::freeDriver();
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
                        <a href="/vehicle">Manage Vehicle</a>
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
                                        <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#moredetails_{{$data['id']}}">
                                            <i class="fas fa-eye"></i>N/Assign
                                        </button>
                                    </td>
                                    <td>
                                        <a href="/vehicledocuments/{{$data['regno']}}" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i></i>Documents</a>
                                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#addnewdocuments_{{$data['id']}}"><i class="fas fa-edit"></i>Document</button>
                                        <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#vehicledetails_{{$data['id']}}"><i class="fas fa-eye"></i>Details</button>
                                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#vehicleupdate"><i class="fas fa-edit"></i>Update</button>
                                        <button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
                                <!-- Modal  details -->
                                <div id="vehicledetails_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material"  enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Vehicle Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regno">Registration Number</label>
                                                                <input type="text" class="form-control" id="regno" name="regno" value="{{$data['regno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ownername">Owner Name</label>
                                                                <input type="text" class="form-control" id="ownername" name="ownername" value="{{$data['ownername']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="seatcapacity">Seat Capacity (With Driver)</label>
                                                                <input type="text" class="form-control" id="seatcapacity" name="seatcapacity" value="{{$data['seatcapacity']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regdate">Registration Date</label>
                                                                <input type="text" class="form-control" id="regdate" name="regdate" value="{{$data['regdate']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="licensedate">License Date</label>
                                                                <input type="text" class="form-control" id="licensedate" name="licensedate" value="{{$data['licensedate']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="division">Division</label>
                                                                <input type="text" class="form-control" id="ldivision" name="division" value="{{$data['division']}}" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mapcolor">Map Color</label>
                                                                <input type="text" class="form-control" id="mapcolor" name="mapcolor" value="{{$data['mapcolor']}}" readonly>
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal  details -->

                                <!-- Modal normal more details -->
                                <div id="moredetails_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/driverupdate" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Vehicle Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Vehicle Name</label>
                                                                <input type="text" class="form-control" id="mname" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regno">Vehicle Registration Number</label>
                                                                <input type="text" class="form-control" id="regno" name="regno" value="{{$data['regno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>                                                            
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vehicle">Assign Driver</label>
                                                                <select id="vehicle" class="form-control" name="vehicle">
                                                                    @if($data['toassigned'] ==1)
                                                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                            @if($assignvehicletodriver->vregno == $data['regno'])
                                                                            <option value="{{$assignvehicletodriver->vregno}}">{{$assignvehicletodriver->drivername}}</option>
                                                                            @break
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                    <option>Select Driver</option>
                                                                    @endif
                                                                    @foreach($freedrivers as $freedriver)
                                                                    <option value="{{$freedriver->name}}">{{$freedriver->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Asign date</label>
                                                                @if($data['toassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->vregno == $data['regno'])
                                                                        <input type="date" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}">
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="date" class="form-control" id="assigndate" name="assigndate">
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
                                <!-- End Modal normal more details -->

                                <!-- Modal for add new documents -->
                                <div id="addnewdocuments_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/adddocuments" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Vehicle Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            <input type="hidden" class="form-control" id="vehicleregno" name="vehicleregno" value="{{$data['regno']}}">
                                                            <div class="form-group col-md-6">
                                                                <label for="doctype">Select Documents Type</label>
                                                                <select id="doctype" class="form-control doctype" name="doctype">
                                                                    <option>--select--</option>
                                                                    <option value="taxtoken">Tax Token</option>
                                                                    <option value="fitness">Fitness</option>
                                                                    <option value="insurance">Insurance</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12" id="ttoken" style="display:none;">
                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="ttokenissuedate">Token From<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="ttokenissuedate" name="ttokenissuedate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="ttokenexpiredate">Token To<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="ttokenexpiredate" name="ttokenexpiredate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="tokenfile">Image<span style="color: red;">*</span></label>
                                                                        <input type="file" class="form-control" id="tokenfile" name="tokenfile">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" id="fitness" style="display:none;">
                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="fitnessissuedate">Fitness From<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="fitnessissuedate" name="fitnessissuedate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="fitnessexpiredate">Fitness To<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="fitnessexpiredate" name="fitnessexpiredate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="fitnessfile">Image<span style="color: red;">*</span></label>
                                                                        <input type="file" class="form-control" id="fitnessfile" name="fitnessfile">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" id="insurance" style="display:none;">
                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="rpermitissuedate">Insurance From<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="rpermitissuedate" name="rpermitissuedate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="rpermitexpiredate">Insurance To<span style="color: red;">*</span></label>
                                                                        <input type="date" class="form-control" id="rpermitexpiredate" name="rpermitexpiredate">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="permitfile">Image<span style="color: red;">*</span></label>
                                                                        <input type="file" class="form-control" id="permitfile" name="permitfile">
                                                                        <span class="md-line"></span>
                                                                    </div>
                                                                </div>
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
                                <!-- Modal for add new documents -->

                                <!-- Modal  document-->
                                <div id="documents_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <div class="text-center card-header">
                                                <h3>Vehicle Documents</h3>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal  document -->

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
<div id="addnewvehicle" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnewvehicle" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Add New Vehicle</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="TAYOTA">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regno">Registration Number</label>
                                <input type="text" class="form-control" id="regno" name="regno" placeholder="Dhaka Metro Ha-1234">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('regno'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ownername">Owner Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="ownername" name="ownername" placeholder="EBS">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('ownername'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seatcapacity">Seat Capacity (With Driver)<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="seatcapacity" name="seatcapacity" placeholder="4">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('seatcapacity'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seatcapacity">Registration Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="regdate" name="regdate" >
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('regdate'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="licensedate">License Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="licensedate" name="licensedate">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('licensedate'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Division<span style="color: red;">*</span></label>
                                <select id="division" class="form-control" name="division">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Sylhet">Sylhet</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mapcolor">Map Color<span style="color: red;">*</span></label>
                                <select id="mapcolor" class="form-control" name="mapcolor">
                                    <option value="green">Green</option>
                                    <option value="red">Red</option>
                                </select>
                            </div>
                                                                
                            <input type="hidden" class="form-control" id="toassigned" name="toassigned" value="0" readonly>
                                                                
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
<!--End Modal  add new vehicle -->

@endsection