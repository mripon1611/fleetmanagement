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
            'name'=>'required',
            'regno'=>'required|unique:vehicles',
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
                    ->with('success', 'Successfully added a new vehicle in vehicle list!');;

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

    public function vehicleDocuments (Request $req) {
        $documents = DB::table('vpapers')
        ->select('*')
        ->where('vehicleregno', $req->regno)
        ->get();

        $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Vehicle.vehicledocuments',['datas'=>$documents,'vcode'=>$req->vcode,'regno'=>$req->regno,'totalNotifications'=>$totalNotifications]);
    }
    public function addNewDocuments ( Request $req ) {
        $reqdata = $req->input();
        $this->data->updateDocuments($reqdata);
        // Vpaper::create($reqdata);
        return redirect('/vehicle');
    }

    public function vehicleMinistrations( Request $req ) {
        $documents = DB::table('ministrations')
        ->select('*')
        ->where('vehicleregno', $req->regno)
        ->get();

        $totalNotifications = NotificationsController::expireDocuments();
        
        return view('pages.Vehicle.vehicle_ministrations',['datas'=>$documents, 'regno'=>$req->regno,
                    'totalNotifications'=>$totalNotifications]);
    }

    public function addMinstartions( Request $req ) {
        $reqdata = $req->input();

        $this->data->addNewMinstartions($reqdata);

        // return $req;
        return redirect('/vehicle'); 
    }
}
