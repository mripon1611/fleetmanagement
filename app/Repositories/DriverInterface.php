<?php

namespace App\Repositories;

interface DriverInterface {
    // Drivers
    public function newDriverValidation( array $data );
    public function newDriver( array $data );
    public function editDriverDetails( array $data );
    public function releasingDriver( array $reqdata );
}