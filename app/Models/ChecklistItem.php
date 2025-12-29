<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
    protected $fillable = [
        'jenis_laporan',
        'kategori',
        'nama_item',
        'urutan',
    ];

    // 1 checklist item bisa muncul di banyak laporan
    public function results()
    {
        return $this->hasMany(ChecklistResult::class);
    }
}
