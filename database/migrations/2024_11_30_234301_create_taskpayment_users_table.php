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
        Schema::create('taskpayment_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('tax_payment_id')->constrained('tax_payments')->onDelete('cascade'); // Correct reference
            $table->string('property_own_name');
            $table->string('property_name');
            $table->string('property_address');
            $table->string('tax_type');
            $table->string('recipient_type');
            $table->string('resident_status');
            $table->string('amount_paid');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskpayment_users');
    }
};
