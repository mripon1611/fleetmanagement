<?php

namespace App\Repositories;

interface ModelsInterface {

    public function newDriverValidation( array $data );
    public function newDriver( array $data );
    
}