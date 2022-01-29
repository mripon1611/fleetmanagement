@extends('template')

@section('maincontents')

<?php
    $sl = 1;
?>

<!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Basic Table Sizes</h4>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item" style="float: left;">
                                                            <a href="/"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="dt-basic.html#!">Bootstrap Table</a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="dt-basic.html#!">Basic
                                                                Initialization</a>
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
                                                        <h5>Vehicle List</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#addnewvehicle">Add New Vehicle</button>
                                                        </div>
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="vehicletable"
                                                                class="table table-hover table-bordered nowrap">
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
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$sl++}}</td>
                                                                        <td>{{$data['name']}}</td>
                                                                        <td>{{$data['regno']}}</td>
                                                                        @if($data['toassigned'] ==1)
                                                                        <td>Yes</td>
                                                                        @else
                                                                        <td>No</td>
                                                                        @endif
                                                                        <td>{{$data['seatcapacity']}}</td>
                                                                        <td>{{$data['ownername']}}</td>
                                                                        <td>
                                                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#moredetails">
                                                                                <i class="fas fa-eye"></i>N/Assign
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#vehicledocument"><i class="fas fa-edit"></i>Document</button>
                                                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#vehicledetails"><i class="fas fa-eye"></i>Details</button>
                                                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#vehicleupdate"><i class="fas fa-edit"></i>Update</button>
                                                                            <button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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

                                    <!-- Modal  document-->
                                    <div id="vehicledocument" class="modal fade mixed-form" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="login-card login-card-modal modal-content card">

                                                <!-- Zero config.table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Vehicle List</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <button class="btn btn-primary" id="addnewdocument" data-toggle="modal" data-target="#addnewvehicle">Add New Document</button>
                                                        </div>
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="vcldocument"
                                                                class="table table-hover table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Token From</th>
                                                                        <th>Token To</th>
                                                                        <th>Insurance From</th>
                                                                        <th>Insurance To</th>
                                                                        <th>Fitness From</th>
                                                                        <th>Fitness To</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Token From</th>
                                                                        <th>Token To</th>
                                                                        <th>Insurance From</th>
                                                                        <th>Insurance To</th>
                                                                        <th>Fitness From</th>
                                                                        <th>Fitness To</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Modal  document -->

                                    <!-- Modal  details -->
                                    <div id="vehicledetails" class="modal fade mixed-form" role="dialog">
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
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Modal  details -->

                                    


@endsection