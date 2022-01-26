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
                                                        <h5>Driver List</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdriver">Add New Driver</button>
                                                        </div>
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable"
                                                                class="table table-hover table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Photograph</th>
                                                                        <th>Name</th>
                                                                        <th>Name BN</th>
                                                                        <th>NID</th>
                                                                        <th>Contact</th>
                                                                        <th>Lisence No</th>
                                                                        <th>Is Assigned</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$sl++}}</td>
                                                                        <td><img src="{{$data['photograp']}}" width=60px alt=""></td>
                                                                        <td>{{$data['name']}}</td>
                                                                        <td>{{$data['name_bn']}}</td>
                                                                        <td>{{$data['nid']}}</td>
                                                                        <td>{{$data['contact']}}</td>
                                                                        <td>{{$data['lisence']}}</td>
                                                                        <td>{{$data['isaasigned']}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Photograph</th>
                                                                        <th>Name</th>
                                                                        <th>Name BN</th>
                                                                        <th>NID</th>
                                                                        <th>Contact</th>
                                                                        <th>Lisence No</th>
                                                                        <th>Is Assigned</th>
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
                                    <!-- Modal normal sign in start -->
                                    <div id="addnewdriver" class="modal fade mixed-form" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card login-card-modal modal-content card">
                                                <form class="md-float-material" action="/addnewdriver" method="POST">
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center txt-primary">Add New Driver</h3>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            @csrf()
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Mr. X">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('name'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name_bn">Name BN</label>
                                                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="মি. এক্স">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('name_bn'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nid">NID</label>
                                                                <input type="text" class="form-control" id="nid" name="nid" placeholder="241425XXXX">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('nid'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="lisence">Lisence Number</label>
                                                                <input type="text" class="form-control" id="lisence" name="lisence" placeholder="1998XXXXXXXXXX">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('lisence'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="photograp">Photograph</label>
                                                                <input type="text" class="form-control" id="photograp" name="photograp" placeholder="For now paste url">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('photograp'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="isaasigned">Is Assigned</label>
                                                                <input type="text" class="form-control" id="isaasigned" name="isaasigned" value="No" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="start_date">Join Date</label>
                                                                <input type="text" class="form-control" id="start_date" name="start_date" placeholder="YYYY-MM-DD">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('start_date'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" id="end_date" name="end_date" value="YYYY-MM-DD">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="contact">Contact Number</label>
                                                                <input type="text" class="form-control" id="contact" name="contact" placeholder="01XXXXXXXXX">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('contact'){{$message}}@enderror</span>
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


@endsection