<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\doctor;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_id')->unique();
            $table->string('doctor_name');
            $table->string('doctorName',20);
            $table->string('address',50);
            $table->foreignId('Hospitals_id');
            $table->string('speciality',15);
            $table->string('doctorContact',10);
            $table->string('email',10);
            $table->string('DOB',15);
            $table->string('password',10);
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
        Schema::dropIfExists('doctors');
    }
};
