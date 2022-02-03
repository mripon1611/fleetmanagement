@if(count($vehicles)>0)

                            <form class="md-float-material" action="/store-report" method="POST" enctype="multipart/form-data">
                                <div class="card m-t-15">
                                    <div class="auth-box card-block">
                                        @csrf()
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="vregno">Select Vehicle<span style="color: red;">*</span></label>
                                                <select id="vregno" class="form-control" name="vregno">
                                                    <option value="select">--Select Vehicle--</option>
                                                    @foreach($vehicles as $vehicle)
                                                    <option value="{{$vehicle->vregno}}">{{$vehicle->vregno}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="md-line"></span>
                                            </div>
                                        </div>
                                        <div class="checklist" style="display:none;">
                                            <div class="row m-t-15">

                                                 <label class="col-sm-2 col-form-label">Sanitizer
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Wheel
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Light
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Horn
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Mobil
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">AC
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Engine
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Looking Glass
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Clean Indoor $ Outdoor
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Oil
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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

                                                <label class="col-sm-2 col-form-label">Papers
                                                     <span style="color: red;">*</span>
                                                 </label>
                                                <div class="col-sm-2">
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



                                                <!-- <div class="form-group col-md-3">
                                                    <label for="sanitizer">Sanitizer<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio" value="okay"  name="sanitizer" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio" value="stop" name="sanitizer" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('sanitizer'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="wheel">Wheel<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="wheel" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="wheel" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('wheel'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="light">Light<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="light" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="problem" name="light" />Problem
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('light'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="horn">Horn<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="horn" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="horn" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('horn'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="mobil">Mobil<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="mobil" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="mobil" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('mobil'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="ac">AC<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="ac" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="ac" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('ac'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="engine">Engine<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="engine" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="engine" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('engine'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="looking_glass">Looking Glass<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="looking_glass" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="looking_glass" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('looking_glass'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="cleen_inout">Cleen Indoor $ Outdoor<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="cleen_inout" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="stop" name="cleen_inout" />Stop
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('cleen_inout'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="oil">Oil<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="needed" name="oil" />Needed
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="not needed" name="oil" />Not Needed
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('oil'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="papers">Papers<span style="color: red;">*</span></label><br>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="okay" name="papers" />Okay
                                                    </label>
                                                    <label class="pl-2 pr-2">
                                                        <input type="checkbox" class="radio sanitizer" value="not okay" name="papers" />Not Okay
                                                    </label>
                                                    <span class="md-line"></span>
                                                    <span class="md-line text-danger">@error('papers'){{$message}}@enderror</span>
                                                </div> -->
                                                <div class="form-group col-md-8">
                                                    <div class="j-unit">
                                                        <label class="remarks">Remarks<span style="color: red;">*</span></label>
                                                        <div class="j-input">
                                                            <textarea spellcheck="false"
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
                        @else
                            <button class="btn btn-primary" data-toggle="modal" data-target="#selectDate">Select Date</button>
                        @endif