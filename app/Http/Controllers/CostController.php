<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Refuelrequisition;
use App\Models\Historyofrefuelreq;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CostController extends Controller
{
    //
    public function fuelCost() {
        $petrol_cost = DB::table('refuelrequisitions')->where('fueltype', 'petrol')->sum('totalprice');
        $petrol_cost += DB::table('historyofrefuelreqs')->where('fueltype', 'petrol')->sum('totalprice');

        $octane_cost = DB::table('refuelrequisitions')->where('fueltype', 'octane')->sum('totalprice');
        $octane_cost += DB::table('historyofrefuelreqs')->where('fueltype', 'octane')->sum('totalprice');

        $diesel_cost = DB::table('refuelrequisitions')->where('fueltype', 'diesel')->sum('totalprice');
        $diesel_cost += DB::table('historyofrefuelreqs')->where('fueltype', 'diesel')->sum('totalprice');

        $fuel_cost = [];
        $fuel_cost['petrol_cost'] =$petrol_cost;
        $fuel_cost['octane_cost'] =$octane_cost;
        $fuel_cost['diesel_cost'] =$diesel_cost;

        return $fuel_cost;
    }

    public function ministrationCost() {
        $servicing_cost = DB::table('ministrations')->sum('servicing_cost');
        $tyre_change_cost = DB::table('ministrations')->sum('tyre_change_cost');
        $battery_change_cost = DB::table('ministrations')->sum('battery_change_cost');
        $normal_works_cost = DB::table('ministrations')->sum('normal_works_cost');
        $major_works_cost = DB::table('ministrations')->sum('major_works_cost');

        $ministration_cost = [];
        $ministration_cost['servicing_cost'] =$servicing_cost;
        $ministration_cost['tyre_change_cost'] =$tyre_change_cost;
        $ministration_cost['battery_change_cost'] =$battery_change_cost;
        $ministration_cost['normal_works_cost'] =$normal_works_cost;
        $ministration_cost['major_works_cost'] =$major_works_cost;


        return $ministration_cost;
    }
}
