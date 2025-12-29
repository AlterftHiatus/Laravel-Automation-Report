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
        Schema::create('laporan_data_teknis', function (Blueprint $table) {
            $table->id();

            // Relasi ke laporan
            $table->unsignedBigInteger('laporan_id');

            // Data teknis Concrete Mixer
            $table->string('jenis_pesawat');      // Concrete Mixer
            $table->string('merk_tipe')->nullable();
            $table->string('nomor_seri')->nullable();
            $table->year('tahun_pembuatan')->nullable();
            $table->string('kapasitas')->nullable(); // contoh: 350 Liter
            $table->string('dimensi')->nullable();   // contoh: 500x800x800 mm
            $table->string('power')->nullable();     // contoh: 10 PK

            $table->timestamps();

            // Foreign key (opsional tapi disarankan)
            $table->foreign('laporan_id')
                ->references('id')
                ->on('laporans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_data_teknis');
    }
};
