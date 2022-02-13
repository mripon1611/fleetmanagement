<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vpaper;
use App\Models\Vehicledriver;
use App\Models\Refuelrequisition;
use App\Models\Historyofrefuelreq;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DriverRepository implements DriverInterface {
    // New driver input validation
    public function newDriverValidation( array $data ) {

        $validator = Validator::make($data, [
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

        return $validator;

    }

    // Store new driver data in database
    public function newDriver( array $data ){
        Driver::create($data);   
        return (Driver::all());
    }

    // Updates driver dails 
    public function editDriverDetails( array $reqdata ) {
        $driver = Driver::find($reqdata['id']);

        $vdid = Vehicledriver::select('id')
                ->where('dlicensenumber', $reqdata['license'])
                ->where('status','present')
                ->get();

        $vid = (Vehicle::select('id'))
                ->where('regno', $reqdata['vehicle'])
                ->get();

        $vehicle = Vehicle::find($vid[0]->id);

        $vehicle_driver = [];
        $vehicle_driver['vcode'] = $vehicle->vcode;
        $vehicle_driver['vregno'] = $reqdata['vehicle'];
        $vehicle_driver['dlicensenumber'] = $reqdata['license'];
        $vehicle_driver['drivername'] = $reqdata['name'];
        $vehicle_driver['assigndate'] = $reqdata['assigndate'];
        $vehicle_driver['status'] = 'present';


        if(count($vdid) > 0) {
            Vehicledriver::create($vehicle_driver);


            $vehicledriver = Vehicledriver::find($vdid[0]->id);
            
            $vehicledriver->releasedate = $reqdata['assigndate'];
            $vehicledriver->status = "past";
            $vehicledriver->save();

            $avid = (Vehicle::select('id'))
                ->where('regno', $vehicledriver->vregno)
                ->get();
            $avehicle = Vehicle::find($avid[0]->id);
            $avehicle->toassigned = 0;
            $avehicle->save();

            $vehicle->toassigned = 1;
            $vehicle->save();

            $driver->isassigned = 1;
            $driver->save();

            return;

        } else{
            Vehicledriver::create($vehicle_driver);

            $vehicle->toassigned = 1;
            $vehicle->save();

            $driver->isassigned = 1;
            $driver->save();

            return;
        }

    }

    public function releasingDriver( array $reqdata ) {
        $driver = Driver::find($reqdata['id']);

        $driver['isassigned'] = 0;
        $driver->save();

        $vehicle_drivers = DB::table('vehicledrivers')
                            ->select('*')
                            ->where('dlicensenumber',$driver->license)
                            ->where('status', 'present')
                            ->get();
        $vehicle_driver = Vehicledriver::find($vehicle_drivers[0]->id);
        $release_date = Carbon::now()->format('Y-m-d');
        $vehicle_driver->status = 'past';
        $vehicle_driver->releasedate = $release_date;
        $vehicle_driver->save();

        $vehicles = DB::table('vehicles')
                        ->select('*')
                        ->where('vcode', $vehicle_driver->vcode)
                        ->get();
        $vehicle = Vehicle::find($vehicles[0]->id);
        $vehicle->toassigned = 0;
        $vehicle->save();
    }

}