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
        Schema::table('laporan_data_teknis', function (Blueprint $table) {
            $table->integer('diameter_mm')->nullable()->after('kapasitas');
            $table->integer('panjang_mm')->nullable()->after('diameter_mm');
            $table->integer('tinggi_mm')->nullable()->after('panjang_mm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporan_data_teknis', function (Blueprint $table) {
            //
        });
    }
};
