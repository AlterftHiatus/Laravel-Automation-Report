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
        Schema::table('dokumentasi_fotos', function (Blueprint $table) {
            $table->unsignedBigInteger('checklist_item_id')
                ->nullable()
                ->after('laporan_id');

            $table->foreign('checklist_item_id')
                ->references('id')
                ->on('checklist_items')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('dokumentasi_fotos', function (Blueprint $table) {
            $table->dropForeign(['checklist_item_id']);
            $table->dropColumn('checklist_item_id');
        });
    }
};
