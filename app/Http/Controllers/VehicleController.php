<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Vpaper;
use App\Http\Controllers\DriverController;
use App\Repositories\VehiclesRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    //

    protected $data;
    public function __construct(VehiclesRepository $data) {
        $this->data = $data;
    }


    public function index() {
        $datas = Vehicle::all();
        $freedrivers = VehicleController::freeDriver();
        $assignvehicletodrivers = DriverController::assignVehicleToDriver();

        $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Vehicle.vehicles',['datas'=>$datas,'freedrivers'=>$freedrivers,'assignvehicletodrivers'=>$assignvehicletodrivers,
                        'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }

    public function addNewVehicle( Request $req ) {

        $req->validate([
            'vcode'=>'required|unique:vehicles',
            'name'=>'required',
            'regno'=>'required|unique:vehicles',
            'regno_bn'=>'required|unique:vehicles',
            'regdate'=>'required',
            'licensedate'=>'required',
            'seatcapacity'=>'required',
            'division'=>'required',
            'mapcolor'=>'required',
            'ownername'=>'required',
        ]);

        $data = $req->input();
        $vehicle = $this->data->newVehicle($data);
        return redirect('/vehicle')
                    ->with('success', 'Successfully added a new vehicle in vehicle list!');

    }

    public function vehicleUpdates( Request $req ) {
        $reqdata = $req->input();
        $this->data->detailUpdates($reqdata);
        return redirect('/vehicle');
    }


    static function freeDriver() {

        $freedrivers = DB::table('drivers')
        ->select('name')
        ->where('isassigned', '0')
        ->get();

        return $freedrivers;
        
    }

    public function vehicleDocuments ($vcode) {
        $documents = DB::table('vpapers')
        ->select('*')
        ->where('vcode', $vcode)
        ->get();

        $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Vehicle.vehicledocuments',['datas'=>$documents,'vcode'=>$vcode,'totalNotifications'=>$totalNotifications]);
    }
    public function addNewDocuments ( Request $req ) {
        $reqdata = $req->input();

        // $fileName = date('Y-m-d_H-i-s').'-'.$req->documents->getClientOriginalName();
        $fileName = $req->documents->getClientOriginalName();

        $pos = strrpos($fileName,'.');
        $ext = substr($fileName,$pos);
        $fileName = $reqdata['papers_type'].'_'.$reqdata['vcode'].'_'.date('Y-m-d_H-i-s').$ext;
            
        $req->documents->move(public_path('uploads'), $fileName);
        $reqdata['documents'] = $fileName;

        $this->data->updateDocuments($reqdata);
        // Vpaper::create($reqdata);
        return redirect("/vehicle-documents-{$reqdata['vcode']}")
                ->with('success', "Successfully {$reqdata['papers_type']} paper is updated!!"); 
    }

    public function vehicleMinistrations($vcode ) {
        $documents = DB::table('ministrations')
        ->select('*')
        ->where('vcode', $vcode)
        ->get();

        $totalNotifications = NotificationsController::expireDocuments();
        
        return view('pages.Vehicle.vehicle_ministrations',['datas'=>$documents,'vcode'=>$vcode,
                    'totalNotifications'=>$totalNotifications]);
    }

    public function addMinstartions( Request $req ) {
        $reqdata = $req->input();

        // $fileName = date('Y-m-d_H-i-s').'-'.$req->ministration_receipt->getClientOriginalName();
        $fileName = $req->ministration_receipt->getClientOriginalName();

        $pos = strrpos($fileName,'.');
        $ext = substr($fileName,$pos);
        $fileName = $reqdata['ministration_type'].'_'.$reqdata['vcode'].'_'.date('Y-m-d_H-i-s').$ext;
            
        $req->ministration_receipt->move(public_path('uploads'), $fileName);
        $reqdata['ministration_receipt'] = $fileName;

        $this->data->addNewMinstartions($reqdata);

        // return $req;
        return redirect("/vehicle-ministrations-{$reqdata['vcode']}")
                ->with('success', "Successfully {$reqdata['ministration_type']} details is updated!!"); 
    }

    public function vehicleOverVeiw( $vcode ) {

        $find_id = DB::table('vehicles')->select('id')->where('vcode',$vcode)->get();
        $vehicle = Vehicle::find($find_id[0]->id);

        $vehicle_driver = DB::table('vehicledrivers')->select('drivername')
                                ->where('vcode',$vcode)
                                ->where('status','present')
                                ->get();
        if(count($vehicle_driver)>0){
            $vehicle['driver'] = $vehicle_driver[0]->drivername;
        } else {
            $vehicle['driver'] = "NULL";
        }

        $vehicle_papers =DB::table('vpapers')->select('*')
                            ->where('vcode',$vehicle['vcode'])
                            ->where('status','present')
                            ->get();

        $refuel =DB::table('refuelrequisitions')->select('*')
                            ->where('vcode',$vehicle['vcode'])
                            ->where('status','present')
                            ->get();
        $refuel_arr = [];
        if(count($refuel)>0){
            $refuel_arr['pvsodo'] = $refuel[0]->pvsodo;
            $refuel_arr['crodo'] = $refuel[0]->crodo;
            $refuel_arr['ttlqty'] = $refuel[0]->ttlqty;
            $refuel_arr['fueltype'] = $refuel[0]->fueltype;
            $refuel_arr['costplitter'] = $refuel[0]->costplitter;
            $refuel_arr['totalprice'] = $refuel[0]->totalprice;
            $refuel_arr['created_date'] = $refuel[0]->created_date;
            $refuel_arr['staffname'] = $refuel[0]->staffname;
        } else {
            $refuel_arr['pvsodo'] = "NULL";
            $refuel_arr['crodo'] = "NULL";
            $refuel_arr['ttlqty'] = "NULL";
            $refuel_arr['fueltype'] = "NULL";
            $refuel_arr['costplitter'] = "NULL";
            $refuel_arr['totalprice'] = "NULL";
            $refuel_arr['created_date'] = "NULL";
            $refuel_arr['staffname'] = "NULL";
        }

        $totalNotifications = NotificationsController::expireDocuments();
        
        return view('pages.Vehicle.vehicle_overview',['vehicle'=>$vehicle,'vehicle_papers'=>$vehicle_papers,
                    'refuel'=>$refuel_arr,'totalNotifications'=>$totalNotifications]);
    }
}
