<div id="viewdetails_{{$maintenance['id']}}" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <div class="card m-t-15">
                <div class="auth-box card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12 d-flex justify-content-between mb-3">
                            <h5 class="txt-primary">Details</h5>
                            <button type="button" class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                                <span
                                    aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <hr />
                    <div class="row">

                        <div class="col-md-12">
                            <a href="/edit_maintenance-{{$maintenance['id']}}" class="btn btn-success mb-2"><i class="fa fa-pencil-square-o"></i>Edit Maintenance</a>
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <span class="font-weight-bold">Vehicle Reg No: </span>{{$maintenance['vregno']}}
                                            </p>

                                            <p>
                                                <span class="font-weight-bold">Maintenance Type: </span>{{$maintenance['maintenance_type']}}
                                            </p>

                                            <p>
                                                <span class="font-weight-bold">Requisition For: </span>{{$maintenance['requested_by']}}
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>
                                                <span class="font-weight-bold">Charge: </span>{{$maintenance['estimate_cost']}}
                                            </p>

                                            <p>
                                                <span class="font-weight-bold">Requested Date: </span>{{$maintenance['requested_date']}}
                                            </p>

                                            <p>
                                                <span class="font-weight-bold">Service Date: </span>{{$maintenance['service_date']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>