<div id="vehicledetails_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material"  enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                                                <h5 class="txt-primary">Vehicle Details</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span
                                                                        aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vcode">Name</label>
                                                                <input type="text" class="form-control" id="vcode" name="vcode" value="{{$data['vcode']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regno">Registration Number</label>
                                                                <input type="text" class="form-control" id="regno" name="regno" value="{{$data['regno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regno_bn">Registration Number BN</label>
                                                                <input type="text" class="form-control" id="regno_bn" name="regno_bn" value="{{$data['regno_bn']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="vehicleadded">Vehicle Added date</label>
                                                                <input type="text" class="form-control" id="vehicleadded" name="vehicleadded" 
                                                                    value="{{$data['vehicleadded']==''?'NULL':$data['vehicleadded']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ownername">Owner Name</label>
                                                                <input type="text" class="form-control" id="ownername" name="ownername" value="{{$data['ownername']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="seatcapacity">Seat Capacity (With Driver)</label>
                                                                <input type="text" class="form-control" id="seatcapacity" name="seatcapacity" value="{{$data['seatcapacity']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regdate">Registration Date</label>
                                                                <input type="text" class="form-control" id="regdate" name="regdate" value="{{$data['regdate']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="licensedate">License Date</label>
                                                                <input type="text" class="form-control" id="licensedate" name="licensedate" value="{{$data['licensedate']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="division">Division</label>
                                                                <input type="text" class="form-control" id="ldivision" name="division" value="{{$data['division']}}" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mapcolor">Map Color</label>
                                                                <input type="text" class="form-control" id="mapcolor" name="mapcolor" value="{{$data['mapcolor']}}" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="driver">Driver</label>
                                                                @if($data['toassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->vregno == $data['regno'])
                                                                        <input type="text" class="form-control" id="driver" name="driver" value="{{$assignvehicletodriver->drivername}}" readonly>
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="text" class="form-control" id="driver" name="driver" value="No driver Assign" readonly>
                                                                @endif
                                                                
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Driver Assign Date</label>
                                                                @if($data['toassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->vregno == $data['regno'])
                                                                        <input type="text" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}" readonly>
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="text" class="form-control" id="assigndate" name="assigndate" value="0000-00-00" readonly>
                                                                @endif
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>