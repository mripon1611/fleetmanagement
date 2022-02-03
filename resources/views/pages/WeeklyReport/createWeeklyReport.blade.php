@extends('template')
@section('title','generate report')
@section('maincontents')

<!-- Page-header start -->
@include('pages.WeeklyReport.createReportHeader')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Check Report Entry(weekly)</h3>
                </div>
                <div class="card-block">
                    <!-- Modal  add new vehicle -->
                    @include('pages.WeeklyReport.checkReportForm')
                    <!--End Modal  add new vehicle -->
                </div>
            </div>
            <!-- Zero config.table end -->                                       
        </div>
    </div>
</div>
<!-- Page-body end -->
<!-- Modal  add new vehicle -->
 @include('Modals.selectdate')
<!--End Modal  add new vehicle -->
@endsection