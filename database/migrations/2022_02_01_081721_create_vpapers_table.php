<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpapers', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vehicleregno',30)->nullable();
            $table->date('ttokenissuedate')->nullable();
            $table->date('ttokenexpiredate')->nullable();
            $table->string('tokenfile',30)->nullable();
            $table->date('rpermitissuedate')->nullable();
            $table->date('rpermitexpiredate')->nullable();
            $table->string('permitfile',30)->nullable();
            $table->date('fitnessissuedate')->nullable();
            $table->date('fitnessexpiredate')->nullable();
            $table->string('fitnessfile',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vpapers');
    }
}
