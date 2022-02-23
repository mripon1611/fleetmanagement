<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NotificationsController;
use App\Models\Maintenance;
use App\Models\Driver;
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

    public function addMaintenance() {
        $totalNotifications = NotificationsController::expireDocuments();

        $drivers = DB::table('drivers')->select('name')->get();
        $vehicles = DB::table('vehicles')->select('regno')->get();

        return view('pages.Maintenance.add_maintenance',['vehicles'=>$vehicles,'drivers'=>$drivers,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }
    public function editMaintenance( $id ) {
        $totalNotifications = NotificationsController::expireDocuments();

        $maintenance = Maintenance::find($id);

        return view('pages.Maintenance.edit_maintenance',['maintenance'=>$maintenance,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }

    public function saveMaintenance( Request $req) {
        $reqdata = $req->input();
        $vcode = DB::table('vehicles')->select('vcode')->where('regno',$reqdata['vregno'])->first();
        $reqdata['vcode']= $vcode->vcode;
        $reqdata['status']="Denied";

        Maintenance::create($reqdata);

        return redirect('/maintenanceview');
    }
}
