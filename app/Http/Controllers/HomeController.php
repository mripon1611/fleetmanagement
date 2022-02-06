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

        return view('index',['v_last_updates'=>$v_last_updates[0]->updated_at,
                                    'd_last_updates'=>$d_last_updates[0]->updated_at,
                                    'v_counts'=>$v_counts,'d_counts'=>$d_counts,]);
    }
}
