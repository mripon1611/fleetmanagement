<div id="vehicleupdates_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/vehicleupdates" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                                                <h5 class="txt-primary">Vehicle Updates</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span
                                                                        aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                            <div class="form-group col-md-6">
                                                                <label for="vcode">Vehicle Code</label>
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
                                                                <input type="text" class="form-control" id="ownername" name="ownername" value="{{$data['ownername']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="seatcapacity">Seat Capacity (With Driver)</label>
                                                                <input type="number" class="form-control" id="seatcapacity" name="seatcapacity" value="{{$data['seatcapacity']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="regdate">Registration Date</label>
                                                                <input type="date" class="form-control" id="regdate" name="regdate" value="{{$data['regdate']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="licensedate">License Date</label>
                                                                <input type="date" class="form-control" id="licensedate" name="licensedate" value="{{$data['licensedate']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="division">Division</label>
                                                                <select id="division" class="form-control" name="division">
                                                                    <option value="Dhaka">Dhaka</option>
                                                                    <option value="Sylhet">Sylhet</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mapcolor">Map Color</label>
                                                                <select id="mapcolor" class="form-control" name="mapcolor">
                                                                    <option value="green">Green</option>
                                                                    <option value="red">Red</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="driver">Driver</label>
                                                                <select id="driver" class="form-control" name="driver">
                                                                    @if($data['toassigned'] ==1)
                                                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                            @if($assignvehicletodriver->vregno == $data['regno'])
                                                                            <option value="{{$assignvehicletodriver->vregno}}">{{$assignvehicletodriver->drivername}}</option>
                                                                            @break
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                    <option>Select Driver</option>
                                                                    @endif
                                                                    @foreach($freedrivers as $freedriver)
                                                                    <option value="{{$freedriver->name}}">{{$freedriver->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Driver Assign Date</label>
                                                                @if($data['toassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->vregno == $data['regno'])
                                                                        <input type="date" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}">
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="date" class="form-control" id="assigndate" name="assigndate">
                                                                @endif
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-md btn-block waves-effect text-center">Update</button>
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>