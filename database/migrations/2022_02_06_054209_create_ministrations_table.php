<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministrations', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vcode',30)->nullable();
            $table->string('vehicleregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->string('ministration_type',30)->nullable();
            $table->date('ministration_date')->nullable();
            $table->string('ministration_cost',10)->nullable();
            $table->string('ministration_receipt',50)->nullable();
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
        Schema::dropIfExists('ministrations');
    }
}
