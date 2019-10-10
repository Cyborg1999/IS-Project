<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_info', function (Blueprint $table) {
            $table->bigIncrements('doctorid');
            $table->string('name');
            $table->string('fieldofExpertise');
            $table->string('dateofBirth');
            $table->string('doctorSchedule');
            $table->string('clinicid');
            $table->string('doctorStation');
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
        Schema::dropIfExists('doctorsinfo');
    }
}
