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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->string('pharmacy_id');
            $table->string('location',20);
            $table->string('pharmacyContact',10);
            $table->string('pharmacyEmail',20)->unique();
            $table->foreignId('medecine_id');
            $table->foreignId('pharmacist_id');
            $table->string('pharmacyName')->unique();
            $table->primary('pharmacy_id');
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
        Schema::dropIfExists('pharmacies');
    }
};
