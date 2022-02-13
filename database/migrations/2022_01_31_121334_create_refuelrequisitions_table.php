<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefuelrequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refuelrequisitions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vcode',30)->nullable();
            $table->string('vregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->string('pvsodo',10)->nullable();
            $table->string('crodo',10)->nullable();
            $table->string('ttlqty',5)->nullable();
            $table->string('fueltype',10)->nullable();
            $table->string('costplitter',5)->nullable();
            $table->string('totalprice',10)->nullable();
            $table->string('file',50)->nullable();
            $table->string('status',10)->nullable();
            $table->date('created_date')->nullable();
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
        Schema::dropIfExists('refuelrequisitions');
    }
}
