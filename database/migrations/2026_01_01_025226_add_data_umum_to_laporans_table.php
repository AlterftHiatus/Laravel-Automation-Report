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
        Schema::table('laporans', function (Blueprint $table) {
            $table->string('perusahaan_pemilik')->nullable();
            $table->text('alamat_pemilik')->nullable();
            $table->string('perusahaan_pemakai')->nullable();
            $table->text('alamat_pemakai')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('lokasi_unit')->nullable();
            $table->string('nama_operator')->nullable();
            $table->string('nomor_izin_pemakai')->nullable();
            $table->string('sertifikasi_standar')->nullable();
            $table->string('no_skp_pjk3')->nullable();
            $table->string('no_skp_ak3')->nullable();
            $table->string('sertifikat_juru_las')->nullable();
            $table->text('riwayat_pemeriksaan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporans', function (Blueprint $table) {
            //
        });
    }
};
