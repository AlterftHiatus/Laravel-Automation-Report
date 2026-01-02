<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nomor_laporan',
        'tanggal_pemeriksaan',
        'jenis_laporan',
        'jenis_pemeriksaan',
        'status_laporan',

        // DATA UMUM
        'perusahaan_pemilik',
        'alamat_pemilik',
        'perusahaan_pemakai',
        'alamat_pemakai',
        'penanggung_jawab',
        'lokasi_unit',
        'nama_operator',
        'nomor_izin_pemakai',
        'sertifikasi_standar',
        'no_skp_pjk3',
        'no_skp_ak3',
        'sertifikat_juru_las',
        'riwayat_pemeriksaan',

        // OPSIONAL (nanti)
        'kesimpulan',
        'rekomendasi',
    ];

    public function dataTeknis()
    {
        return $this->hasOne(LaporanDataTeknis::class);
    }

    public function checklistResults()
    {
        return $this->hasMany(ChecklistResult::class)
            ->with('checklistItem')
            ->orderBy('checklist_item_id');
    }


    public function fotos()
    {
        return $this->hasMany(DokumentasiFoto::class)->orderBy('urutan');
    }
}
