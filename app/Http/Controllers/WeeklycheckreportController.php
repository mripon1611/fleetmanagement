<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $vehicles = Queue::all();
        return view('pages.WeeklyReport.createWeeklyReport',['vehicles'=>$vehicles]);
    }

    public function selectDate( Request $req ) {
        $vehicles = DB::table('vehicles')
        ->select('regno')
        ->get();
        foreach($vehicles as $vehicle) {
            //inser vehicle in queue
            $qv = new Queue;
            $qv->date = $req->date;
            $qv->vregno = $vehicle->regno;
            $qv->save();
        }

        return redirect('create-weekly-report');
    }

    public function storeReport( Request $req ) {
        $reqdata = $req->input();
        
        $date = DB::table('queues')
        ->select('date')
        ->where('vregno', $reqdata['vregno'])
        ->get();
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
        $reqdata['date'] = $date[0]->date;

        Weeklycheckreport::create($reqdata);

        DB::table('queues')->where('vregno', $req->vregno)->delete();
        return redirect('create-weekly-report');
    }
}
