@extends('template')
@section('title','home')
@section('maincontents')

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">{{$v_counts}}</h4>
                                                                <h6 class="text-white m-b-0"><a href="/vehicle">Total Vehicles</a></h6>
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
                                                                <h6 class="text-white m-b-0"><a href="/driverlist">Total Drivers</a></h6>
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

                                        <!-- Page-header start -->
                                            <div class="page-header">
                                                <div class="row align-items-end">
                                                    <div class="col-lg-8">
                                                        <div class="page-header-title">
                                                            <div class="d-inline">
                                                                <h4>Chart-Js</h4>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="page-header-breadcrumb">
                                                            <ul class="breadcrumb-title">
                                                                <li class="breadcrumb-item"  style="float: left;">
                                                                    <a href="../index.html"> <i class="feather icon-home"></i> </a>
                                                                </li>
                                                                <li class="breadcrumb-item"  style="float: left;"><a href="chart-chartjs.html#!">Charts</a>
                                                                </li>
                                                                <li class="breadcrumb-item"  style="float: left;"><a href="chart-chartjs.html#">Chart-Js</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page-header end -->

                                            <div class="page-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Doughnut chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="myChart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
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
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Bubble Chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="bubblechart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Scales chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="stancechart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Time Scale chart</h5>
                                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit</span>

                                                            </div>
                                                            <div class="card-block">
                                                                <canvas id="timescalechart" width="400" height="400"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
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