<?php

namespace App\Repositories;

interface FuelsInterface {

    // Refuel 
    public function updatesRefuel( array $reqdata );
    public function newRefuelreq( array $reqdata );
    public function editRefuel( array $reqdata );
    
}