<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\doctor;
use App\Models\insurance;
use App\Models\Hospital;
use App\Models\pharmacy;
use App\Models\Patient;

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
            
            $table->id('prescription_id');
            $table->foreignIdFor(insurance::class);
            $table->string('details',50);
            $table->foreignIdFor(doctor::class);
            $table->string('doctorContact',10);
            $table->string('speciality',10);
            $table->foreignIdFor(Hospital::class);
            $table->enum("status",["Approved","Pending"]);
            $table->foreignIdFor(pharmacy::class);
            $table->foreignIdFor(Patient::class);
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
