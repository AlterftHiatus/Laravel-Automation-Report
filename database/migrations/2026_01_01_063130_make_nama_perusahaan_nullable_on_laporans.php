<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNamaPerusahaanNullableOnLaporans extends Migration
{
    public function up()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->string('nama_perusahaan')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->string('nama_perusahaan')->nullable(false)->change();
        });
    }
}
