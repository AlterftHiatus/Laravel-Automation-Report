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

    public function results()
    {
        return $this->hasMany(ChecklistResult::class);
    }
}
