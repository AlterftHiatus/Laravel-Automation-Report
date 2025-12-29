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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();

            // Identitas laporan
            $table->string('nomor_laporan');
            $table->date('tanggal_pemeriksaan');

            // Penanda jenis / template laporan
            $table->string('jenis_laporan');
            // contoh isi: "Concrete Mixer", "Genset"

            // Informasi umum
            $table->string('nama_perusahaan');
            $table->text('alamat_lokasi');

            // Pemeriksaan
            $table->string('jenis_pemeriksaan');
            // contoh: Pertama / Berkala / Ulang

            $table->string('nama_pemeriksa');

            // Hasil akhir
            $table->text('kesimpulan')->nullable();
            $table->text('rekomendasi')->nullable();

            // Status laporan
            $table->string('status_laporan')->default('draft');
            // draft / final

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
