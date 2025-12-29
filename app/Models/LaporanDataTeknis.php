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
        'nomor_seri',
        'tahun_pembuatan',
        'kapasitas',
        'dimensi',
        'power',
    ];

    // data teknis milik 1 laporan
    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
