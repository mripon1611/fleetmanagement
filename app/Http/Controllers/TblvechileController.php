<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblvechile;

class TblvechileController extends Controller
{
    //

    public function manageVehicle() {
        $datas = Tblvechile::all();

        return view('pages.managevehicle',['datas'=>$datas]);
    }
}
