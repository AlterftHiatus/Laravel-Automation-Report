<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeLegacyColumnsNullableOnLaporans extends Migration
{
    public function up()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->string('nama_perusahaan')->nullable()->change();
            $table->text('alamat_lokasi')->nullable()->change();
            $table->string('nama_pemeriksa')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->string('nama_perusahaan')->nullable(false)->change();
            $table->text('alamat_lokasi')->nullable(false)->change();
            $table->string('nama_pemeriksa')->nullable(false)->change();
        });
    }
}
