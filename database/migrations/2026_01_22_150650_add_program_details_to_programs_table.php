<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->text('tujuan_program')->nullable()->after('image');
            $table->text('fokus_pembelajaran')->nullable()->after('tujuan_program');
            $table->string('teacher')->nullable()->after('fokus_pembelajaran');
            $table->text('manfaat_program')->nullable()->after('teacher');
        });
    }

    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn([
                'tujuan_program',
                'fokus_pembelajaran',
                'teacher',
                'manfaat_program'
            ]);
        });
    }
};
