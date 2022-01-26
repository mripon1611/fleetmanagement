<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Repositories\ModelsRepository;
use Illuminate\Support\Facades\Validator;
// use Validation;

class DriverController extends Controller
{
    //


    protected $data;
    public function __construct(ModelsRepository $data) {
        $this->data = $data;
    }

    public function driverList() {
        $datas = Driver::all();
        return view('pages.driverlist',['datas'=>$datas]);
    }

    public function addNewDriver( Request $req ) {

        $validator = $this->data->newDriverValidation($req->all());
        // $validator = Validator::make($req->all(), [
        //     'name'=>'required',
        //     'name_bn'=>'required',
        //     'nid'=>'required|unique:drivers',
        //     'lisence'=>'required|unique:drivers',
        //     'photograp'=>'required',
        //     'start_date'=>'required',
        //     'contact'=>'required|unique:drivers|max:13|min:11',
        // ]);

        if ($validator->fails()) {
            return back();
        } else {
            $ddriver = $this->data->newDriver($req->all());
            return redirect('/driverlist');
        }
    }
}
