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
    Schema::table('programs', function (Blueprint $table) {
        $table->string('level')->change();
    });
}

public function down(): void
{
    Schema::table('programs', function (Blueprint $table) {
        $table->enum('level', ['Beginner', 'Intermediate', 'Advanced'])->default('Beginner')->change();
    });
}

};
