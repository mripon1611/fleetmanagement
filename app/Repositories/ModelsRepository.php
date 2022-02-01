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

    public function updatesRefuel( array $reqdata ){
        $vid = (Refuelrequisition::select('id'))
                ->where('vregno', $reqdata['vregno'])
                ->get();

        $vehicle = Refuelrequisition::find($vid[0]->id);

        // store $vehicle data as history
        $hvehicle = new Historyofrefuelreq;
        $hvehicle->vregno = $vehicle->vregno;
        $hvehicle->staffname = $vehicle->staffname;
        $hvehicle->pvsodo = $vehicle->pvsodo;
        $hvehicle->crodo = $vehicle->crodo;
        $hvehicle->ttlqty = $vehicle->ttlqty;
        $hvehicle->fueltype = $vehicle->fueltype;
        $hvehicle->costplitter = $vehicle->costplitter;
        $hvehicle->totalprice = $vehicle->totalprice;
        $hvehicle->file = $vehicle->file;
        $hvehicle->created_date = $vehicle->created_date;
        
                // store update data
        $reqdata['totalprice'] = ($reqdata['ttlqty'] * $reqdata['costplitter']);
        $vehicle->vregno = $reqdata['vregno'];
        $vehicle->staffname = $reqdata['staffname'];
        $vehicle->pvsodo = $reqdata['pvsodo'];
        $vehicle->crodo = $reqdata['crodo'];
        $vehicle->ttlqty = $reqdata['ttlqty'];
        $vehicle->fueltype = $reqdata['fueltype'];
        $vehicle->costplitter = $reqdata['costplitter'];
        $vehicle->totalprice = $reqdata['totalprice'];
        $vehicle->file = $reqdata['file'];
        $vehicle->created_date = $reqdata['created_date'];

        // save data
        $hvehicle->save();
        $vehicle->save();

        return;

    }

}