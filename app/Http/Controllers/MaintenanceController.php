<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NotificationsController;
use App\Models\Maintenance;
use App\Models\Maintenancerequisition;
use App\Models\Maintenanceitemtype;
use App\Models\Maintenanceitemname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    //

    public function viewMaintenance() {

        $totalNotifications = NotificationsController::expireDocuments();
        $maintenances = Maintenance::all();

        return view('pages.Maintenance.maintenanceview',['maintenances'=>$maintenances,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }

    public function maintenanceItems() {
        $totalNotifications = NotificationsController::expireDocuments();
        $maintenances = Maintenanceitemtype::all();

        return view('pages.Maintenance.maintenance_types',['maintenances'=>$maintenances,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }

    public function addMaintenance() {
        $totalNotifications = NotificationsController::expireDocuments();

        $drivers = DB::table('drivers')->select('name')->get();
        $vehicles = DB::table('vehicles')->select('regno')->get();
        $maintenance_types = Maintenanceitemtype::all();

        return view('pages.Maintenance.add_maintenance',['vehicles'=>$vehicles,'drivers'=>$drivers,'totalNotifications'=>$totalNotifications,
                'maintenance_types'=>$maintenance_types]);
    }

    public function addMaintenanceItem() {
        $totalNotifications = NotificationsController::expireDocuments();

        $drivers = DB::table('drivers')->select('name')->get();
        $vehicles = DB::table('vehicles')->select('regno')->get();

        return view('pages.Maintenance.add_maintemance_item',['vehicles'=>$vehicles,'drivers'=>$drivers,'totalNotifications'=>$totalNotifications]);
    }

    public function editMaintenance( $id ) {
        $totalNotifications = NotificationsController::expireDocuments();

        $maintenance = Maintenance::find($id);

        $maintenance_items = Maintenancerequisition::select("*")->where("maintenance_id",$id)->get();

        return view('pages.Maintenance.edit_maintenance',['maintenance'=>$maintenance,'totalNotifications'=>$totalNotifications,
                    'maintenance_items'=>$maintenance_items]);
    }

    public function editMaintenanceItem( $id ) {
        $totalNotifications = NotificationsController::expireDocuments();
        $maintenance_type = Maintenanceitemtype::where('id', $id)->first();

        $maintenance_items = Maintenanceitemname::select("item_name")->where('maintenanceitemtype_id',$id)->get();
        // return $maintenance_items;

        return view('pages.Maintenance.edit_maintenance_item',['maintenance_type'=>$maintenance_type,'maintenance_items'=>$maintenance_items,
                    'totalNotifications'=>$totalNotifications]);
    }

    public function saveMaintenance( Request $req) {

        $reqdata = $req->input();
        $vcode = DB::table('vehicles')->select('vcode')->where('regno',$reqdata['vregno'])->first();
        $reqdata['vcode']= $vcode->vcode;
        $reqdata['status']="Denied";

        $maintenance = Maintenance::create($reqdata);

        $itemLength = count($req->unit);

        for($i = 0; $i < $itemLength; $i++) {
            $item = [];
            $item['maintenance_id'] = $maintenance->id;
            $item['item_type'] = $req->item_type[$i];
            $item['item_name'] = $req->item_name[$i];
            $item['unit'] = $req->unit[$i];
            $item['unit_price'] = $req->unit_price[$i];
            $item['total_price'] = $req->total_amount[$i];

            Maintenancerequisition::create($item);
        }

        return redirect('/maintenanceview');
     }

     public function saveMaintenanceItem( Request $req ) {
        $reqdata = $req->input();

        $maintenanceType = Maintenanceitemtype::create($reqdata);

        $itemLength = count($req->item_name);

        for($i = 0; $i < $itemLength; $i++) {
            $information = [];
            $information['maintenanceitemtype_id'] = $maintenanceType->id;
            $information['maintenanceitemtype'] = $reqdata['item_type'];
            $information['item_name'] = $req->item_name[$i];

            Maintenanceitemname::create($information);
        }

        return redirect('/maintenanceitems');
     }
}
