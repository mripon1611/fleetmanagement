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
        $mytime1 = Carbon::now();
        $mytime2 = Carbon::now();
        $mytime2 = $mytime2->addDays(10);

        $totalNotifications = DB::table('vpapers')
            ->select('vcode','papers_type','expire_date')
            ->where('status', 'present')
            ->whereBetween('expire_date',[
                $mytime1,
                $mytime2,
        ])->get();

        if(count($totalNotifications)>0) {
            foreach( $totalNotifications as $totalNotification) {
                $date = $totalNotification->expire_date;
                $dateDis =  $mytime1->diffInDays($date);
                $totalNotification->expire_date = $dateDis;
            }
        }

        return $totalNotifications;
    }
}
