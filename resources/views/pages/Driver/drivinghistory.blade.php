@extends('template')
@section('title','driving history')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Driver.historyheader')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Driving History</h3>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>Vehicle Reg No</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Present Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->vregno}}</td>
                                    <td>{{$data->assigndate}}</td>
                                    @if($data->status =='past')
                                    <td>{{$data->releasedate}}</td>
                                    <td style="color:red;">Past</td>
                                    @else
                                    <td>Null</td>
                                    <td style="color:green;">Present</td>
                                    @endif
                                </tr>
                                
                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Vehicle Reg No</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Present Status</th>
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


@endsection