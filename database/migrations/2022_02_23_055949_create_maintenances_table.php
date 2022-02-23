<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('requested_by',30)->nullable();
            $table->string('vcode',30)->nullable();
            $table->string('vregno',30)->nullable();
            $table->string('maintenance_type',30)->nullable();
            $table->date('requested_date')->nullable();
            $table->string('status',15)->nullable();
            $table->string('estimate_cost',10)->nullable();
            $table->string('remarks',250)->nullable();
            $table->timestamps();

            $table->index(['vcode']);
            $table->index(['vregno']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
}
