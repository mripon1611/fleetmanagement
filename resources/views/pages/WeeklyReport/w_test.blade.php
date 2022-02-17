<div id="addnewreport" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="login-card login-card-modal modal-content card">
            <form class="md-float-material" action="/store-report" method="POST" enctype="multipart/form-data">
                <div class="card m-t-15">
                    <div class="auth-box card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12 d-flex justify-content-between mb-3">
                                <h5 class="txt-primary">Add New Driver</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <hr />
                        @csrf()
                        <div class="row">
                            <div class="form-group col-md-6 d-inline-block">
                                <label for="vregno">Select Vehicle<span style="color: red;">*</span></label>
                                <select id="select-vregno" class="form-control" name="vregno">
                                    <option value="select">--Select Vehicle--</option>
                                    @foreach($vehicles as $vehicle)
                                    <option value="{{$vehicle->regno}}">{{$vehicle->regno}}</option>
                                    @endforeach
                                </select>
                                <span class="md-line"></span>
                            </div>
                            <div class="form-group col-md-6 d-inline-block" id="check-report-date">
                                <label for="date">Select Date<span style="color: red;">*</span></label>
                                <input type="date" id="wcr-date" name="date" class="form-control">
                                <span class="md-line"></span>
                            </div>
                        </div>

                        <div class="checklist" style="display:none;">
                            <div class="row m-t-15 ">

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Sanitizer
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="sanitizer" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="sanitizer" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Wheel
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="wheel" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="wheel" value='0'>
                                                <i class="helper"></i>Stop
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Light
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="light" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="light" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Horn
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="horn" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="horn" value='1'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Mobil
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="mobil" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="mobil" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">AC
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="ac" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="ac" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Engine
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="engine" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="engine" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Looking Glass
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="looking_glass" value='1'
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="looking_glass" value='0'>
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Clean Indoor $ Outdoor
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="clean_indoor_outdoor" value="1"
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline" value="0">
                                            <label>
                                                <input type="radio" name="clean_indoor_outdoor">
                                                <i class="helper"></i>Needs Clean
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Oil
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="oil" value='0'
                                                    checked="checked">
                                                <i class="helper"></i>Need
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="oil" value='0'>
                                                <i class="helper"></i>No Need
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-xl-6 m-b-30">
                                    <h4 class="sub-title">Papers
                                            <span style="color: red;">*</span>
                                    </h4>
                                    <div class="form-radio">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="papers" value="1"
                                                    checked="checked">
                                                <i class="helper"></i>Okay
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" name="papers" value="0">
                                                <i class="helper"></i>Problem
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                
                                                        
                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Sanitizer
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="sanitizer" id="sanitizer-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="sanitizer" id="sanitizer-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Wheel
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="wheel" id="wheel-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="wheel" id="wheel-2"
                                                        value="0"> Stop
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Light
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="light" id="light-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="light" id="light-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Horn
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="horn" id="horn-1"
                                                        value="1"> Okay
                                                    </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="horn" id="horn-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Mobil
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="mobil" id="mobil-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="mobil" id="mobil-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>
                                                
                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">AC
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="ac" id="ac-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="ac" id="ac-2"
                                                        value="0"> Stop
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div> 
                                                
                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Engine
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="engine" id="engine-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="engine" id="engine-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>
                                                
                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Looking Glass
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="looking_glass" id="looking_glass-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="looking_glass" id="looking_glass-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Clean Indoor $ Outdoor
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="clean_indoor_outdoor" id="clean_indoor_outdoor-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="clean_indoor_outdoor" id="clean_indoor_outdoor-2"
                                                        value="0"> Needs Clean
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Oil
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="oil" id="oil-1"
                                                        value="0"> Need
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="oil" id="oil-2"
                                                        value="1"> No Need
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control col-md-6 check-report-form" style="border:none">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Papers
                                            <span style="color: red;">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="papers" id="papers-1"
                                                        value="1"> Okay
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="papers" id="papers-2"
                                                        value="0"> Problem
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="j-unit">
                                        <label>Remarks<span style="color: red;">*</span></label>
                                        <div class="j-input">
                                            <textarea spellcheck="false" class="form-control" style="width:100%;"
                                                name="remarks"></textarea>
                                        </div>
                                    </div>
                                    <span class="md-line text-danger">@error('remarks'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="row m-t-15 justify-content-center">
                                <div class="col-md-2 ">
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