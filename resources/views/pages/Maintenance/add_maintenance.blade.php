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
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Add Maintenance</h3>
                    </div>
                </div>
                <div class="card-block">

                    <form class="md-float-material" action="/save_maintenance" method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="requested_by">Requisition For<span style="color: red;">*</span></label>
                                            <select class="form-control" name="requested_by">
                                                <option>Select Employee</option>
                                                @foreach($drivers as $driver)
                                                <option value="{{$driver->name}}">{{$driver->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="vregno">Vehicle Regno<span style="color: red;">*</span></label>
                                            <select class="form-control" name="vregno">
                                                <option>Select Vehicle</option>
                                                @foreach($vehicles as $vehicle)
                                                <option value="{{$vehicle->regno}}">{{$vehicle->regno}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="maintenance_type">Maintenance Type<span style="color: red;">*</span></label>
                                            <select class="form-control" name="maintenance_type">
                                                <option>Please Select One</option>
                                                <option value="Preventive Maintenance">Preventive Maintenance</option>
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="requested_date">Requested Date<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="requested_date">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="estimate_cost">Charge<span style="color: red;">*</span></label>
                                            <input type="number" name="estimate_cost" class="form-control" value=500>
                                        </div>

                                        <div class="form-group">
                                            <label for="service_date">Service Date<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="service_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="remarks">Remarks<span style="color: red;">*</span></label>
                                            <textarea spellcheck="false" class="form-control" style="width:100%;"
                                            name="remarks" placeholder="Remarks"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-3 w-100">
                            <h4>Requisition Item Information</h4>
                                <table
                                    class="table text-center table-bordered nowrap table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Item Type Name<span style="color: red;">*</span></th>
                                            <th>Item Name<span style="color: red;">*</span></th>
                                            <th>Item Unit<span style="color: red;">*</span></th>
                                            <th>Unit Price<span style="color: red;">*</span></th>
                                            <th>Total Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="wrapper">
                                        <tr class="content">
                                            <td>
                                                <input type="text" class="form-control" name="item_type[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="item_name[]">
                                            </td>
                                            <td>
                                                <input type="number"  class="unit form-control" name="unit[]" value=0>
                                            </td>
                                            <td>
                                                <input type="number" class="unit_price form-control" name="unit_price[]" value=0.00>
                                            </td>
                                            <td>
                                                <input type="text" class="total_amount form-control" name="total_amount[]" value=0.00 readonly>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger delete"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                       
                                        <tr class="content">
                                            <td colspan="3">
                                                <div class="d-flex justify-content-start">
                                                    <a href="#" class="btn btn-success" id="addMoreItem">Add More Item</a>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>
                                                    <span class="font-weight-bold">Grand Total:</span>
                                                </h6>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="grandTotal" readonly>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-success" type="submit">Add</button>
                                                </div>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

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