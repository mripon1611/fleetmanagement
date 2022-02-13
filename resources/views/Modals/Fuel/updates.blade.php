                                <div id="updates_{{$data['id']}}" class="modal fade mixed-form" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="login-card login-card-modal modal-content card">
                                            <form class="md-float-material" action="/updates-refuelreq" method="POST" enctype="multipart/form-data">
                                                <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                                                <h5 class="txt-primary">Updates</h5>
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

                                                            <input type="hidden" class="form-control" name="status" value="present">
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label for="vregno">Vehicle Reg No</label>
                                                                <input type="text" class="form-control" id="vregno" name="vregno" value="{{$data['vregno']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="staffname">Staff Name</label>
                                                                @if(count($vehicleslists)>0)
                                                                    @foreach($vehicleslists as $vehicleslist)
                                                                        @if($data['vregno'] == $vehicleslist->vregno)
                                                                        <input type="vregno" class="form-control" id="staffname" name="staffname" value="{{$vehicleslist->drivername}}" readonly>
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                    <input type="vregno" class="form-control" id="staffname" name="staffname" value="Currently no Staff assigned" readonly>
                                                                @endif
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="pvsodo">Previous ODO</label>
                                                                <input type="text" class="form-control" id="pvsodo" name="pvsodo" value="{{$data['crodo']}}" readonly>
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="crodo">Current ODO<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="crodo" name="crodo" placeholder="Current ODO">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('crodo'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="ttlqty">Total Quntity<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="ttlqty" name="ttlqty" placeholder="Total Quntity">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('ttlqty'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="fueltype">Fuel Type<span style="color: red;">*</span></label>
                                                                @if($data['fueltype']==='diesel')
                                                                <input type="text" class="form-control" name="fueltype" value="{{$data['fueltype']}}" readonly>
                                                                @else
                                                                <select id="fueltype" class="form-control" name="fueltype">
                                                                    <option>Select Fuel Type</option>
                                                                    <option value="octane">Octane</option>
                                                                    <option value="petrol">Petrol</option>
                                                                </select>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="costplitter">Cost per Litter<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" id="costplitter" name="costplitter" >
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('costplitter'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="file">File<span style="color: red;">*</span></label>
                                                                <input type="file" class="form-control" id="file" name="file">
                                                                <span class="md-line text-danger">@error('file'){{$message}}@enderror</span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="created_date">Created Date<span style="color: red;">*</span></label>
                                                                <input type="date" class="form-control" id="created_date" name="created_date">
                                                                <span class="md-line"></span>
                                                                <span class="md-line text-danger">@error('created_date'){{$message}}@enderror</span>
                                                            </div>                                    
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-md btn-block waves-effect text-center">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end of form -->
                                        </div>
                                    </div>
                                </div>