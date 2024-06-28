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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('FlightID'); // Primary key
            $table->string('FlightNumber', 10)->unique();
            $table->foreignId('DepartureAirportID')
                ->constrained('airports', 'AirportID')
                ->onDelete('cascade');
            $table->foreignId('ArrivalAirportID')
                ->constrained('airports', 'AirportID')
                ->onDelete('cascade');
            $table->dateTime('DepartureTime');
            $table->dateTime('ArrivalTime');
            $table->integer('SeatsAvailable');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
