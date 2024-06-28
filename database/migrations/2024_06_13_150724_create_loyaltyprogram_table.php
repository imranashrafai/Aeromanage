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
        Schema::create('loyalty_programs', function (Blueprint $table) {
            $table->id('LoyaltyID'); // Primary key
            $table->foreignId('PassengerID')
                ->constrained('passengers', 'PassengerID')
                ->onDelete('cascade');
            $table->integer('Points')->default(0);
            $table->string('MembershipLevel', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loyaltyprogram');
    }
};
