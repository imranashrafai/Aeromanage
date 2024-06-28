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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('BookingID'); // Primary key
            $table->foreignId('PassengerID')
                ->constrained('passengers', 'PassengerID')
                ->onDelete('cascade');
            $table->foreignId('FlightID')
                ->constrained('flights', 'FlightID')
                ->onDelete('cascade');
            $table->date('BookingDate');
            $table->string('Status', 20);
            $table->decimal('PaymentAmount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
