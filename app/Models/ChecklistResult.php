<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistResult extends Model
{
    protected $fillable = [
        'laporan_id',
        'checklist_item_id',
        'hasil',
        'keterangan',
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }

    public function checklistItem()
    {
        return $this->belongsTo(ChecklistItem::class);
    }
}
