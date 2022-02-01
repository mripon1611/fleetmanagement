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
                            <input type="hidden" class="form-control" id="vehicleregno" name="vehicleregno" value="{{$regno}}">
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