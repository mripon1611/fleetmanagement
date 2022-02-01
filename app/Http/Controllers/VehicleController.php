<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Vpaper;
use App\Repositories\ModelsRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    //

    protected $data;
    public function __construct(ModelsRepository $data) {
        $this->data = $data;
    }


    public function vehicleList() {
        $datas = Vehicle::all();
        return view('pages.Vehicle.vehicles',['datas'=>$datas]);
    }

    public function addNewVehicle( Request $req ) {

        $req->validate([
            'name'=>'required',
            'regno'=>'required|unique:vehicles',
            'regdate'=>'required|unique:vehicles',
            'licensedate'=>'required|unique:vehicles',
            'seatcapacity'=>'required',
            'division'=>'required',
            'mapcolor'=>'required',
            'ownername'=>'required',
        ]);

        $data = $req->input();
        $vehicle = $this->data->newVehicle($data);
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
