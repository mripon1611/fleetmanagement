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
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('vcode',30)->nullable();
            $table->string('vregno',30)->nullable();
            $table->string('staffname',30)->nullable();
            $table->binary('sanitizer')->nullable();
            $table->binary('wheel')->nullable();
            $table->binary('light')->nullable();
            $table->binary('horn')->nullable();
            $table->binary('mobil')->nullable();
            $table->binary('ac')->nullable();
            $table->binary('engine')->nullable();
            $table->binary('looking_glass')->nullable();
            $table->binary('clean_indoor_outdoor')->nullable();
            $table->binary('oil')->nullable();
            $table->binary('papers')->nullable();
            $table->string('remarks',255)->nullable();
            $table->timestamps();

            $table->index(['vcode','vregno']);
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
