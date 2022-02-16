<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vpaper;
use App\Models\Ministration;
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

            $vehicle_driver = [];
            $vehicle_driver['vcode'] = $reqdata['vcode'];
            $vehicle_driver['vregno'] = $reqdata['regno'];
            $vehicle_driver['dlicensenumber'] = $driver->license;
            $vehicle_driver['drivername'] = $driver->name;
            $vehicle_driver['assigndate'] = $reqdata['assigndate'];
            $vehicle_driver['status'] = 'present';

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
                
            Vehicledriver::create($vehicle_driver);
            $vehicle->toassigned = 1;
            $vehicle->save();

            $driver->isassigned = 1;
            $driver->save();

        }
        return;
    }

    public function addNewMinstartions( array $reqdata ) {
        
        $staffname = DB::table('vehicledrivers')
                    ->select('drivername')
                    ->where('vcode', $reqdata['vcode'])
                    ->where('status', 'present')
                    ->get();

        $vregno = DB::table('vehicles')
                    ->select('regno')
                    ->where('vcode', $reqdata['vcode'])
                    ->get();
        $reqdata['vehicleregno'] = $vregno[0]->regno;

        if(count($staffname)>0) {
            $reqdata['staffname'] = $staffname[0]->drivername;
        }else {
            $reqdata['staffname'] = '';
        }

        Ministration::create($reqdata);
    }

    public function updateDocuments( array $reqdata ) {
        $past_papers = DB::table('vpapers')->select('id')
                            ->where('vcode', $reqdata['vcode'])
                            ->where('papers_type', $reqdata['papers_type'])
                            ->where('status', 'present')
                            ->get();

        $vregno = DB::table('vehicles')
                    ->select('regno')
                    ->where('vcode', $reqdata['vcode'])
                    ->get();
        $reqdata['vehicleregno'] = $vregno[0]->regno;

        if(count($past_papers)>0) {
            $pPaper = Vpaper::find($past_papers[0]->id);
            $pPaper->status = 'expired';
            $pPaper->save();

            Vpaper::create($reqdata);
        }else{
            Vpaper::create($reqdata);
        }
    }

}