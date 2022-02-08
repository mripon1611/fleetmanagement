<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\CostController;
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

class HomeController extends Controller
{
    //

    public function index() {
        $d_last_updates = DB::table('drivers')
                    ->select('updated_at')
                    ->orderBy('updated_at', 'DESC')
                    ->get();

        $v_last_updates = DB::table('vehicles')
                    ->select('updated_at')
                    ->orderBy('updated_at', 'DESC')
                    ->get();
        $d_counts = Driver::all()->count();
        $v_counts = Vehicle::all()->count();

        $totalNotifications = NotificationsController::expireDocuments();

        $fuel_cost = CostController::fuelCost();
        $ministration_cost = CostController::ministrationCost();

        return view('pages.Home.index',['v_last_updates'=>$v_last_updates[0]->updated_at,
                                    'd_last_updates'=>$d_last_updates[0]->updated_at,
                                    'v_counts'=>$v_counts,'d_counts'=>$d_counts,'notification_count'=>$totalNotifications,
                                    'fuel_cost'=>$fuel_cost,'ministration_cost'=>$ministration_cost]);
    }

    public function calculateDate() {

        $date1 = "2022-02-11";
        // $mytime = Carbon::now()->format('Y-m-d');
        $mytime = Carbon::now();

        // $mytime1 = Carbon::now();
        // $mytime1 = $mytime->addDays(12);
        // $mytime1 = $mytime->subDays(5);
        // $mytime1 = $date1->subDays(10);
        // $days = $mytime1->diffInDays($mytime);
        // echo $days;
        // $mytime = $mytime->format('Y-m-d');

        // $c = DB::table('drivers')
        //     ->select('join_date')
        //     ->whereBetween('join_date',[
        //         $date1,
        //         $mytime1,
        // ])->get();
        // echo $mytime1;
        // $test = $c[0]->join_date;
        // $days = $mytime->diffInDays($date1);
        // echo $days;
        // die();

        $c = 0;
        $ttokenexpiredates = DB::table('vpapers')
                            ->select('ttokenexpiredate')
                            ->where('ttokenexpiredate', ">", $mytime)
                            ->get();
        if(count($ttokenexpiredates)>0) {
            foreach( $ttokenexpiredates as $ttokenexpiredate) {
                $date = $ttokenexpiredate->ttokenexpiredate;
                $dateDis =  $mytime->diffInDays($date);
                if($dateDis <= 15) {
                    $c += 1;
                }
            }
        }

        echo $c;
        die();
    }

    public function costCalculation() {
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

        // $servicing_cost = DB::table('ministrations')->sum('servicing_cost');
        // $tyre_change_cost = DB::table('ministrations')->sum('tyre_change_cost');
        // $battery_change_cost = DB::table('ministrations')->sum('battery_change_cost');
        // $normal_works_cost = DB::table('ministrations')->sum('normal_works_cost');
        // $major_works_cost = DB::table('ministrations')->sum('major_works_cost');

        // $ministration_cost = [];
        // $ministration_cost['servicing_cost'] =$servicing_cost;
        // $ministration_cost['tyre_change_cost'] =$tyre_change_cost;
        // $ministration_cost['battery_change_cost'] =$battery_change_cost;
        // $ministration_cost['normal_works_cost'] =$normal_works_cost;
        // $ministration_cost['major_works_cost'] =$major_works_cost;


        // return $ministration_cost;
    }
}
