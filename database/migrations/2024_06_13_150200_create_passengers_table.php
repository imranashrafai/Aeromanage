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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id('PassengerID'); // Primary key
            $table->string('FirstName', 50);
            $table->string('LastName', 50);
            $table->date('DOB')->nullable();
            $table->string('Email', 100)->unique();
            $table->string('PhoneNumber', 15);
            $table->integer('age');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
