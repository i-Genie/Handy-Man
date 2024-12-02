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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'slug')->unique();
            $table->text(column: 'description')->nullable();
            // $table->foreignId(column: 'parent_id')->constrained()->onDelete('set null')->nullable();
            // $table->unsignedBigInteger(column: 'parent_id')->nullable();


            // $table->foreign(columns: 'parent_id')->references(columns: 'id')->on('categories')->onDelete(action: 'set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
