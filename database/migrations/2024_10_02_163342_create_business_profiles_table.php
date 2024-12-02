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
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained()->onDelete(action: 'cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key for category
            $table->foreignId('subcategory_id')->constrained()->onDelete('cascade'); // Foreign key for subcategory
            $table->string(column: 'business_name')->nullable();
            $table->text(column: 'business_description')->nullable();
            $table->json(column: 'business_hours')->nullable();
            $table->string(column: 'business_image')->nullable();
            $table->string(column: 'website')->nullable();
            $table->string(column: 'phone_number')->nullable();
            $table->string(column: 'email')->nullable();
            $table->boolean(column: 'is_verified')->default(value: false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_profiles');
    }
};
