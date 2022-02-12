<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicledriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicledrivers', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vcode',30)->unique()->nullable();
            $table->string('vregno',30)->nullable();
            $table->string('dlicensenumber',30)->nullable();
            $table->string('drivername',30)->nullable();
            $table->date('assigndate')->nullable();
            $table->date('releasedate')->nullable();
            $table->string('status',15)->nullable();
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
        Schema::dropIfExists('vehicledrivers');
    }
}
