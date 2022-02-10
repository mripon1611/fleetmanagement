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
        $fuel_cost = [];

        $fuel_cost['petrol_cost'] = DB::table('refuelrequisitions')->where('fueltype', 'petrol')->sum('totalprice');
        $fuel_cost['octane_cost'] = DB::table('refuelrequisitions')->where('fueltype', 'octane')->sum('totalprice');
        $fuel_cost['diesel_cost'] = DB::table('refuelrequisitions')->where('fueltype', 'diesel')->sum('totalprice');

        return $fuel_cost;
    }

    public function ministrationCost() {
        $ministration_cost = [];

        $ministration_cost['servicing_cost'] = DB::table('ministrations')->where('ministration_type', 'servicing')->sum('ministration_cost');
        $ministration_cost['tyre_change_cost'] = DB::table('ministrations')->where('ministration_type', 'tyre_change')->sum('ministration_cost');
        $ministration_cost['battery_change_cost'] = DB::table('ministrations')->where('ministration_type', 'battery_change')->sum('ministration_cost');
        $ministration_cost['normal_works_cost'] = DB::table('ministrations')->where('ministration_type', 'normal_work')->sum('ministration_cost');
        $ministration_cost['major_works_cost'] = DB::table('ministrations')->where('ministration_type', 'major_work')->sum('ministration_cost');

        return $ministration_cost;
    }
}
