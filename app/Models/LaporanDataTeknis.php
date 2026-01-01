<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanDataTeknis extends Model
{
    protected $table = 'laporan_data_teknis';

    protected $fillable = [
        'laporan_id',
        'jenis_pesawat',
        'merk_tipe',
        'pembuat_pemasang',
        'tahun_pembuatan',
        'klasifikasi',
        'nomor_seri',
        'kapasitas',

        // DIMENSI
        'diameter_mm',
        'panjang_mm',
        'tinggi_mm',

        'power',
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
