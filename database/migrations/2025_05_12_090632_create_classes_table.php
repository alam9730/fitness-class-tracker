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
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Class name (e.g., "Morning Yoga")
            $table->text('description'); // Longer text for details
            $table->string('instructor'); // Instructor's name
            $table->dateTime('datetime'); // When the class happens
            $table->integer('duration'); // Duration in minutes (e.g., 60)
            $table->integer('capacity'); // Max attendees (e.g., 20)
            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
