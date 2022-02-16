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
                                {{$vcode}}
                            </span>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdocuments">Add New Documents</button>
                    </div>
                </div>


                <ul class="nav nav-pills card-block" role="tablist">
                    <li class="nav-item pr-4">
                    <a class="nav-link active btn btn-info" data-bs-toggle="pill" href="#tax_token_p">Tax Token</a>
                    </li>
                    <li class="nav-item pr-4">
                    <a class="nav-link btn btn-info" data-bs-toggle="pill" href="#fitness_p">Fitness</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link btn btn-info" data-bs-toggle="pill" href="#insurance_p">Insurance</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div id="tax_token_p" class=" tab-pane active"><br>
                            <div class="dt-responsive table-responsive">
                                <table id="ttoken" class="table table-hover table-bordered nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type == 'taxtoken')
                                            <tr>
                                                <td>Tax Token</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>

                    <div id="fitness_p" class=" tab-pane fade"><br>
                            <div class="dt-responsive table-responsive">
                                <table id="fitness" class="table table-hover table-bordered nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type == 'fitness')
                                            <tr>
                                                <td>Fitness</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>

                    <div id="insurance_p" class=" tab-pane fade"><br>
                            <div class="dt-responsive table-responsive">
                                <table id="insurance" class="table table-hover table-bordered nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type =='insurance')
                                            <tr>
                                                <td>Insurance</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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