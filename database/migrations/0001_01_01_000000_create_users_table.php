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
         Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'firstname');
            $table->string(column: 'lastname');
            $table->string(column: 'email')->unique();
            $table->string(column: 'phone')->nullable();
            $table->string(column: 'address')->nullable();
            $table->enum(column: 'role', allowed: ['user', 'business', 'admin'])->default(value: 'user');
            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->foreignId(column: 'country_id')->nullable();
            $table->foreignId(column: 'state_id')->nullable();
            $table->foreignId(column: 'city_id')->nullable();
            $table->string(column: 'password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
