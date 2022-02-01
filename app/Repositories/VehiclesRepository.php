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



class VehiclesRepository implements VehiclesInterface {

    public function newVehicle( array $data ){
        Vehicle::create($data);   
        return (Vehicle::all());
    }

    public function detailUpdates( array $reqdata ) {
        $vehicle = Vehicle::find($reqdata['id']);

        // update vehicle
        $vehicle->ownername = $reqdata['ownername'];
        $vehicle->seatcapacity = $reqdata['seatcapacity'];
        $vehicle->regdate = $reqdata['regdate'];
        $vehicle->licensedate = $reqdata['licensedate'];
        $vehicle->division = $reqdata['division'];
        $vehicle->mapcolor = $reqdata['mapcolor'];
        $vehicle->save();

        if($reqdata['driver']!='') {
            $driverid = (Driver::select('id'))
                ->where('name', $reqdata['driver'])
                ->get();

            $driver = Driver::find($driverid[0]->id);

            $vcldrvr = [];
            $vcldrvr['vregno'] = $reqdata['regno'];
            $vcldrvr['dlicensenumber'] = $driver->license;
            $vcldrvr['drivername'] = $driver->name;
            $vcldrvr['assigndate'] = $reqdata['assigndate'];
            $vcldrvr['status'] = 'present';

            $vdid = Vehicledriver::select('id')
                ->where('vregno', $reqdata['regno'])
                ->where('status','present')
                ->get();

            if(count($vdid) > 0) {
                $vehicledriver = Vehicledriver::find($vdid[0]->id);

                $vehicledriver->releasedate = $reqdata['assigndate'];
                $vehicledriver->status = "past";
                $vehicledriver->save();

                $adriverid = (Driver::select('id'))
                    ->where('license', $vehicledriver->dlicensenumber)
                    ->get();

                $adriver = Driver::find($adriverid[0]->id);
                $adriver->isassigned = 0;
                $adriver->save();

            } 
                
            Vehicledriver::create($vcldrvr);
            $vehicle->toassigned = 1;
            $vehicle->save();

            $driver->isassigned = 1;
            $driver->save();

        }

        // if(count($vdid) > 0) {

        //     $avid = (Vehicle::select('id'))
        //         ->where('regno', $vehicledriver->vregno)
        //         ->get();
        //     $avehicle = Vehicle::find($avid[0]->id);
        //     $avehicle->toassigned = 0;
        //     $avehicle->save();

        //     $vehicle->toassigned = 1;
        //     $vehicle->save();

        //     $driver->isassigned = 1;
        //     $driver->save();

        //     return;

        // } else{
        //     Vehicledriver::create($vcldrvr);

        //     $vehicle->toassigned = 1;
        //     $vehicle->save();

        //     $driver->isassigned = 1;
        //     $driver->save();

        //     return;
        // }
        return;
    }

}