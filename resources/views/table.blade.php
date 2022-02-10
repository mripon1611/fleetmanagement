@extends('template')
@section('title','table')

@section('maincontents')

                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>HTML 5 Data Export</h4>
                                                        <span>HTML5 buttons provides the local file saving
                                                            features</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">Data Table
                                                                Extensions</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">Button</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">HTML5 Data-Export</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>HTML5 Export Buttons</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- foreach start for $datas -->
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$data->date}}</td>
                                                                        <td>{{$data->vregno}}</td>
                                                                        <td>{{$data->staffname==''?'NULL':$data->staffname}}</td>
                                                                        <td>{{$data->sanitizer==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->wheel==1?'Okay':'Stop'}}</td>
                                                                        <td>{{$data->light==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->horn==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->mobil==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->ac==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->engine==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->looking_glass==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->clean_indoor_outdoor==0?'Needs Clean':'No Need'}}</td>
                                                                        <td>{{$data->oil==0?'Need':'No Need'}}</td>
                                                                        <td>{{$data->papers==1?'Okay':'Not Okey'}}</td>
                                                                        <td>{{$data->remarks}}</td>
                                                                        
                                                                    </tr>
                                                                    
                                                                    @endforeach
                                                                    <!-- foreach end for $datas -->
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->
                                                <!-- Column Selectors table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Column Selectors</h5>
                                                        <span class="m-b-20">All of the data export buttons have a
                                                            exportOptions option which can be used to specify
                                                            information about what data should be exported and how. The
                                                            options given for this parameter are passed directly to the
                                                            buttons.exportData() method to obtain the required
                                                            data.</span>
                                                        <span>One of the most commonly used is the columns option which
                                                            defines the columns that should be used as part of the
                                                            export. This is given as a column-selector, making it simple
                                                            to tell it if you want only visible columns, or a mix of the
                                                            columns available.</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="cbtn-selectors"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- foreach start for $datas -->
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$data->date}}</td>
                                                                        <td>{{$data->vregno}}</td>
                                                                        <td>{{$data->staffname==''?'NULL':$data->staffname}}</td>
                                                                        <td>{{$data->sanitizer==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->wheel==1?'Okay':'Stop'}}</td>
                                                                        <td>{{$data->light==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->horn==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->mobil==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->ac==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->engine==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->looking_glass==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->clean_indoor_outdoor==0?'Needs Clean':'No Need'}}</td>
                                                                        <td>{{$data->oil==0?'Need':'No Need'}}</td>
                                                                        <td>{{$data->papers==1?'Okay':'Not Okey'}}</td>
                                                                        <td>{{$data->remarks}}</td>
                                                                        
                                                                    </tr>
                                                                    
                                                                    @endforeach
                                                                    <!-- foreach end for $datas -->
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Column Selectors end -->
                                                <!-- Excel - Cell Background table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Excel - Cell Background</h5>
                                                        <span>The Excel export button saves to an XLSX file and the data
                                                            can be customized before exporting the file using the
                                                            customize method of the excelHtml5 button type.</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="excel-bg"
                                                                class="table table-striped table-bordered nowrap">
                                                               <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- foreach start for $datas -->
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$data->date}}</td>
                                                                        <td>{{$data->vregno}}</td>
                                                                        <td>{{$data->staffname==''?'NULL':$data->staffname}}</td>
                                                                        <td>{{$data->sanitizer==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->wheel==1?'Okay':'Stop'}}</td>
                                                                        <td>{{$data->light==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->horn==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->mobil==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->ac==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->engine==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->looking_glass==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->clean_indoor_outdoor==0?'Needs Clean':'No Need'}}</td>
                                                                        <td>{{$data->oil==0?'Need':'No Need'}}</td>
                                                                        <td>{{$data->papers==1?'Okay':'Not Okey'}}</td>
                                                                        <td>{{$data->remarks}}</td>
                                                                        
                                                                    </tr>
                                                                    
                                                                    @endforeach
                                                                    <!-- foreach end for $datas -->
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Excel - Cell Background end -->
                                                <!-- Custom File (JSON) table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Custom File (JSON)</h5>
                                                        <span>Buttons uses the excellent FileSaver.js by Eli Grey in
                                                            order to be able to create and download files on the
                                                            client-side (i.e. for the CSV and Excel button types).
                                                            Buttons' built in FileSaver.js is exposed via
                                                            $.fn.dataTable.fileSave() when the HTML5 button types file
                                                            is loaded, and it can be used to easily create your own
                                                            custom files.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="pdf-json"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- foreach start for $datas -->
                                                                    @foreach($datas as $data)
                                                                    <tr>
                                                                        <td>{{$data->date}}</td>
                                                                        <td>{{$data->vregno}}</td>
                                                                        <td>{{$data->staffname==''?'NULL':$data->staffname}}</td>
                                                                        <td>{{$data->sanitizer==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->wheel==1?'Okay':'Stop'}}</td>
                                                                        <td>{{$data->light==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->horn==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->mobil==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->ac==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->engine==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->looking_glass==1?'Okay':'Problem'}}</td>
                                                                        <td>{{$data->clean_indoor_outdoor==0?'Needs Clean':'No Need'}}</td>
                                                                        <td>{{$data->oil==0?'Need':'No Need'}}</td>
                                                                        <td>{{$data->papers==1?'Okay':'Not Okey'}}</td>
                                                                        <td>{{$data->remarks}}</td>
                                                                        
                                                                    </tr>
                                                                    
                                                                    @endforeach
                                                                    <!-- foreach end for $datas -->
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Car No</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Sanitizer</th>
                                                                        <th>Wheel</th>
                                                                        <th>Light</th>
                                                                        <th>Horn</th>
                                                                        <th>Mobil</th>
                                                                        <th>AC</th>
                                                                        <th>Engine</th>
                                                                        <th>Looking Glass</th>
                                                                        <th>Clean Indoor & Outdoor</th>
                                                                        <th>Oil</th>
                                                                        <th>Papers</th>
                                                                        <th>Remarks</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Custom File (JSON) table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->

@endsection