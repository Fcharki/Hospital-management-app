<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maladies_patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('patients_id')->unsigned();
            $table->unsignedBiginteger('maladies_id')->unsigned();

            $table->foreign('maladies_id')->references('id')
                 ->on('maladies')->onDelete('cascade');
            $table->foreign('patients_id')->references('id')
                ->on('patients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maladies_patients');
    }
};
