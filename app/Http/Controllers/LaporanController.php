<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDataTeknis;
use App\Models\DokumentasiFoto;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ChecklistItem;
use App\Models\ChecklistResult;



class LaporanController extends Controller
{
    public function create()
    {
        $checklists = ChecklistItem::where('jenis_laporan', 'Concrete Mixer')
            ->orderBy('kategori')
            ->orderBy('urutan')
            ->get();

        return view('laporan.create', compact('checklists'));
    }

    public function store(Request $request)
    {
        // validasi request :
        $request->validate([
            // DATA UMUM
            'nomor_laporan' => 'required|string',
            'tanggal_pemeriksaan' => 'required|date',
            'jenis_pemeriksaan' => 'required|string',

            // CHECKLIST
            'checklist' => 'required|array',

            // DOKUMENTASI (minimal 1 foto)
            'dokumentasi.0.foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        /* ===============================
        1. SIMPAN DATA UMUM (laporans)
       =============================== */
        $laporan = Laporan::create([
            'nomor_laporan'         => $request->nomor_laporan,
            'tanggal_pemeriksaan'   => $request->tanggal_pemeriksaan,
            'jenis_laporan'         => 'Concrete Mixer',
            'jenis_pemeriksaan'     => $request->jenis_pemeriksaan,
            'status_laporan'        => 'draft',

            'perusahaan_pemilik'    => $request->perusahaan_pemilik,
            'alamat_pemilik'        => $request->alamat_pemilik,
            'perusahaan_pemakai'    => $request->perusahaan_pemakai,
            'alamat_pemakai'        => $request->alamat_pemakai,
            'penanggung_jawab'      => $request->penanggung_jawab,
            'lokasi_unit'           => $request->lokasi_unit,
            'nama_operator'         => $request->nama_operator,
            'nomor_izin_pemakai'    => $request->nomor_izin_pemakai,
            'sertifikasi_standar'   => $request->sertifikasi_standar,
            'no_skp_pjk3'           => $request->no_skp_pjk3,
            'no_skp_ak3'            => $request->no_skp_ak3,
            'sertifikat_juru_las'   => $request->sertifikat_juru_las,
            'riwayat_pemeriksaan'   => $request->riwayat_pemeriksaan,
        ]);

        /* ===============================
        2. SIMPAN DATA TEKNIK
       =============================== */
        LaporanDataTeknis::create([
            'laporan_id'        => $laporan->id,
            'jenis_pesawat'     => 'Concrete Mixer',
            'merk_tipe'         => $request->merk_tipe,
            'pembuat_pemasang'  => $request->pembuat_pemasang,
            'tahun_pembuatan'   => $request->tahun_pembuatan,
            'klasifikasi'       => $request->klasifikasi,
            'nomor_seri'        => $request->nomor_seri,
            'kapasitas'         => $request->kapasitas,

            // DIMENSI
            'diameter_mm'       => $request->diameter_mm,
            'panjang_mm'        => $request->panjang_mm,
            'tinggi_mm'         => $request->tinggi_mm,

            'power'             => $request->power,
        ]);

        /* ===============================
        3. SIMPAN CHECKLIST (SEMUA BAGIAN)
       =============================== */
        if ($request->has('checklist')) {
            foreach ($request->checklist as $checklistItemId => $data) {
                ChecklistResult::create([
                    'laporan_id'        => $laporan->id,
                    'checklist_item_id' => $checklistItemId,
                    'hasil'             => $data['hasil'] ?? null,
                    'keterangan'        => $data['keterangan'] ?? null,
                ]);
            }
        }

        /* ===============================
        4. SIMPAN DOKUMENTASI FOTO
       =============================== */
        if ($request->has('dokumentasi')) {
            foreach ($request->dokumentasi as $index => $item) {
                if (isset($item['foto'])) {
                    $path = $item['foto']->store('laporan_foto', 'public');

                    DokumentasiFoto::create([
                        'laporan_id' => $laporan->id,
                        'file_path'  => $path,
                        'keterangan' => $item['keterangan'] ?? null,
                        'urutan'     => $index + 1,
                    ]);
                }
            }
        }

        return redirect('/laporan/create')
            ->with('success', 'Laporan berhasil disimpan');
    }

    public function preview($id)
    {
        $laporan = Laporan::with([
            'dataTeknis',
            'checklistResults.checklistItem',
            'fotos'
        ])->findOrFail($id);

        return view('laporan.preview', compact('laporan'));
    }


    public function generatePdf($id)
    {
        $laporan = Laporan::with([
            'dataTeknis',
            'checklistResults.checklistItem',
            'fotos'
        ])->findOrFail($id);

        $pdf = Pdf::loadView('laporan.pdf', compact('laporan'))
            ->setPaper([0, 0, 595, 935], 'portrait');


        return $pdf->download(
            'Laporan-' . $laporan->nomor_laporan . '.pdf'
        );
    }
}
