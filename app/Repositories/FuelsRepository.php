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
                ->where('status', 'present')
                ->get();

        $vehicle = Refuelrequisition::find($vid[0]->id);

        
            // store update data
        $vehicle->status = 'past';
        $vehicle->save();

        $reqdata['totalprice'] = ($reqdata['ttlqty'] * $reqdata['costplitter']);
        Refuelrequisition::create($reqdata);

        return;

    }
    public function newRefuelreq( array $reqdata ){
        $vcode = DB::table('vehicles')->select('vcode')
                    ->where('regno', $reqdata['vregno'])
                    ->get();

        $reqdata['vcode'] = $vcode[0]->vcode;
        $reqdata['totalprice'] = ($reqdata['ttlqty'] * $reqdata['costplitter']);
        Refuelrequisition::create($reqdata);
    }

    public function editRefuel( array $reqdata ) {
        $refuel = Refuelrequisition::find($reqdata['id']);

        $refuel['crodo'] = $reqdata['crodo'];
        $refuel['fueltype'] = $reqdata['fueltype'];
        $refuel['ttlqty'] = $reqdata['ttlqty'];
        $refuel['costplitter'] = $reqdata['costplitter'];
        $refuel['totalprice'] = ($reqdata['ttlqty'] * $reqdata['costplitter']);
        $refuel['file'] = $reqdata['file'];
        $refuel['created_date'] = $reqdata['created_date'];
        $refuel->save();
    }

}