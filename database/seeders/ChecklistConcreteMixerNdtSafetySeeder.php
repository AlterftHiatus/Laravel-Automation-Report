<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChecklistItem;

class ChecklistConcreteMixerNdtSafetySeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            // =========================
            // IV. PENGUJIAN NDT
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Putaran Poros Diesel (Rpm)','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Pondasi','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Pengujian Sambungan Las','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Transmisi','urutan'=>4],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Kebisingan','urutan'=>5],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Pencahayaan','urutan'=>6],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Iklim Kerja','urutan'=>7],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengujian NDT','nama_item'=>'Getaran','urutan'=>8],

            // =========================
            // V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Emergency Stop','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Governor','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Pelindung Mesin','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Silencer','urutan'=>4],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Peredam Getaran','urutan'=>5],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Grounding','urutan'=>6],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Thermostat','urutan'=>7],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Selang Pendingin','urutan'=>8],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Pengukuran dan Pengujian Safety Device','nama_item'=>'Water Signal','urutan'=>9],
        ];

        ChecklistItem::insert($items);
    }
}
