@extends('template')
@section('title','manage vehicle')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Ministration.ministration_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="vehicletable" class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Vehicle Code</th>
                                    <th>Registration Number</th>
                                    <th>Staff Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$data->vcode}}</td>
                                    <td>{{$data->vehicleregno}}</td>
                                    <td>{{$data->staffname}}</td>
                                    <td>
                                        <!-- <a href="#" class="btn btn-info p-1"><i class="fas fa-eye"></i>Documents</a> -->
                                        <a href="/ministration-overview-{{$data->vcode}}" class="btn btn-success p-1"><i class="fas fa-eye"></i>Overview</a>
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