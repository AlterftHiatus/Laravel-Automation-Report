<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Laporan;
// use App\Models\LaporanDataTeknis;
// use App\Models\DokumentasiFoto;
use Barryvdh\DomPDF\Facade\Pdf;
// use App\Models\ChecklistItem;
// use App\Models\ChecklistResult;



class KonveyorController extends Controller
{
    public function downloadPdf()
    {
        $pdf = Pdf::loadView('laporan.template_konveyor')
            ->setPaper([0, 0, 595, 935], 'portrait');

        return $pdf->download('Laporan-Konveyor.pdf');
    }
}
