@extends('template')
@section('maincontents')

<?php
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
                                        <button class="btn btn-xs btn-success"><i class="fas fa-eye"></i>Details</button>
                                        <button class="btn btn-xs btn-primary"><i class="fas fa-eye"></i>Updates</button>
                                        <button class="btn btn-xs btn-success"><i class="fas fa-history"></i>History</button>
                                        <button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
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
            <form class="md-float-material" action="/addnewvehicle" method="POST" enctype="multipart/form-data">
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
                            <div class="form-group col-md-6">
                                <label for="vregno">Vehicle Reg No<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="vregno" name="vregno" placeholder="dhaka metro-ha 123-4567">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('vregno'){{$message}}@enderror</span>
                            </div>
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
                                <label for="crtdate">Created Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="crtdate" name="crtdate">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('crtdate'){{$message}}@enderror</span>
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