<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Repositories\ModelsRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    //


    protected $data;
    public function __construct(ModelsRepository $data) {
        $this->data = $data;
    }

    public function driverList() {
        $datas = Driver::all();
        return view('pages.driverlist',['datas'=>$datas]);
    }

    public function addNewDriver( Request $req ) {

        // $validator = $this->data->newDriverValidation($req->all());
        $req->validate([
            'name'=>'required',
            'name_bn'=>'required',
            'nid'=>'required|unique:drivers',
            'blood'=>'required',
            'license'=>'required|unique:drivers',
            'license_ex'=>'required',
            'photograph' => 'required|mimes:png,jpg,pdf,xlx,csv|max:2048',
            'join_date'=>'required',
            'salary'=>'required',
            'contact'=>'required|unique:drivers|max:13|min:11',
            'emergency'=>'required|unique:drivers|max:13|min:11',
        ]);

        $data = $req->input();

        $fileName = time().'-'.$req->photograph->getClientOriginalName();
            
        $req->photograph->move(public_path('uploads'), $fileName);
        $data['photograph'] = $fileName;

        $ddriver = $this->data->newDriver($data);
        return redirect('/driverlist');

        // if ($validator->fails()) {
        //     return back();
        //     echo "fails";
        //     die();
        // } else {
        //     $data = $req->input();

        //     $fileName = time().'-'.$req->photograph->getClientOriginalName();
            
        //     $req->photograph->move(public_path('uploads'), $fileName);
        //     $data['photograph'] = $fileName;

        //     $ddriver = $this->data->newDriver($data);
        //     return redirect('/driverlist');
        //     echo "success";
        //     die();
        // }
    }
    static function freeVehicle() {

        $freevehicles = DB::table('vehicles')
        ->select('regno')
        ->where('toassigned', '0')
        ->get();

        return $freevehicles;
        
    }
    static function assignVehicleToDriver() {
        $assignvehicletodrivers = DB::table('vehicledrivers')->select('*')->where('status', 'present')->get();

        return $assignvehicletodrivers;   

        
    }

    public function driverUpdate ( Request $req ) {
        $reqdata = $req->input();

        $this->data->editDriverDetails($reqdata);

        return redirect('/driverlist');

    }

    public function unique () {
        $datas = DB::table('vehicledrivers')
            ->select('vregno')
            ->distinct()
            ->get();

        return $datas;
    }

    public function drivingHistory(Request $req) {
        $drivinglists = DB::table('vehicledrivers')
        ->select('*')
        ->where('dlicensenumber', $req->license)
        ->get();

        return view('pages.drivinghistory',['datas'=>$drivinglists]);

    }
}
