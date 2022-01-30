<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vpaper;
use App\Models\Vehicledriver;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class ModelsRepository implements ModelsInterface {

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
    public function newDriver( array $data ){
        Driver::create($data);   
        return (Driver::all());
    }

    public function newVehicle( array $data ){
        Vehicle::create($data);   
        return (Vehicle::all());
    }

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

        $vcldrvr = [];
        $vcldrvr['vregno'] = $reqdata['vehicle'];
        $vcldrvr['dlicensenumber'] = $reqdata['license'];
        $vcldrvr['drivername'] = $reqdata['name'];
        $vcldrvr['assigndate'] = $reqdata['assigndate'];
        $vcldrvr['status'] = 'present';

        if(count($vdid) > 0) {
            Vehicledriver::create($vcldrvr);


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
            Vehicledriver::create($vcldrvr);

            $vehicle->toassigned = 1;
            $vehicle->save();

            $driver->isassigned = 1;
            $driver->save();

            return;
        }

    }

}