@extends('template')
@section('title','edit maintenance')
@section('maincontents')

<!-- Page-header start -->
@include('pages.Maintenance.editmaintenance_header')
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-3">
                    <div class="d-flex justify-content-between">
                        <h3>Edit Maintenance</h3>
                    </div>
                </div>
                <div class="card-block">

                    <form class="md-float-material" action="#
                    " method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="requested_by">Requisition For</label>
                                            <input type="text" class="form-control" name="requested_by" value="{{$maintenance['requested_by']}}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="vregno">Vehicle Regno<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="vregno" value="{{$maintenance['vregno']}}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="maintenance_type">Maintenance Type<span style="color: red;">*</span></label>
                                            <select class="form-control" name="maintenance_type">
                                                <option value="Preventive Maintenance" {{$maintenance['maintenance_type']=="Preventive Maintenance"?'selected':''}}>
                                                    Preventive Maintenance
                                                </option>
                                                <option value="Repair" {{$maintenance['maintenance_type']=="Repair"?'selected':''}}>
                                                    Repair
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="requested_date">Requested Date<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="requested_date" value="{{$maintenance['requested_date']}}">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="estimate_cost">Charge<span style="color: red;">*</span></label>
                                            <input type="number" name="estimate_cost" class="form-control" value={{$maintenance['estimate_cost']}}>
                                        </div>

                                        <div class="form-group">
                                            <label for="service_date">Service Date<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="service_date" value="{{$maintenance['service_date']}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="remarks">Remarks<span style="color: red;">*</span></label>
                                            <textarea spellcheck="false" class="form-control" style="width:100%;"
                                            name="remarks" placeholder="{{$maintenance['remarks']}}"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="d-flex justify-content-between col-md-12">
                                <h4>Requisition Item Information</h4>
                                <a href="/maintenanceitems" class="btn btn-info mb-3"><i class="fa fa-pencil-square-o"></i>Edit/Add Item</a>
                            </div>
                            <div>
                                <table
                                    class="table text-center table-bordered nowrap">
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
                                        @foreach($maintenance_items as $maintenance_item)
                                        <tr  class="content">
                                            <td>
                                                <input type="text" class="item_type form-control" name="item_type[]" value="{{$maintenance_item->item_type}}">
                                            </td>
                                            <td>
                                                <input type="text" class="item_name form-control" name="item_name[]" value="{{$maintenance_item->item_name}}">
                                            </td>
                                            <td>
                                                <input type="number" class="unit form-control" name="unit[]" value={{$maintenance_item->unit}}>
                                            </td>
                                            <td>
                                                <input type="number" class="unit_price form-control" name="unit_price[]" value={{$maintenance_item->unit_price}}>
                                            </td>
                                            <td>
                                                <input type="text" class="total_amount form-control" name="total_amount[]" value={{$maintenance_item->total_price}} readonly>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr  class="content">
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
                                                    <button class="btn btn-success" type="submit">Update</button>
                                                </div>
                                            </td>
                                            <td>
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