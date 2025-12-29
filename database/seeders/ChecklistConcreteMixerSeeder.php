<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChecklistItem;

class ChecklistConcreteMixerSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            // === KONSTRUKSI DASAR ===
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Konstruksi Dasar',
                'nama_item' => 'Pondasi dasar mesin',
                'urutan' => 1,
            ],
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Konstruksi Dasar',
                'nama_item' => 'Kerangka mesin',
                'urutan' => 2,
            ],

            // === SAFETY DEVICE ===
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Safety Device',
                'nama_item' => 'Emergency stop',
                'urutan' => 1,
            ],
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Safety Device',
                'nama_item' => 'Pelindung bagian bergerak',
                'urutan' => 2,
            ],

            // === TRANSMISI ===
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Transmisi',
                'nama_item' => 'Gear drive',
                'urutan' => 1,
            ],
            [
                'jenis_laporan' => 'Concrete Mixer',
                'kategori' => 'Transmisi',
                'nama_item' => 'V-belt',
                'urutan' => 2,
            ],
        ];

        ChecklistItem::insert($items);
    }
}
