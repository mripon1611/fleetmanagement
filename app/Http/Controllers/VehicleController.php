<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vehicle;
use App\Repositories\ModelsRepository;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    //

    protected $data;
    public function __construct(ModelsRepository $data) {
        $this->data = $data;
    }


    public function vehicleList() {
        $datas = Vehicle::all();
        return view('pages.vehicles',['datas'=>$datas]);
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
}
