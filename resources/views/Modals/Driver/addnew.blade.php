<div id="addnewdriver" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnewdriver" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                <h5 class="txt-primary">Add New Driver</h5>
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
                            <div class="form-group col-md-6">
                                <label for="name">Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Mr. X">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name_bn">Name BN</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="মি. এক্স">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('name_bn'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nid">NID<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="nid" name="nid" placeholder="241425XXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('nid'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="blood">Blood Group<span style="color: red;">*</span></label>
                                <select id="blood" class="form-control" name="blood">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <span class="md-line"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="license">Driving License<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="license" name="license" placeholder="1998XXXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('license'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="license_ex">License Expairy<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="license_ex" name="license_ex" >
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('license_ex'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="join_date">Join Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="join_date" name="join_date" placeholder="YYYY-MM-DD">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('join_date'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="salary">Salary<span style="color: red;">*</span></label>
                                <input type="number" class="form-control" id="salary" name="salary" placeholder="15000">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('salary'){{$message}}@enderror</span>
                            </div>
                                                                
                            <input type="hidden" class="form-control" id="isassigned" name="isassigned" value="0" readonly>
                                                                
                            <div class="form-group col-md-6">
                                <label for="contact">Contact Number<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="01XXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('contact'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emergency">Emergency<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="emergency" name="emergency" placeholder="01XXXXXXXXX">
                                <span class="md-line"></span>
                                <span class="md-line text-danger">@error('emergency'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="photograph">Photograph<span style="color: red;">*</span></label>
                                <input type="file" class="form-control" id="photograph" name="photograph">
                                <span class="md-line text-danger">@error('photograph'){{$message}}@enderror</span>
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