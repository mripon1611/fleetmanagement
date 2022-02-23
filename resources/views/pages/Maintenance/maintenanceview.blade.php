@extends('template')
@section('title','maintenanceview')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Maintenance.maintenanceview_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Maintenance Requisition List</h3>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdriver"><i class="fa fa-plus"></i>Add Maintenance</button>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success mt-2 mb-2">
                            <button type="button" class="close"
                                data-dismiss="alert" aria-label="Close">
                                <i
                                    class="icofont icofont-close-line-circled"></i>
                            </button>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
					@endif
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Requisition Date</th>
                                    <th>Vehicle Name</th>
                                    <th>Maintenance type</th>
                                    <th>Requested By</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($maintenances as $maintenance)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$maintenance['requested_date']}}</td>
                                    <td>{{$maintenance['vregno']}}</td>
                                    <td>{{$maintenance['maintenance_type']}}</td>
                                    <td>{{$maintenance['requested_by']}}</td>
                                    <td>{{$maintenance['status']}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-info"><i class="far fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- foreach end for $datas -->
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