<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\medecine;
use App\Models\pharmacist;

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
            $table->id('pharmacy_id');
            $table->string('location',20);
            $table->string('pharmacyContact',10);
            $table->string('pharmacyEmail',20)->unique();
            $table->foreignIdFor(medecine::class); 
            $table->foreignIdFor(pharmacist::class); 
            $table->string('pharmacyName')->unique();
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
