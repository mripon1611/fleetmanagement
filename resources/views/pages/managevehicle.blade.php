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
                                                        <h5>Manage Vehicle</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable"
                                                                class="table table-hover table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Reg NO</th>
                                                                        <th>Vehicle Code</th>
                                                                        <th>Vehicle Name</th>
                                                                        <th>Driver Name</th>
                                                                        <th>Owner Name</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$sl++}}</td>
                                                                        <td>{{$data['vehicleregno']}}</td>
                                                                        <td>{{$data['vehiclecode']}}</td>
                                                                        <td>{{$data['vehicledetails']}}</td>
                                                                        <td>{{$data['drivername']}}</td>
                                                                        <td>{{$data['carowner']}}</td>
                                                                        <td>N/A</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Reg NO</th>
                                                                        <th>Vehicle Code</th>
                                                                        <th>Vehicle Name</th>
                                                                        <th>Driver Name</th>
                                                                        <th>Owner Name</th>
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


@endsection