<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('name_bn',50)->nullable();
            $table->string('nid',20)->unique()->nullable();
            $table->string('blood',5)->nullable();
            $table->string('lisence',30)->unique()->nullable();
            $table->date('license_ex')->nullable();
            $table->string('photograp',50)->nullable();
            $table->string('isaasigned',5)->nullable();
            $table->date('join_date')->nullable();
            $table->string('salary',15)->nullable();
            $table->string('contact',13)->nullable();
            $table->string('emergency',13)->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
