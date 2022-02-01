@extends('template')
@section('maincontents')

<?php
    use App\Http\Controllers\RefuelrequisitionController;
    $vehicleslists = RefuelrequisitionController::vehiclesList();
    $addedvehicles = RefuelrequisitionController::addedVehicles();
    $sl = 1;
    $t= 0; // 0= flase, 1=true 
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
                        <a href="/refuel-requisition">Refuel Requisition</a>
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
                                <div id="details_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vregno">Vehicle Reg No</label>
                                                                <input type="text" class="form-control" id="vregno" name="vregno" value="{{$data['vregno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="staffname">Staff Name</label>
                                                                <input type="text" class="form-control" id="staffname" name="staffname" value="{{$data['staffname']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="pvsodo">Previous ODO</label>
                                                                <input type="text" class="form-control" id="pvsodo" name="pvsodo" value="{{$data['pvsodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crodo">Current ODO</label>
                                                                <input type="text" class="form-control" id="crodo" name="crodo" value="{{$data['crodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ttlqty">Total Quntity</label>
                                                                <input type="text" class="form-control" id="ttlqty" name="ttlqty" value="{{$data['ttlqty']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="fueltype">Fuel Type</label>
                                                                <input type="text" class="form-control" id="fueltype" name="fueltype" value="{{$data['fueltype']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="totalprice">Total Price</label>
                                                                <input type="text" class="form-control" id="totalprice" name="totalprice" value="{{$data['totalprice']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="file">File</label>
                                                                <a href="#" class="form-control">{{$data['file']}}</a>
                                                                <!-- <input type="file" class="form-control" id="file" name="file"> -->
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crtdate">Created Date</label>
                                                                <input type="text" class="form-control" id="crtdate" name="crtdate" placeholder="{{$data['created_date']}}" readonly>
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
                                <!--End Modal  details -->

                                <!-- Modal  updates -->
                                <div id="updates_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/updates-refuelreq" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Updates</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label for="vregno">Vehicle Reg No</label>
                                                                <input type="text" class="form-control" id="vregno" name="vregno" value="{{$data['vregno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="staffname">Staff Name</label>
                                                                @foreach($vehicleslists as $vehicleslist)
                                                                    @if($data['vregno'] == $vehicleslist->vregno)
                                                                    <input type="vregno" class="form-control" id="staffname" name="staffname" value="{{$vehicleslist->drivername}}" readonly>
                                                                    @endif
                                                                @endforeach
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="pvsodo">Previous ODO</label>
                                                                <input type="text" class="form-control" id="pvsodo" name="pvsodo" value="{{$data['crodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crodo">Current ODO<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="crodo" name="crodo" placeholder="Current ODO">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('crodo'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ttlqty">Total Quntity<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="ttlqty" name="ttlqty" placeholder="Total Quntity">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('ttlqty'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="fueltype">Fuel Type<span style="color: red;">*</span></label>
                                                                <select id="fueltype" class="form-control" name="fueltype">
                                                                    <option>Select Fuel Type</option>
                                                                    <option value="octane">Octane</option>
                                                                    <option value="petrol">Petrol</option>
                                                                    <option value="diesel">Diesel</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="costplitter">Cost per Litter<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="costplitter" name="costplitter" >
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('costplitter'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="file">File<span style="color: red;">*</span></label>
                                                                <input type="file" class="form-control" id="file" name="file">
                                                                <span class="md-line text-danger">@error('file'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="created_date">Created Date<span style="color: red;">*</span></label>
                                                                <input type="date" class="form-control" id="created_date" name="created_date">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('created_date'){{$message}}@enderror</span>
                                                            </div>                                    
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-md btn-block waves-effect text-center">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>
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
<div id="addnew" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnew-refuelreq" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Add New</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            @foreach($vehicleslists as $vehicleslist)
                                @foreach($addedvehicles as $addedvehicle)
                                    @if($vehicleslist->vregno == $addedvehicle->vregno)
                                        @php
                                            $t = 0
                                        @endphp
                                        @break
                                    @else
                                        @php
                                            $t = 1
                                        @endphp
                                    @endif
                                @endforeach
                                @if($t == 1)
                                    <div class="form-group col-md-6">
                                        <label for="vregno">Vehicle Reg No<span style="color: red;">*</span></label>
                                        <select id="vregno" class="form-control" name="vregno">
                                            <option>Select Vehicle</option>
                                            <option value="{{$vehicleslist->vregno}}">{{$vehicleslist->vregno}}</option>
                                        </select>
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="staffname">Staff Name<span style="color: red;">*</span></label>
                                        <select id="staffname" class="form-control" name="staffname">
                                            <option>Select Staff</option>
                                            <option value="{{$vehicleslist->drivername}}">{{$vehicleslist->drivername}}</option>
                                        </select>
                                        <span class="md-line"></span>
                                    </div>
                                @else
                                    @php
                                        $t = 0
                                    @endphp
                                @endif
                                
                            @endforeach
                            <div class="form-group col-md-6">
                                <label for="pvsodo">Previous ODO</label>
                                <input type="text" class="form-control" id="pvsodo" name="pvsodo" placeholder="Previous ODO" readonly>
                                <span class="md-line"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="crodo">Current ODO<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="crodo" name="crodo" placeholder="Current ODO">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('crodo'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ttlqty">Total Quntity<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="ttlqty" name="ttlqty" placeholder="Total Quntity">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('ttlqty'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fueltype">Fuel Type<span style="color: red;">*</span></label>
                                <select id="fueltype" class="form-control" name="fueltype">
                                    <option>Select Fuel Type</option>
                                    <option value="octane">Octane</option>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="costplitter">Cost per Litter<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="costplitter" name="costplitter" >
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('costplitter'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="file">File<span style="color: red;">*</span></label>
                                <input type="file" class="form-control" id="file" name="file">
                                <span class="md-line text-danger">@error('file'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="created_date">Created Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="created_date" name="created_date">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('created_date'){{$message}}@enderror</span>
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
<!--End Modal  add new  -->


@endsection