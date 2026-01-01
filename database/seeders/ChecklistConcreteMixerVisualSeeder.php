<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChecklistItem;

class ChecklistConcreteMixerVisualSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            // =========================
            // A. KONSTRUKSI DASAR
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Konstruksi Dasar','nama_item'=>'Pondasi Dasar','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Konstruksi Dasar','nama_item'=>'Kerangka Mesin','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Konstruksi Dasar','nama_item'=>'Support / Penopang','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Konstruksi Dasar','nama_item'=>'Anchor Bolt','urutan'=>4],

            // =========================
            // B. STRUKTUR KONSTRUKSI
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Mixing Drum','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Frame','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Gear Drive','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Rotation Handle','urutan'=>4],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Friction Wheel','urutan'=>5],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Motor Engine','urutan'=>6],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Engine Cover','urutan'=>7],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Mixing Paddles','urutan'=>8],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Struktur Konstruksi','nama_item'=>'Wheel Transmission','urutan'=>9],

            // =========================
            // C. SAFETY DEVICE
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Safety Device','nama_item'=>'Emergency Stop','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Safety Device','nama_item'=>'Governor','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Safety Device','nama_item'=>'Pelindung Mesin','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Safety Device','nama_item'=>'Silincer','urutan'=>4],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Safety Device','nama_item'=>'Peredam Getaran','urutan'=>5],

            // =========================
            // D. TRANSMISI DAN BAGIAN-BAGIAN UNIT MESIN
            // =========================
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Roda Gigi','urutan'=>1],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Transmisi Sabuk','urutan'=>2],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Transmisi Rantai','urutan'=>3],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Fly Wheel','urutan'=>4],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Rumah Fly Wheel','urutan'=>5],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Baut Pengikat Peredam','urutan'=>6],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Support / Penopang','urutan'=>7],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Peredam Getaran Mesin','urutan'=>8],
            ['jenis_laporan'=>'Concrete Mixer','kategori'=>'Transmisi dan Bagian-Bagian Unit Mesin','nama_item'=>'Crankshaft / Poros Engkel','urutan'=>9],
        ];

        ChecklistItem::insert($items);
    }
}
