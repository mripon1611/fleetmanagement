<?php

namespace App\Repositories;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;



class ModelsRepository implements ModelsInterface {

    public function newDriverValidation( array $data ) {

        $validator = Validator::make($data, [
            'name'=>'required',
            'name_bn'=>'required',
            'nid'=>'required|unique:drivers',
            'blood'=>'required',
            'license'=>'required|unique:drivers',
            'license_ex'=>'required',
            'photograph' => 'required|mimes:png,jpg,pdf,xlx,csv|max:2048',
            'join_date'=>'required',
            'salary'=>'required',
            'contact'=>'required|unique:drivers|max:13|min:11',
            'emergency'=>'required|unique:drivers|max:13|min:11',
        ]);

        return $validator;

    }
    public function newDriver( array $data ){
        Driver::create($data);   
        return (Driver::all());
    }

    public function newVehicle( array $data ){
        Vehicle::create($data);   
        return (Vehicle::all());
    }

}