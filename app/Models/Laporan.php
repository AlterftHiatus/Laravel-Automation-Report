<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nomor_laporan',
        'tanggal_pemeriksaan',
        'jenis_laporan',
        'nama_perusahaan',
        'alamat_lokasi',
        'jenis_pemeriksaan',
        'nama_pemeriksa',
        'kesimpulan',
        'rekomendasi',
        'status_laporan',
    ];

    // 1 laporan punya 1 data teknis
    public function dataTeknis()
    {
        return $this->hasOne(LaporanDataTeknis::class);
    }

    // 1 laporan punya banyak hasil checklist
    public function checklistResults()
    {
        return $this->hasMany(ChecklistResult::class);
    }

    // 1 laporan punya banyak foto
    public function fotos()
    {
        return $this->hasMany(DokumentasiFoto::class);
    }
}
