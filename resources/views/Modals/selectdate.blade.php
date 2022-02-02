<div id="selectDate" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/wselectdate" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Select Date</h3>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date">Select Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="date" name="date">
                                <span class="md-line"></span>
                            </div>
                                                                
                        </div>
                        <div class="row m-t-15">
                            <div class="col-md-12">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block waves-effect text-center">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end of form -->
        </div>
    </div>
</div>