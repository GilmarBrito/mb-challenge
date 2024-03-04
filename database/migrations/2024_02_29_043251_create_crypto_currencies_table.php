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
        Schema::create('crypto_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('coin_name', 50);
            $table->string('algorithm', 50);
            $table->boolean('is_trading');
            $table->string('proof_type', 50);
            $table->unsignedDecimal('total_coins_mined', 30, 9)->nullable();
            $table->unsignedDecimal('total_coin_supply', 18, 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_currencies');
    }
};
