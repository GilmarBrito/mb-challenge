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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'user_profiles_user_id'
            );
            $table->string('email_alternative')->nullable();
            $table->date('birthday')->nullable();
            $table->string('tax_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropForeign('user_profiles_user_id');
        });

        Schema::enableForeignKeyConstraints();

        Schema::dropIfExists('user_profiles');
    }
};
