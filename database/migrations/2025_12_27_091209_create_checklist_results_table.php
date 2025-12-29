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
        Schema::create('checklist_results', function (Blueprint $table) {
            $table->id();

            // Relasi
            $table->unsignedBigInteger('laporan_id');
            $table->unsignedBigInteger('checklist_item_id');

            // Hasil pemeriksaan
            $table->string('hasil');
            // Baik / Buruk / N/A

            $table->text('keterangan')->nullable();

            $table->timestamps();

            // Foreign key
            $table->foreign('laporan_id')
                ->references('id')->on('laporans')
                ->onDelete('cascade');

            $table->foreign('checklist_item_id')
                ->references('id')->on('checklist_items')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_results');
    }
};
