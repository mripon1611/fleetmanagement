<div id="addnewservice_{{$ministration_code->ministration_code}}" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/addnewservice" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                <h5 class="txt-primary">{{$ministration_code->ministration_code}}</h5>
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
                            <input type="hidden" name='ministration_code' value="{{$ministration_code->ministration_code}}">
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
                            <div class="form-group col-md-6">
                                <label for="requested_date" id="ministration_date">Requested Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" name="requested_date">
                                <span class="md-line"></span>
                            </div>
                        </div>
                        <div class="row m-t-15">
                            <div class="col-md-3">
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