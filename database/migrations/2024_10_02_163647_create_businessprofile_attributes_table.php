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
        Schema::create('businessprofile_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_profile_id')->constrained()->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained()->onDelete('cascade');
            $table->json('selected_options')->nullable();
    
            // $table->foreign('business_profile_id')->references('id')->on('business_profiles')->onDelete('cascade');
            // $table->foreign('attributes_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businessprofile_attributes');
    }
};
