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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // Kategori program
            $table->string('name'); // Nama program
            $table->enum('mode', ['Online', 'Onsite', 'Hybrid'])->default('Online'); // Online/Onsite/Hybrid
            $table->string('duration'); // Durasi (contoh: "3 Bulan", "6 Minggu")
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced'])->default('Beginner'); // Level
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};