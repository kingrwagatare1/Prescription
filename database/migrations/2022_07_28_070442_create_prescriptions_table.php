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
            
            $table->string('prescription_id');
            $table->foreignId('insurance_id');
            $table->string('patientName',20);
            $table->string('details',50);
            $table->foreignId('doctor_id');
            $table->string('doctorContact',10);
            $table->string('speciality',10);
            $table->foreignId('hospital_id');
            $table->enum("status",["Approved","Pending"]);
            $table->foreignId('pharmacy_id');
            $table->foreignId('patient_id');
            $table->primary('prescription_id');
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
