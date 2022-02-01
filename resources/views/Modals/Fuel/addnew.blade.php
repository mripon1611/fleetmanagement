<div id="addnew" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnew-refuelreq" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Add New</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        @if(count($vehicleslists)>0)
                            <div class="row">
                            
                                @if(count($addedvehicles)>0)
                                    @foreach($vehicleslists as $vehicleslist)
                                        @foreach($addedvehicles as $addedvehicle)
                                            @if($vehicleslist->vregno == $addedvehicle->vregno)
                                                @php
                                                    $t = 0
                                                @endphp
                                                @break
                                            @else
                                                @php
                                                    $t = 1
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($t == 1)
                                            <div class="form-group col-md-6">
                                                <label for="vregno">Vehicle Reg No<span style="color: red;">*</span></label>
                                                <select id="vregno" class="form-control" name="vregno">
                                                    <option>Select Vehicle</option>
                                                    <option value="{{$vehicleslist->vregno}}">{{$vehicleslist->vregno}}</option>
                                                </select>
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="staffname">Staff Name<span style="color: red;">*</span></label>
                                                <select id="staffname" class="form-control" name="staffname">
                                                    <option>Select Staff</option>
                                                    <option value="{{$vehicleslist->drivername}}">{{$vehicleslist->drivername}}</option>
                                                </select>
                                                <span class="md-line"></span>
                                            </div>
                                        @else
                                            @php
                                                $t = 0
                                            @endphp
                                        @endif
                                    @endforeach
                                @else
                                    @foreach($vehicleslists as $vehicleslist)
                                        <div class="form-group col-md-6">
                                            <label for="vregno">Vehicle Reg No<span style="color: red;">*</span></label>
                                            <select id="vregno" class="form-control" name="vregno">
                                                <option>Select Vehicle</option>
                                                <option value="{{$vehicleslist->vregno}}">{{$vehicleslist->vregno}}</option>
                                            </select>
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staffname">Staff Name<span style="color: red;">*</span></label>
                                            <select id="staffname" class="form-control" name="staffname">
                                                <option>Select Staff</option>
                                                <option value="{{$vehicleslist->drivername}}">{{$vehicleslist->drivername}}</option>
                                            </select>
                                            <span class="md-line"></span>
                                        </div>
                                    @endforeach
                                @endif

                                <div class="form-group col-md-6">
                                    <label for="pvsodo">Previous ODO</label>
                                    <input type="text" class="form-control" id="pvsodo" name="pvsodo" placeholder="Previous ODO" readonly>
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="crodo">Current ODO<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="crodo" name="crodo" placeholder="Current ODO">
                                    <span class="md-line"></span>
                                    <span class="md-line text-danger">@error('crodo'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ttlqty">Total Quntity<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="ttlqty" name="ttlqty" placeholder="Total Quntity">
                                    <span class="md-line"></span>
                                    <span class="md-line text-danger">@error('ttlqty'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fueltype">Fuel Type<span style="color: red;">*</span></label>
                                    <select id="fueltype" class="form-control" name="fueltype">
                                        <option>Select Fuel Type</option>
                                        <option value="octane">Octane</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="diesel">Diesel</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="costplitter">Cost per Litter<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="costplitter" name="costplitter" >
                                    <span class="md-line"></span>
                                    <span class="md-line text-danger">@error('costplitter'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="file">File<span style="color: red;">*</span></label>
                                    <input type="file" class="form-control" id="file" name="file">
                                    <span class="md-line text-danger">@error('file'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="created_date">Created Date<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" id="created_date" name="created_date">
                                    <span class="md-line"></span>
                                    <span class="md-line text-danger">@error('created_date'){{$message}}@enderror</span>
                                </div>         
                            </div>
                            <div class="row m-t-15">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-success btn-md btn-block waves-effect text-center">Save</button>
                                </div>
                            </div>
                        @else
                            <div class="form-group col-md-12">
                                <p>
                                    No vehicles to add. If you want to add, you need to add new 
                                    <a href="/vehicle" class="btn btn-warning p-1">vehicle</a> first.
                                </p>
                            </div>
                        @endif 
                    </div>
                </div>
            </form>
            <!-- end of form -->
        </div>
    </div>
</div>