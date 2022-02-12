<?php

namespace App\Repositories;

interface VehiclesInterface {

    // Vehicles
    public function newVehicle( array $data );  
    public function detailUpdates( array $reqdata );
    public function addNewMinstartions( array $reqdata );
    public function updateDocuments( array $reqdata );
    
}