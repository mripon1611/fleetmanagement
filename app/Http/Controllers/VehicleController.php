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

    public function vehicleDocuments (Request $req) {
        $documents = DB::table('vpapers')
        ->select('*')
        ->where('vehicleregno', $req->regno)
        ->get();
        // return $documents;
        return view('pages.Vehicle.vehicledocuments',['datas'=>$documents, 'regno'=>$req->regno]);
    }
    public function addNewDocuments ( Request $req ) {
        $reqdata = $req->input();
        Vpaper::create($reqdata);
        return redirect('/vehicle');
    }

    public function vehicleMinistrations( Request $req ) {
        $documents = DB::table('ministrations')
        ->select('*')
        ->where('vehicleregno', $req->regno)
        ->get();
        // return $documents;
        return view('pages.Vehicle.vehicle_ministrations',['datas'=>$documents, 'regno'=>$req->regno]);
    }

    public function addMinstartions( Request $req ) {
        $reqdata = $req->input();
        $staffname = DB::table('vehicledrivers')
                    ->select('drivername')
                    ->where('vregno', $req->vehicleregno)
                    ->where('status', 'present')
                    ->get();
        if(count($staffname)>0) {
            $reqdata['staffname'] = $staffname[0]->drivername;
        }else {
            $reqdata['staffname'] = '';
        }

        // if($req->service_cost > 0){
        //     $fileName = time().'-'.$req->servecing_receipt->getClientOriginalName();
        //     $req->servecing_receipt->move(public_path('uploads'), $fileName);
        //     $reqdata['servecing_receipt'] = $fileName;
            
        // }
        // if($req->tyre_change_cost > 0){
        //     $fileName = time().'-'.$req->tyre_change_receipt->getClientOriginalName();
        //     $req->tyre_change_receipt->move(public_path('uploads'), $fileName);
        //     $reqdata['tyre_change_receipt'] = $fileName;
        // }
        // if($req->battary_change_cost > 0){
        //     $fileName = time().'-'.$req->battary_change_receipt->getClientOriginalName();
        //     $req->battary_change_receipt->move(public_path('uploads'), $fileName);
        //     $reqdata['battary_change_receipt'] = $fileName;
        // }
        // if($req->normal_works_cost > 0){
        //     $fileName = time().'-'.$req->normal_works_receipt->getClientOriginalName();
        //     $req->normal_works_receipt->move(public_path('uploads'), $fileName);
        //     $reqdata['normal_works_receipt'] = $fileName;
        // }
        // if($req->major_works_cost > 0){
        //     $fileName = time().'-'.$req->major_works_receipt->getClientOriginalName();
        //     $req->major_works_receipt->move(public_path('uploads'), $fileName);
        //     $reqdata['major_works_receipt'] = $fileName;
        // }

        $this->data->addNewMinstartions($reqdata);

        // return $req;
        return redirect('/vehicle'); 
    }
}
