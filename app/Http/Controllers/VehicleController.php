<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return view('pages.Vehicle.vehicles',['datas'=>$datas,'freedrivers'=>$freedrivers,'assignvehicletodrivers'=>$assignvehicletodrivers,'sl'=>1]);
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

    public function addNewDocuments ( Request $req ) {
        $reqdata = $req->input();
        Vpaper::create($reqdata);
        return redirect('/vehicle');
    }

    public function vehicleDocuments (Request $req) {
        $documents = DB::table('vpapers')
        ->select('*')
        ->where('vehicleregno', $req->regno)
        ->get();
        // return $documents;
        return view('pages.Vehicle.vehicledocuments',['datas'=>$documents, 'regno'=>$req->regno]);
    }
}
