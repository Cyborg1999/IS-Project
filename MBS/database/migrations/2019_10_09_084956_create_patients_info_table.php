<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_info', function (Blueprint $table) {
            $table->bigIncrements('patientid')->index();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('gender');
            $table->date('dateofBirth');
            $table->string('homecontacts');
            $table->string('workcontacts');
            $table->string('relativecontacts');
            $table->string('email');
            $table->string('streetaddress');
            $table->string('town');
            $table->string('county');
            $table->string('postaladdress');
            $table->string('zipcode');
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
        Schema::dropIfExists('patients_info');
    }
}
