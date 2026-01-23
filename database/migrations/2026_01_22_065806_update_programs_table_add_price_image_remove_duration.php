<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('programs', function (Blueprint $table) {

            // ubah category jadi enum
            $table->enum('category', [
                'Academic & School Program',
                'Quran & Islamic Studies Program',
                'Language & Skill Program',
                'Program Options'
            ])->change();

            // hapus kolom duration
            $table->dropColumn('duration');

            // tambah kolom baru
            $table->decimal('price', 10, 2)->after('level');
            $table->enum('price_period', ['Per Day', 'Per Week', 'Per Month', 'Per Year'])
                  ->default('Per Month')
                  ->after('price');
            $table->string('image')->nullable()->after('price_period');
        });
    }

    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {

            // kembalikan duration
            $table->string('duration');

            // kembalikan category ke string
            $table->string('category')->change();

            // hapus kolom tambahan
            $table->dropColumn(['price', 'price_period', 'image']);
        });
    }
};
