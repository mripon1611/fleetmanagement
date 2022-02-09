<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Repositories\DriverRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    //
    protected $data;
    public function __construct(DriverRepository $data) {
        $this->data = $data;
    }

    public function index() {
        $datas = Driver::all();
        $freevehicles = DriverController::freeVehicle();
        $assignvehicletodrivers = DriverController::assignVehicleToDriver();

        // $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Driver.driverlist',['datas'=>$datas,'freevehicles'=>$freevehicles,'assignvehicletodrivers'=>$assignvehicletodrivers,
                        'sl'=>1]);
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
        return redirect('/driverlist')
                    ->with('success', 'Successfully added a new driver in driver list!');

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

    public function drivingHistory(Request $req) {
        $drivinglists = DB::table('vehicledrivers')
        ->select('*')
        ->where('dlicensenumber', $req->license)
        ->get();

        // $totalNotifications = NotificationsController::expireDocuments();

        return view('pages.Driver.drivinghistory',['datas'=>$drivinglists]);

    }
}
