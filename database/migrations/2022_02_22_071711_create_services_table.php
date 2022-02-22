<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('ministration_code',30)->nullable();
            $table->string('vcode',30)->nullable();
            $table->string('vehicleregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->string('ministration_type',30)->nullable();
            $table->date('requested_date')->nullable();
            $table->string('status',15)->nullable();
            $table->timestamps();

            $table->index(['vcode']);
            $table->index(['vehicleregno']);
            $table->index(['ministration_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
