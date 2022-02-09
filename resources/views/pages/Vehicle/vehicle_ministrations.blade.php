@extends('template')
@section('title','vehicle ministartions')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Vehicle.ministration_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <p>Documents : <span style="color:#1684c5;">
                                {{$regno}}
                            </span>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewminstrations">Add Ministrations</button>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="vehicleministrations" class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>Staff Name</th>
                                    <th>Servecing Date</th>
                                    <th>Servecing Cost</th>
                                    <th>Tyre Change Date</th>
                                    <th>Tyre Change Cost</th>
                                    <th>Battery Change Date</th>
                                    <th>Battery Change Cost</th>
                                    <th>Normal Works Date</th>
                                    <th>Normal Works Cost</th>
                                    <th>Major Works Date</th>
                                    <th>Major Works Cost</th>
                                    <th>Entry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->staffname}}</td>
                                    @if($data->servicing_date == '')
                                        <td>0000-00-00</td>
                                        <td>0.00</td>
                                    @else
                                        <td>{{$data->servicing_date}}</td>
                                        <td>{{$data->servicing_cost}}</td>
                                    @endif

                                    @if($data->tyre_change_date == '')
                                        <td>0000-00-00</td>
                                        <td>0.00</td>
                                    @else
                                        <td>{{$data->tyre_change_date}}</td>
                                        <td>{{$data->tyre_change_cost}}</td>
                                    @endif

                                    @if($data->battery_change_date == '')
                                        <td>0000-00-00</td>
                                        <td>0.00</td>
                                    @else
                                        <td>{{$data->battery_change_date}}</td>
                                        <td>{{$data->battery_change_cost}}</td>
                                    @endif

                                    @if($data->normal_works_date == '')
                                        <td>0000-00-00</td>
                                        <td>0.00</td>
                                    @else
                                        <td>{{$data->normal_works_date}}</td>
                                        <td>{{$data->normal_works_cost}}</td>
                                    @endif
                                    @if($data->major_works_date == '')
                                        <td>0000-00-00</td>
                                        <td>0.00</td>
                                    @else
                                        <td>{{$data->major_works_date}}</td>
                                        <td>{{$data->major_works_cost}}</td>
                                    @endif

                                    <td>{{$data->created_at}}</td>
                                    
                                </tr>

                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Staff Name</th>
                                    <th>Servecing Date</th>
                                    <th>Servecing Cost</th>
                                    <th>Tyre Change Date</th>
                                    <th>Tyre Change Cost</th>
                                    <th>Battery Change Date</th>
                                    <th>Battery Change Cost</th>
                                    <th>Normal Works Date</th>
                                    <th>Normal Works Cost</th>
                                    <th>Major Works Date</th>
                                    <th>Major Works Cost</th>
                                    <th>Entry Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-info" onClick="window.print()">Print</button>
                    </div>
                </div>
            </div>
            <!-- Zero config.table end -->                                       
        </div>
    </div>
</div>
<!-- Page-body end -->

<!-- Modal for add new documents -->
@include('Modals.Vehicle.addnewministrations')
<!-- Modal for add new documents -->

@endsection