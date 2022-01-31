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
                    <li class="breadcrumb-item" style="float: left;">
                        Vehicle Documents
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
                    <p>Documents : <span style="color:#1684c5;">
                            @if(count($datas)>0)
                            {{$datas[0]->vehicleregno}}
                            @endif
                        </span>
                    </p>
                </div>
                <div class="card-block">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addnewdocuments">Add New Documents</button>
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
<div id="addnewdocuments" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/adddocuments" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Vehicle Details</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <input type="hidden" class="form-control" id="vehicleregno" name="vehicleregno" value="{{$datas[0]->vehicleregno}}">
                            <div class="form-group col-md-6">
                                <label for="doctype">Select Documents Type</label>
                                <select id="doctype" class="form-control doctype" name="doctype">
                                    <option>--select--</option>
                                    <option value="taxtoken">Tax Token</option>
                                    <option value="fitness">Fitness</option>
                                    <option value="insurance">Insurance</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="ttoken" style="display:none;">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="ttokenissuedate">Token From<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="ttokenissuedate" name="ttokenissuedate">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ttokenexpiredate">Token To<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="ttokenexpiredate" name="ttokenexpiredate">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tokenfile">Image<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="tokenfile" name="tokenfile">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="fitness" style="display:none;">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="fitnessissuedate">Fitness From<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="fitnessissuedate" name="fitnessissuedate">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fitnessexpiredate">Fitness To<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="fitnessexpiredate" name="fitnessexpiredate">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fitnessfile">Image<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="fitnessfile" name="fitnessfile">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12" id="insurance" style="display:none;">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="rpermitissuedate">Insurance From<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" id="rpermitissuedate" name="rpermitissuedate">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="rpermitexpiredate">Insurance To<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" id="rpermitexpiredate" name="rpermitexpiredate">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="permitfile">Image<span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="permitfile" name="permitfile">
                                            <span class="md-line"></span>
                                        </div>
                                    </div>
                                </div>                                                             
                        </div>
                        <div class="row m-t-15">
                            <div class="col-md-12">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block waves-effect text-center">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end of form -->
        </div>
    </div>
</div>
<!-- Modal for add new documents -->

@endsection