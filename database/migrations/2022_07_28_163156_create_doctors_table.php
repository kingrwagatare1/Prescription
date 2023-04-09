<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\doctor;
use App\Models\Hospital;

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
            $table->id('doctor_id');
            $table->string('doctorName',20);
            $table->string('address',50);
            $table->foreignIdFor(Hospital::class);
            $table->string('speciality',15);
            $table->string('doctorContact',10);
            $table->string('DOB',10);
            $table->string('email',50)->unique();
            $table->string('username',15);
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
