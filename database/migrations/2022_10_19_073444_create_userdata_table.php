<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdata', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('phoneNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('village');
            $table->string('mandal');
            $table->string('cropVariety');
            $table->integer('totalAcres');
            $table->string('farmingIpm');
            $table->integer('farmingAcres');
            $table->string('semiOrganics');
            $table->integer('semiAcres');
            $table->string('organics');
            $table->integer('orgAcres');
            $table->date('date');
            $table->string('manureOrganic');
            $table->string('drip');
            $table->string('cropCondition');
            $table->string('ageOfCrop');
            $table->string('sprayingSerial');
            $table->string('sprayingCombination');
            $table->string('quantity');
            $table->string('remarks');
            $table->binary('files');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdata');
    }
};
