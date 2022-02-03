@extends('template')
@section('title','weekly check report')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Driver.header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-xl-between">
                        <h3>Weekly Check Report</h3>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="weekly_report"
                            class="table table-hover table-bordered nowrap text-center">
                            <thead>
                                <tr>
                                    <th>Car No</th>
                                    <th>Staff Name</th>
                                    <th>Sanitizer</th>
                                    <th>Wheel</th>
                                    <th>Light</th>
                                    <th>Horn</th>
                                    <th>Mobil</th>
                                    <th>AC</th>
                                    <th>Engine</th>
                                    <th>Looking Glass</th>
                                    <th>Clean Indoor & Outdoor</th>
                                    <th>Oil</th>
                                    <th>Papers</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach start for $datas -->
                                <tr>
                                    <!-- <th colspan="14" style="color:red;">Date: {{$datas[0]->date}}</th> -->
                                    <th style="color:red;">Date: {{$datas[0]->date}}</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($datas as $data)
                                    <!-- @if($date != $data->date)
                                        @php
                                            $date = $data->date
                                        @endphp
                                        <tr>
                                            <th style="color:red;">Date: {{$date}}</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endif -->
                                <tr>
                                    <td>{{$data->vregno}}</td>
                                    <td>{{$data->staffname==''?'NULL':$data->staffname}}</td>
                                    <td>{{$data->sanitizer==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->wheel==1?'Okay':'Stop'}}</td>
                                    <td>{{$data->light==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->horn==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->mobil==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->ac==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->engine==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->looking_glass==1?'Okay':'Problem'}}</td>
                                    <td>{{$data->clean_indoor_outdoor==0?'Needs Clean':'No Need'}}</td>
                                    <td>{{$data->oil==0?'Need':'No Need'}}</td>
                                    <td>{{$data->papers==1?'Okay':'Not Okey'}}</td>
                                    <td>{{$data->remarks}}</td>
                                    
                                </tr>
                                
                                @endforeach
                                <!-- foreach end for $datas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Car No</th>
                                    <th>Staff Name</th>
                                    <th>Sanitizer</th>
                                    <th>Wheel</th>
                                    <th>Light</th>
                                    <th>Horn</th>
                                    <th>Mobil</th>
                                    <th>AC</th>
                                    <th>Engine</th>
                                    <th>Looking Glass</th>
                                    <th>Clean Indoor & Outdoor</th>
                                    <th>Oil</th>
                                    <th>Papers</th>
                                    <th>Remarks</th>
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