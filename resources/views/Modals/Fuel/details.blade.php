                                <div id="details_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">Details</h3>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="vregno">Vehicle Reg No</label>
                                                                <input type="text" class="form-control" id="vregno" name="vregno" value="{{$data['vregno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="staffname">Staff Name</label>
                                                                <input type="text" class="form-control" id="staffname" name="staffname" value="{{$data['staffname']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="pvsodo">Previous ODO</label>
                                                                <input type="text" class="form-control" id="pvsodo" name="pvsodo" value="{{$data['pvsodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crodo">Current ODO</label>
                                                                <input type="text" class="form-control" id="crodo" name="crodo" value="{{$data['crodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ttlqty">Total Quntity</label>
                                                                <input type="text" class="form-control" id="ttlqty" name="ttlqty" value="{{$data['ttlqty']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="fueltype">Fuel Type</label>
                                                                <input type="text" class="form-control" id="fueltype" name="fueltype" value="{{$data['fueltype']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="totalprice">Total Price</label>
                                                                <input type="text" class="form-control" id="totalprice" name="totalprice" value="{{$data['totalprice']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="file">File</label>
                                                                <a href="#" class="form-control">{{$data['file']}}</a>
                                                                <!-- <input type="file" class="form-control" id="file" name="file"> -->
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crtdate">Created Date</label>
                                                                <input type="text" class="form-control" id="crtdate" name="crtdate" placeholder="{{$data['created_date']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>