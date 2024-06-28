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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('PaymentID'); // Primary key
            $table->foreignId('BookingID')
                ->constrained('bookings', 'BookingID')
                ->onDelete('cascade');
            $table->date('PaymentDate');
            $table->decimal('Amount', 10, 2);
            $table->string('PaymentMethod', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
