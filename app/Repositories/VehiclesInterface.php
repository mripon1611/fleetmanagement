<?php

namespace App\Repositories;

interface VehiclesInterface {

    // Vehicles
    public function newVehicle( array $data );

    // Refuel 
    public function updatesRefuel( array $reqdata );
    
    
    
}