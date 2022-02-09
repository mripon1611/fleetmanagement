<div id="addnewdocuments" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/adddocuments" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                <h5 class="txt-primary">Add Documents</h5>
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
                                <label for="doctype">Select Documents Type</label>
                                <select id="doctype" class="form-control doctype" name="papers_type">
                                    <option>--select--</option>
                                    <option value="taxtoken">Tax Token</option>
                                    <option value="fitness">Fitness</option>
                                    <option value="insurance">Insurance</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="documents_field" style="display:none;">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="issuedate" id="issuedate">Token From<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="issue_date" name="issue_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="expiredate" id="expiredate">Token To<span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="expire_date" name="expire_date">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tokenfile">Documents<span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="documents" name="documents">
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