@extends('template')
@section('title','maintenanceview')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Maintenance.maintenancetypes_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Maintenance Item Types</h3>
                        <a href="/add_maintenanceitems" class="btn btn-primary"><i class="fa fa-plus"></i>Add Items</a>
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
                                    <th>Item Types</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($maintenances as $maintenance)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$maintenance['item_type']}}</td>
                                    <td>
                                        <a href="/edit_maintenance-{{$maintenance['id']}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#viewdetails_{{$maintenance['id']}}"><i class="far fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- view Details start-->
                                @include('Modals.Maintenance.viewdetails')
                                <!-- view details end -->

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