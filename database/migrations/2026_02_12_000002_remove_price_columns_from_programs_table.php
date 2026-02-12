<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn(['price', 'price_period']);
        });
    }

    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('level');
            $table->enum('price_period', ['Per Day', 'Per Week', 'Per Month', 'Per Year'])
                  ->default('Per Month')
                  ->after('price');
        });
    }
};
