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



class FuelsRepository implements FuelsInterface {
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