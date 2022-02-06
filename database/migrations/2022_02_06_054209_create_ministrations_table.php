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
            $table->string('vehicleregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->date('servicing_date')->nullable();
            $table->string('servicing_cost',10)->nullable();
            $table->string('servecing_receipt',50)->nullable();
            $table->date('tyre_change_date')->nullable();
            $table->string('tyre_change_cost',10)->nullable();
            $table->string('tyre_change_receipt',50)->nullable();
            $table->date('battery_change_date')->nullable();
            $table->string('battery_change_cost',10)->nullable();
            $table->string('battery_change_receipt',50)->nullable();
            $table->date('normal_works_date')->nullable();
            $table->string('normal_works_cost',10)->nullable();
            $table->string('normal_works_receipt',50)->nullable();
            $table->date('major_works_date')->nullable();
            $table->string('major_works_cost',10)->nullable();
            $table->string('major_works_receipt',50)->nullable();
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
