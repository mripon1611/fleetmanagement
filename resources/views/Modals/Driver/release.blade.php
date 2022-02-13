<div id="release_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/release" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12 mb-3">
                                                                <h5 class="txt-primary text-center"><i class="icofont icofont-emo-confounded"></i></h5>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        @csrf()
                                                        <div class="row">

                                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}">
                                                            <p class="text-center">Are you Sure!! You want to release these driver form assigned</p>
                                                                                                                                
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12 d-flex justify-content-between">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span class="btn btn-primary"
                                                                        aria-hidden="true">Close</span>
                                                                </button>
                                                                <button type="submit"
                                                                    class="btn btn-success waves-effect text-center">Release</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>