<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NotificationsController;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    //

    public function viewMaintenance() {

        $totalNotifications = NotificationsController::expireDocuments();
        $maintenances = Maintenance::all();

        return view('pages.Maintenance.maintenanceview',['maintenances'=>$maintenances,'totalNotifications'=>$totalNotifications,'sl'=>1]);
    }
}
