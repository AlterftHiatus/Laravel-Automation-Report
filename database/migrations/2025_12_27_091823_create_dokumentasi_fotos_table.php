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
        Schema::create('dokumentasi_fotos', function (Blueprint $table) {
            $table->id();

            // Relasi ke laporan
            $table->unsignedBigInteger('laporan_id');

            // Lokasi file foto
            $table->string('file_path');

            // Keterangan foto
            $table->string('keterangan')->nullable();

            // Urutan tampil di PDF
            $table->integer('urutan')->default(0);

            $table->timestamps();

            // Foreign key
            $table->foreign('laporan_id')
                ->references('id')->on('laporans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasi_fotos');
    }
};
