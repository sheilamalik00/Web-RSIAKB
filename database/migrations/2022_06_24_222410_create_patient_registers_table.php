<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_registers', function (Blueprint $table) {
            $table->string('uuid')->primary();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('nik');
            $table->integer('no');
            $table->string('birth');
            $table->string('doctor_id');
            $table->string('doctor_name');
            $table->date('treatment_date');
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
        Schema::dropIfExists('patient_registers');
    }
}
