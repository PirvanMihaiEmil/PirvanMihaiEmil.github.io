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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->unsignedBigInteger('fundraiser_id')->nullable();
            $table->foreign('fundraiser_id')->references('id')->on('fundraisers')->onDelete('cascade');
            $table->decimal('amount', 8, 2);
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash', 'check']);
            $table->string('transaction_id')->nullable();
            $table->dateTime('donation_date');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
