<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumentasiFoto extends Model
{
    protected $table = 'dokumentasi_fotos';

    protected $fillable = [
        'laporan_id',
        'checklist_item_id',
        'file_path',
        'keterangan',
        'urutan',
    ];

    public function checklistItem()
    {
        return $this->belongsTo(ChecklistItem::class);
    }

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
