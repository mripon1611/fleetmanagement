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
                        <a href="/driverlist">Manage Driver</a>
                    </li>
                    <li class="breadcrumb-item" style="float: left;">
                        Driving History
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
                    <h3>Driving History</h3>

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
            </div>
            <!-- Zero config.table end -->
        </div>
    </div>
</div>
<!-- Page-body end -->


@endsection