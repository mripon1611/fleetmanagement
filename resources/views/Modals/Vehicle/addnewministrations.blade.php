<div id="addnewminstrations" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/add-minstartions" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                <h5 class="txt-primary">Add Ministartions</h5>
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
                            <input type="hidden" class="form-control" id="vcode" name="vcode" value="{{$vcode}}">
                            <input type="hidden" class="form-control" id="vehicleregno" name="vehicleregno" value="{{$regno}}">
                            <div class="form-group col-md-6">
                                <label for="doctype">Select Ministrations Type</label>
                                <select id="ministration_type" class="form-control" name="ministration_type">
                                    <option>--select--</option>
                                    <option value="servicing">Servicing</option>
                                    <option value="tyre_change">Tyre Change</option>
                                    <option value="battery_change">Battery Change</option>
                                    <option value="normal_work">Normal Works</option>
                                    <option value="major_work">Major Works</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" id="ministration" style="display:none;">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="ministration_date" id="ministration_date">Battary Change Date<span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="ministration_date">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ministration_cost" id="ministration_cost">Battary Change Cost<span style="color: red;">*</span></label>
                                    <input type="number" class="form-control" name="ministration_cost">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ministration_receipt">Receipt<span style="color: red;">*</span></label>
                                    <input type="file" class="form-control" id="ministration_receipt" name="ministration_receipt">
                                    <span class="md-line"></span>
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
                </div>
            </form>
            <!-- end of form -->
        </div>
    </div>
</div>