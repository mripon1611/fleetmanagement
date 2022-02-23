<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NotificationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\Vehicledriver;
use App\Models\Vpaper;
use Illuminate\Support\Facades\DB;

class MinistrationController extends Controller
{
    //
    public function index() {

        $datas = DB::table('services')->distinct()->get(['vcode','vehicleregno','staffname']);

        $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Ministration.ministrations',['datas'=>$datas,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }


    public function vehicleOverVeiw( $vcode ) {

        $find_id = DB::table('vehicles')->select('id')->where('vcode',$vcode)->first();
        $vehicle = Vehicle::find($find_id->id);

        $vehicle_driver = DB::table('vehicledrivers')->select('drivername')
                                ->where('vcode',$vcode)
                                ->where('status','present')
                                ->first();
        if($vehicle_driver){
            $vehicle['driver'] = $vehicle_driver->drivername;
        } else {
            $vehicle['driver'] = "NULL";
        }


        $totalNotifications = NotificationsController::expireDocuments();

        $ministration_codes = DB::table('services')->distinct()->where('vcode',$vcode)->get(['ministration_code']);
        $all_ministrations = DB::table('services')->select('*')->where('vcode',$vcode)->get();
        
        return view('pages.Ministration.ministration_overview',['vehicle'=>$vehicle,'totalNotifications'=>$totalNotifications,'ministration_codes'=>$ministration_codes,
                'all_ministrations'=>$all_ministrations]);
    }

    public function addNewService( Request $req) {
        $reqdata = $req->input();
        $vcode_staff = DB::table('services')->select('*')->where('ministration_code', $req->ministration_code)->first();

        $reqdata['vcode'] = $vcode_staff->vcode;
        $reqdata['vehicleregno']= $vcode_staff->vehicleregno;
        $reqdata['staffname'] = $vcode_staff->staffname;
        $reqdata['status'] = "requested";
        
        Service::create($reqdata);

        return redirect("/ministration-overview-{$reqdata['vcode']}");
    }

    public function deleteService ( $id ) {
        $service = Service::find($id);

        DB::table('services')->where('id', $id)->delete();

        return redirect("/ministration-overview-{$service['vcode']}");
    }
}
