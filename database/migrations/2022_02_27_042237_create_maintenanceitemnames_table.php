<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceitemnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenanceitemnames', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->integer('maintenanceitemtype_id')->nullable();
            $table->string('maintenanceitemtype',20)->nullable();
            $table->string('item_name',40)->nullable();
            $table->timestamps();

            $table->index(['maintenanceitemtype_id']);
            $table->index(['maintenanceitemtype']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenanceitemnames');
    }
}
