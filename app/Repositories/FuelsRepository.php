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

}