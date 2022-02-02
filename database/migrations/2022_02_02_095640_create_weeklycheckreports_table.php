<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklycheckreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklycheckreports', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->date('date')->nullable();
            $table->string('vregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->string('sanitizer',10)->nullable();
            $table->string('wheel',10)->nullable();
            $table->string('light',10)->nullable();
            $table->string('horn',10)->nullable();
            $table->string('mobil',10)->nullable();
            $table->string('ac',10)->nullable();
            $table->string('engine',10)->nullable();
            $table->string('looking_glass',10)->nullable();
            $table->string('cleen_inout',10)->nullable();
            $table->string('oil',15)->nullable();
            $table->string('papers',20)->nullable();
            $table->string('remarks',255)->nullable();
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
        Schema::dropIfExists('weeklycheckreports');
    }
}
