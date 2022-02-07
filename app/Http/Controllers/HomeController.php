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

        // $mytime = Carbon::now();
        // $c = 0;
        // $ttokenexpiredates = DB::table('vpapers')
        //                     ->select('ttokenexpiredate')
        //                     ->where('ttokenexpiredate', ">", $mytime)
        //                     ->get();
        // if(count($ttokenexpiredates)>0) {
        //     foreach( $ttokenexpiredates as $ttokenexpiredate) {
        //         $date = $ttokenexpiredate->ttokenexpiredate;
        //         $dateDis =  $mytime->diffInDays($date);
        //         if($dateDis <= 15) {
        //             $c += 1;
        //         }
        //     }
        // }

        return view('index',['v_last_updates'=>$v_last_updates[0]->updated_at,
                                    'd_last_updates'=>$d_last_updates[0]->updated_at,
                                    'v_counts'=>$v_counts,'d_counts'=>$d_counts]);
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
}
