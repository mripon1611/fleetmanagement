<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Refuelrequisition;
use App\Models\Historyofrefuelreq;
use App\Repositories\FuelsRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RefuelrequisitionController extends Controller
{
    //
    protected $data;
    public function __construct(FuelsRepository $data) {
        $this->data = $data;
    }

    public function index() {
        $datas = Refuelrequisition::all();
        $vehicleslists = RefuelrequisitionController::vehiclesList();
        $addedvehicles = RefuelrequisitionController::addedVehicles();
        return view('pages.Fuel.refuel-requisition',['datas'=>$datas,'vehicleslists'=>$vehicleslists,'addedvehicles'=>$addedvehicles,'sl'=>1,'t'=>0]);
        // return $datas;
    }

    public function addnewRefuelreq( Request $req ) {
        $datas = $req->input();
        $datas['totalprice'] = ($datas['ttlqty'] * $datas['costplitter']);
        // return $datas['totalprice'];
        Refuelrequisition::create($datas);
        return redirect('/refuel-requisition');

    }

    public function updatesRefuelreq( Request $req ) {
        $reqdata = $req->input();

        $fileName = time().'-'.$req->file->getClientOriginalName();
            
        $req->file->move(public_path('uploads'), $fileName);
        $reqdata['file'] = $fileName;

        $this->data->updatesRefuel($reqdata);

        // return $reqdata['file'];
                
        return redirect('/refuel-requisition');

    }

    public function refuelreqHistory( Request $req ) {
        $refuelreqlists = DB::table('historyofrefuelreqs')
        ->select('*')
        ->where('vregno', $req->vregno)
        ->get();

        return view('pages.Fuel.refuelreqhistory',['datas'=>$refuelreqlists,'vregno'=>$req->vregno,'sl'=>1]);
        // return $drivinglists;
    }

    static function vehiclesList() {
        $vehicleslist = DB::table('vehicledrivers')
                            ->select('vregno', 'drivername')
                            ->where('status', 'present')
                            ->get();
        return $vehicleslist;
    }
    static function addedVehicles() {
        $addedvehicles = DB::table('refuelrequisitions')
                            ->select('vregno')
                            ->get();
        return $addedvehicles;
    }
}
