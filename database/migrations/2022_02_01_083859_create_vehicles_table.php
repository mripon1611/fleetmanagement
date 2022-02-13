<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vcode',30)->unique()->nullable();
            $table->string('name',30)->nullable();
            $table->string('regno',30)->unique()->nullable();
            $table->string('regno_bn',30)->unique()->nullable();
            $table->date('vehicleadded')->nullable();
            $table->date('regdate')->nullable();
            $table->date('licensedate')->nullable();
            $table->string('seatcapacity',5)->nullable();
            $table->string('division',30)->nullable();
            $table->string('mapcolor',15)->nullable();
            $table->string('ownername',30)->nullable();
            $table->string('toassigned',5)->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
