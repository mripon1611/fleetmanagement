@extends('template')
@section('title','add maintenance')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Maintenance.addmaintenance_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-block">

                    <form class="md-float-material" action="/save_maintenanceitem" method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-header mb-2">
                                    <div class="d-flex justify-content-between">
                                        <h4>Add Maintenance Item</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="requested_by">Item Type<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="item_type">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-header mb-2">
                                    <div class="d-flex justify-content-between">
                                        <h4>Maintenance Item Name/Information</h4>
                                    </div>
                                </div>
                                <table
                                    class="table text-center table-bordered nowrap table-responsive w-80">
                                    <thead>
                                        <tr>
                                            <th>Item Name/Information<span style="color: red;">*</span></th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="maintenanceInformation">
                                        <tr class="information">
                                            <td>
                                                <input type="text" class="form-control" name="item_name[]">
                                            </td>
                                            <td>
                                                <a href="#" class="delete btn btn-danger"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                       
                                        <tr class="information">
                                            <td colspan="2">
                                                <div class="d-flex justify-content-start">
                                                    <a href="#" class="btn btn-success" onclick="myFunc()"><i class="fa fa-plus"></i>More Information</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-info" type="submit">Add</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
            <!-- Zero config.table end -->
        </div>
    </div>
</div>
<!-- Page-body end -->


@endsection