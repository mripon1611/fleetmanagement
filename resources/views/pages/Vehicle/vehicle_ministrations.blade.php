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
                                    <th>Ministartion Type</th>
                                    <th>Date</th>
                                    <th>Cost</th>
                                    <th>Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->staffname}}</td>
                                    @if($data->ministration_type === 'tyre_change')
                                    <td>Tyre Change</td>
                                    @elseif($data->ministration_type === 'servicing')
                                    <td>Servicing</td>
                                    @elseif($data->ministration_type === 'battery_change')
                                    <td>Battery Change</td>
                                    @elseif($data->ministration_type === 'normal_work')
                                    <td>Normal Works</td>
                                    @elseif($data->ministration_type === 'major_work')
                                    <td>Major Works</td>
                                    @endif
                                    <td>{{$data->ministration_date}}</td>
                                    <td>{{$data->ministration_cost}}</td>
                                    <td>{{$data->ministration_receipt}}</td>
                                </tr>
                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Staff Name</th>
                                    <th>Ministartion Type</th>
                                    <th>Date</th>
                                    <th>Cost</th>
                                    <th>Receipt</th>
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