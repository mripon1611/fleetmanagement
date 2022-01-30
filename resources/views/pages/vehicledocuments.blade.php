@extends('template')

@section('maincontents')

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
                        <table id="vehicledocuments" class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>Token From</th>
                                    <th>Token To</th>
                                    <th>Fitness From</th>
                                    <th>Fitness To</th>
                                    <th>Insurance From</th>
                                    <th>Insurance To</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    @if($data->ttokenissuedate == 'null')
                                    <td>0000-00-00</td>
                                    <td>0000-00-00</td>
                                    @else
                                    <td>{{$data->ttokenissuedate}}</td>
                                    <td>{{$data->ttokenexpiredate}}</td>
                                    @endif

                                    @if($data->fitnessissuedate == 'null')
                                    <td>0000-00-00</td>
                                    <td>0000-00-00</td>
                                    @else
                                    <td>{{$data->fitnessissuedate}}</td>
                                    <td>{{$data->fitnessexpiredate}}</td>
                                    @endif

                                    @if($data->rpermitissuedate == 'null')
                                    <td>0000-00-00</td>
                                    <td>0000-00-00</td>
                                    @else
                                    <td>{{$data->rpermitissuedate}}</td>
                                    <td>{{$data->rpermitexpiredate}}</td>
                                    @endif
                                    
                                </tr>

                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Token From</th>
                                    <th>Token To</th>
                                    <th>Fitness From</th>
                                    <th>Fitness To</th>
                                    <th>Insurance From</th>
                                    <th>Insurance To</th>
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