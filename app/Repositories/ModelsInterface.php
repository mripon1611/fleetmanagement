<?php

namespace App\Repositories;

interface ModelsInterface {

    // Drivers
    public function newDriverValidation( array $data );
    public function newDriver( array $data );
    public function editDriverDetails( array $data );

    // Vehicles
    public function newVehicle( array $data );

    // Refuel 
    public function updatesRefuel( array $reqdata );
    
    
    
}