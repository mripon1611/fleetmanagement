<div id="driverupdates_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/driverupdate" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Driver Updates</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <img src="uploads/{{$data['photograph']}}" alt="Driver Photograph" width="100px">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="file" class="form-control" id="photograph" name="photograph">
                                                                <span class="md-line text-danger">@error('photograph'){{$message}}@enderror</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="mname" name="name" value="{{$data['name']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name_bn">Name BN</label>
                                                                <input type="text" class="form-control" id="mname_bn" name="name_bn" value="{{$data['name_bn']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="nid">NID</label>
                                                                <input type="text" class="form-control" id="mnid" name="nid" value="{{$data['nid']}}" readonly>
                                                                <span class="md-line"></span>
                                                                    
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="blood">Blood Group</label>
                                                                <input type="text" class="form-control" id="mblood" name="blood" value="{{$data['blood']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license">Driving License Number</span></label>
                                                                <input type="text" class="form-control" id="license" name="license" value="{{$data['license']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="license_ex">License Expairy</span></label>
                                                                <input type="date" class="form-control" id="license_ex" value="{{$data['license_ex']}}" >
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="join_date">Join Date</label>
                                                                <input type="date" class="form-control" id="join_date" name="join_date" value="{{$data['join_date']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="salary">Salary</label>
                                                                <input type="number" class="form-control" id="salary" name="salary" value="{{$data['salary']}}">
                                                                <span class="md-line"></span>
                                                            </div>                                                                
                                                            <div class="form-group col-md-6">
                                                                <label for="contact">Contact Number</label>
                                                                <input type="text" class="form-control" id="mcontact" name="contact" value="{{$data['contact']}}" >
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="emergency">Emergency</label>
                                                                <input type="text" class="form-control" id="memergency" name="emergency" value="{{$data['emergency']}}">
                                                                <span class="md-line"></span>
                                                            </div>
                                                                                                                                
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vehicle">Assign Vehicle</label>
                                                                <select id="vehicle" class="form-control" name="vehicle">
                                                                    @if($data['isassigned'] ==1)
                                                                        @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                            @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                            <option value="{{$assignvehicletodriver->vregno}}">{{$assignvehicletodriver->vregno}}</option>
                                                                            @break
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                    <option>Select Vehicle</option>
                                                                    @endif
                                                                    @foreach($freevehicles as $freevehicle)
                                                                    <option value="{{$freevehicle->regno}}">{{$freevehicle->regno}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="assigndate">Asign date</label>
                                                                @if($data['isassigned'] ==1)
                                                                    @foreach($assignvehicletodrivers as $assignvehicletodriver)
                                                                        @if($assignvehicletodriver->dlicensenumber == $data['license'])
                                                                        <input type="date" class="form-control" id="assigndate" name="assigndate" value="{{$assignvehicletodriver->assigndate}}">
                                                                        @break
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                <input type="date" class="form-control" id="assigndate" name="assigndate" placeholder="01XXXXXXXXX">
                                                                @endif
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-md btn-block waves-effect text-center">Save Change</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>