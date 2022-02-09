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
                            <input type="hidden" class="form-control" id="vehicleregno" name="vehicleregno" value="{{$regno}}">
                            <div class="form-group col-md-6">
                                <label for="doctype">Select Ministrations Type</label>
                                <select id="ministration_type" class="form-control doctype" name="ministration_type">
                                    <option>--select--</option>
                                    <option value="servicing">Servicing</option>
                                    <option value="tyre_change">Tyre Change</option>
                                    <option value="battery_change">Battery Change</option>
                                    <option value="normal_work">Normal Works</option>
                                    <option value="major_work">Major Works</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="servicing">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="servicing_date">Servicing Date<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="servicing_date" name="servicing_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="servicing_cost">Servicing Cost<span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" id="servicing_cost" name="servicing_cost">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="servecing_receipt">Receipt<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="servecing_receipt" name="servecing_receipt">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="tyre_change">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="tyre_change_date">Tyre Change Date<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="tyre_change_date" name="tyre_change_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tyre_change_cost">Tyre Change Cost<span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" id="tyre_change_cost" name="tyre_change_cost">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tyre_change_receipt">Receipt<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="tyre_change_receipt" name="tyre_change_receipt">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="battary_change">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="battary_change_date">Battary Change Date<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="battary_change_date" name="battary_change_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="battary_change_cost">Battary Change Cost<span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" id="battary_change_cost" name="battary_change_cost">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="battary_change_receipt">Receipt<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="battary_change_receipt" name="battary_change_receipt">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="normal_works" >
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="normal_works_date">Normal Works Date<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="normal_works_date" name="normal_works_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="normal_works_cost">Normal Works Cost<span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" id="normal_works_cost" name="normal_works_cost">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="normal_works_receipt">Receipt<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="normal_works_receipt" name="normal_works_receipt">
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="major_works">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="major_works_date">Major Works Date<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="major_works_date" name="major_works_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="major_works_cost">Major Works cost<span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" id="major_works_cost" name="major_works_cost ">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="major_works_receipt">Receipt<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="major_works_receipt" name="major_works_receipt">
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