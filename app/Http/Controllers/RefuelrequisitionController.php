<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vehicledriver;
use App\Models\Refuelrequisition;
use App\Repositories\ModelsRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class RefuelrequisitionController extends Controller
{
    //

    public function index() {
        $datas = Refuelrequisition::all();
        return view('pages.refuel-requisition',['datas'=>$datas]);
        // return $datas;
    }
}
