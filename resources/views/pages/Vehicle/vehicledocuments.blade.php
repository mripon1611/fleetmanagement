@extends('template')
@section('title','vehicle documents')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Vehicle.documentsheader')
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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdocuments">Add New Documents</button>
                    </div>
                </div>
                <div class="card-block">
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
                                    @if($data->ttokenissuedate == '')
                                    <td>0000-00-00</td>
                                    <td>0000-00-00</td>
                                    @else
                                    <td>{{$data->ttokenissuedate}}</td>
                                    <td>{{$data->ttokenexpiredate}}</td>
                                    @endif

                                    @if($data->fitnessissuedate == '')
                                    <td>0000-00-00</td>
                                    <td>0000-00-00</td>
                                    @else
                                    <td>{{$data->fitnessissuedate}}</td>
                                    <td>{{$data->fitnessexpiredate}}</td>
                                    @endif

                                    @if($data->rpermitissuedate == '')
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

<!-- Modal for add new documents -->
@include('Modals.Vehicle.addnewdocuments')
<!-- Modal for add new documents -->

@endsection