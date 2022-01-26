<?php

namespace App\Repositories;

use App\Models\Driver;
use Illuminate\Support\Facades\Validator;



class ModelsRepository implements ModelsInterface {

    public function newDriverValidation( array $data ) {

        $validator = Validator::make($data, [
            'name'=>'required',
            'name_bn'=>'required',
            'nid'=>'required|unique:drivers',
            'lisence'=>'required|unique:drivers',
            'photograp'=>'required',
            'start_date'=>'required',
            'contact'=>'required|unique:drivers|max:13|min:11',
        ]);

        return $validator;

    }
    public function newDriver( array $data ){
        Driver::create($data);   
        return (Driver::all());
    }

}