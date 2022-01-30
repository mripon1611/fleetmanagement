<?php

namespace App\Repositories;

interface ModelsInterface {

    public function newDriverValidation( array $data );
    public function newDriver( array $data );
    public function newVehicle( array $data );
    public function editDriverDetails( array $data );
    
    
    
}