<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancerequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenancerequisitions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->integer('maintenance_id')->nullable();
            $table->string('item_type',30)->nullable();
            $table->string('item_name',15)->nullable();
            $table->string('unit',2)->nullable();
            $table->string('unit_price',10)->nullable();
            $table->string('total_price',10)->nullable();
            $table->timestamps();

            $table->index(['maintenance_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenancerequisitions');
    }
}
