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
                                            <th>Vehicle Registration</th>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                            <th>Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type == 'taxtoken')
                                            <tr>
                                                <td>{{$data->vehicleregno}}</td>
                                                <td>Tax Token</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#document_tax_{{$data->id}}"><img src="uploads/{{$data->documents}}" alt="" width="40px"></a>
                                                </td>
                                            </tr>
                                            @endif

                                        <!-- Modal  document -->
                                        @include('Modals.Vehicle.document_tax_file')
                                        <!--End Modal  document -->

                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
                                </table>
                            </div>
                    </div>

                    <div id="fitness_p" class=" tab-pane fade"><br>
                            <div class="dt-responsive table-responsive">
                                <table id="fitness" class="table table-hover table-bordered nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Vehicle Registration</th>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                            <th>Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type == 'fitness')
                                            <tr>
                                                <td>{{$data->vehicleregno}}</td>
                                                <td>Fitness</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#document_fitness_{{$data->id}}"><img src="uploads/{{$data->documents}}" alt="" width="40px"></a>
                                                </td>
                                            </tr>
                                            @endif

                                        <!-- Modal  document -->
                                        @include('Modals.Vehicle.document_fitness_file')
                                        <!--End Modal  document -->

                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
                                </table>
                            </div>
                    </div>

                    <div id="insurance_p" class=" tab-pane fade"><br>
                            <div class="dt-responsive table-responsive">
                                <table id="insurance" class="table table-hover table-bordered nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Vehicle Registration</th>
                                            <th>Papers Type</th>
                                            <th>Issue Date</th>
                                            <th>Expire Date</th>
                                            <th>Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach start for $datas -->
                                        @foreach($datas as $data)
                                            @if($data->papers_type =='insurance')
                                            <tr>
                                                <td>{{$data->vehicleregno}}</td>
                                                <td>Insurance</td>
                                                <td>{{$data->issue_date}}</td>
                                                <td>{{$data->expire_date}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#document_insurance_{{$data->id}}"><img src="uploads/{{$data->documents}}" alt="" width="40px"></a>
                                                </td>
                                            </tr>
                                            @endif

                                        <!-- Modal  document -->
                                        @include('Modals.Vehicle.document_insurance_file')
                                        <!--End Modal  document -->
                                        
                                        @endforeach
                                        <!-- foreach end for $datas -->
                                    </tbody>
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