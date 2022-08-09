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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('prescription_id')->unique();
            $table->foreignId('insurances_id');
            $table->string('patientName',20);
            $table->string('details',50);
            $table->foreignId('doctors_id');
            $table->string('doctorContact',10);
            $table->string('speciality',10);
            $table->foreignId('hospitals_id');
            $table->string('status',10);
            $table->foreignId('pharmacies_id');
            $table->foreignId('patients_id');
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
        Schema::dropIfExists('prescriptions');
    }
};
