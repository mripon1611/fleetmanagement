<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Queue;
use App\Models\Weeklycheckreport;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class WeeklycheckreportController extends Controller
{
    //

    public function generateReport() {
        $vehicles = Vehicle::all();

        $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.WeeklyReport.createWeeklyReport',['vehicles'=>$vehicles,'totalNotifications'=>$totalNotifications]);
    }

    public function storeReport( Request $req ) {
        $reqdata = $req->input();
        
        $staffname = DB::table('vehicledrivers')
        ->select('drivername')
        ->where('vregno', $reqdata['vregno'])
        ->where('status','present')
        ->get();

        if(count($staffname)>0) {
            $reqdata['staffname'] = $staffname[0]->drivername;
        }else {
            $reqdata['staffname'] = "";
        }

        // return $reqdata;

        Weeklycheckreport::create($reqdata);
        return redirect('create-weekly-report');
    }

    public function weeklyCheckReport() {
        $reports = DB::table('weeklycheckreports')
                    ->select('*')
                    ->orderBy('date', 'DESC')
                    ->get();
        $date;
        if(count($reports)>0){
            $date = $reports[0]->date;
        }else {
            $date = "0000-00-00";
        }

        

        $totalNotifications = NotificationsController::expireDocuments();

        // return $reports;
        return view('pages.WeeklyReport.weekly_check_report',['datas'=>$reports,'date'=>$date,'totalNotifications'=>$totalNotifications]);
    }

    public function table() {
        $reports = DB::table('weeklycheckreports')
                    ->select('*')
                    ->orderBy('date', 'DESC')
                    ->get();
        $date;
        if(count($reports)>0){
            $date = $reports[0]->date;
        }else {
            $date = "0000-00-00";
        }

        

        $totalNotifications = NotificationsController::expireDocuments();

        // return $reports;
        return view('table',['datas'=>$reports,'date'=>$date,'totalNotifications'=>$totalNotifications]);
    }
}
