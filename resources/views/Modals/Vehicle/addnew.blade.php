<div id="addnewvehicle" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnewvehicle" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Add New Vehicle</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="TAYOTA">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regno">Registration Number</label>
                                <input type="text" class="form-control" id="regno" name="regno" placeholder="Dhaka Metro Ha-1234">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('regno'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ownername">Owner Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="ownername" name="ownername" placeholder="EBS">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('ownername'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seatcapacity">Seat Capacity (With Driver)<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="seatcapacity" name="seatcapacity" placeholder="4">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('seatcapacity'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seatcapacity">Registration Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="regdate" name="regdate" >
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('regdate'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="licensedate">License Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="licensedate" name="licensedate">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('licensedate'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Division<span style="color: red;">*</span></label>
                                <select id="division" class="form-control" name="division">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Sylhet">Sylhet</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mapcolor">Map Color<span style="color: red;">*</span></label>
                                <select id="mapcolor" class="form-control" name="mapcolor">
                                    <option value="green">Green</option>
                                    <option value="red">Red</option>
                                </select>
                            </div>
                                                                
                            <input type="hidden" class="form-control" id="toassigned" name="toassigned" value="0" readonly>
                                                                
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