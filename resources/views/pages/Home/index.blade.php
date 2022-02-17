@extends('template')
@section('title','home')
@section('maincontents')

<input type="hidden" id="service_cost" value="{{$ministration_cost['servicing_cost']}}">
<input type="hidden" id="tyre_cost" value="{{$ministration_cost['tyre_change_cost']}}">
<input type="hidden" id="battery_cost" value="{{$ministration_cost['battery_change_cost']}}">
<input type="hidden" id="normal_cost" value="{{$ministration_cost['normal_works_cost']}}">
<input type="hidden" id="major_cost" value="{{$ministration_cost['major_works_cost']}}">

<input type="hidden" id="octane_cost" value="{{$fuel_cost['octane_cost']}}">
<input type="hidden" id="petrol_cost" value="{{$fuel_cost['petrol_cost']}}">
<input type="hidden" id="diesel_cost" value="{{$fuel_cost['diesel_cost']}}">

                                    <div class="page-body">
                                        <!-- Page-header start -->
                                            <div class="page-header">
                                                <div class="row align-items-end">
                                                    <div class="col-lg-8">
                                                        <div class="page-header-title">
                                                            <div class="d-inline">
                                                                <h4>Dashboard</h4>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="page-header-breadcrumb">
                                                            <ul class="breadcrumb-title">
                                                                <li class="breadcrumb-item"  style="float: left;">
                                                                    <a href="/"> <i class="feather icon-home"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page-header end -->

                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">{{$v_counts}}</h4>
                                                                <h6 class="text-white m-b-0"><a href="/vehicles">Total Vehicles</a></h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-1" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i>Last Update
                                                            : {{$v_last_updates}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">{{$d_counts}}</h4>
                                                                <h6 class="text-white m-b-0"><a href="/drivers">Total Drivers</a></h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i>Last Update
                                                            : {{$d_last_updates}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">145</h4>
                                                                <h6 class="text-white m-b-0">Task Completed</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i>update
                                                            : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">500</h4>
                                                                <h6 class="text-white m-b-0">Downloads</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i>update
                                                            : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
                                        </div>

                                        <div class="page-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Ministrations Cost</h5>
                                                                <span id="ministration_cost"></span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="myChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>In Total Cost</h5>
                                                                <span id="in_total"></span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="allCostChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Fuel Cost</h5>
                                                                <span id="fuel_cost"></span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="fuelCostChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Radar chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="radarChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Polar chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="polarChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Pie chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="pieChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Bar chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="barChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    
                                                    
                                                </div>
                                        </div>


                                        <div class="row">
                                            <!-- social download  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-blue">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i
                                                                    class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Mail</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the
                                                                    printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="index.html#!" class="download-icon"><i
                                                            class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-pink">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i
                                                                    class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">twitter</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the
                                                                    printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="index.html#!" class="download-icon"><i
                                                            class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card social-card bg-simple-c-green">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i
                                                                    class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Instagram</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the
                                                                    printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="index.html#!" class="download-icon"><i
                                                            class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- social download  end -->
                                        </div>
                                    </div>

@endsection