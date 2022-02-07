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
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationsController extends Controller
{
    //
    public function expireDocuments() {
        $totalNotifications = 0;
        $totalNotifications += NotificationsController::tTokenExpire();
        $totalNotifications += NotificationsController::fitnessExpire();
        $totalNotifications += NotificationsController::rPermitExpire();
        return $totalNotifications;
        
    }

    public function tTokenExpire() {
        $mytime = Carbon::now();
        $count = 0;
        $ttokenexpiredates = DB::table('vpapers')
                            ->select('ttokenexpiredate')
                            ->where('ttokenexpiredate', ">", $mytime)
                            ->get();
        if(count($ttokenexpiredates)>0) {
            foreach( $ttokenexpiredates as $ttokenexpiredate) {
                $date = $ttokenexpiredate->ttokenexpiredate;
                $dateDis =  $mytime->diffInDays($date);
                if($dateDis <= 15) {
                    $count += 1;
                }
            }
        }

        return $count;
    }

    public function fitnessExpire() {
        $mytime = Carbon::now();
        $count = 0;
        $fitnessexpiredates = DB::table('vpapers')
                            ->select('fitnessexpiredate')
                            ->where('fitnessexpiredate', ">", $mytime)
                            ->get();
        if(count($fitnessexpiredates)>0) {
            foreach( $fitnessexpiredates as $fitnessexpiredate) {
                $date = $fitnessexpiredate->fitnessexpiredate;
                $dateDis =  $mytime->diffInDays($date);
                if($dateDis <= 15) {
                    $count += 1;
                }
            }
        }

        return $count;
    }
    public function rPermitExpire() {
        $mytime = Carbon::now();
        $count = 0;
        $rpermitexpiredates = DB::table('vpapers')
                            ->select('rpermitexpiredate')
                            ->where('rpermitexpiredate', ">", $mytime)
                            ->get();
        if(count($rpermitexpiredates)>0) {
            foreach( $rpermitexpiredates as $rpermitexpiredate) {
                $date = $rpermitexpiredate->rpermitexpiredate;
                $dateDis =  $mytime->diffInDays($date);
                if($dateDis <= 15) {
                    $count += 1;
                }
            }
        }

        return $count;
    }
}
