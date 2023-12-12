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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('t_quantity');
            $table->integer('t_totalprice');
            $table->integer('t_status');
            $table->string('t_paymentmethod');
            $table->string('t_paymentproof');
            $table->string('t_trackingcode');
            $table->foreignId('buyer_id');
            $table->foreignId('item_id');
            $table->foreignId('seller_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
