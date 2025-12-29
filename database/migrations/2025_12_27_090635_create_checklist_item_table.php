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
        Schema::create('checklist_items', function (Blueprint $table) {
            $table->id();

            // Penanda jenis laporan / template
            $table->string('jenis_laporan');
            // contoh: "Concrete Mixer", "Genset"

            // Section / kategori
            $table->string('kategori');
            // contoh: Konstruksi Dasar, Safety Device

            // Pertanyaan checklist
            $table->string('nama_item');

            // Urutan tampil di laporan
            $table->integer('urutan')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_item');
    }
};
