<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDataTeknis;
use App\Models\DokumentasiFoto;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ChecklistItem;
use App\Models\ChecklistResult;
use Illuminate\Support\Facades\Storage;


class LaporanController extends Controller
{
    public function update(Request $request, $id)
    {
        // ambil laporan
        $laporan = Laporan::with(['dataTeknis', 'checklistResults'])->findOrFail($id);

        /* ===============================
    1. UPDATE DATA LAPORAN (laporans)
    =============================== */
        $laporan->update([
            'nomor_laporan'       => $request->nomor_laporan,
            'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
            'jenis_pemeriksaan'   => $request->jenis_pemeriksaan,
            'nama_pemeriksa'      => $request->nama_pemeriksa,

            'perusahaan_pemilik'  => $request->perusahaan_pemilik,
            'alamat_pemilik'      => $request->alamat_pemilik,
            'perusahaan_pemakai'  => $request->perusahaan_pemakai,
            'alamat_pemakai'      => $request->alamat_pemakai,
            'penanggung_jawab'    => $request->penanggung_jawab,
            'lokasi_unit'         => $request->lokasi_unit,
            'nama_operator'       => $request->nama_operator,
            'nomor_izin_pemakai'  => $request->nomor_izin_pemakai,
            'sertifikasi_standar' => $request->sertifikasi_standar,
            'no_skp_pjk3'         => $request->no_skp_pjk3,
            'no_skp_ak3'          => $request->no_skp_ak3,
            'sertifikat_juru_las' => $request->sertifikat_juru_las,
            'riwayat_pemeriksaan' => $request->riwayat_pemeriksaan,
        ]);

        /* ===============================
    2. UPDATE DATA TEKNIS
    =============================== */
        if ($laporan->dataTeknis) {
            $laporan->dataTeknis->update([
                'merk_tipe'        => $request->merk_tipe,
                'pembuat_pemasang' => $request->pembuat_pemasang,
                'tahun_pembuatan'  => $request->tahun_pembuatan,
                'klasifikasi'      => $request->klasifikasi,
                'nomor_seri'       => $request->nomor_seri,
                'kapasitas'        => $request->kapasitas,
                'diameter_mm'      => $request->diameter_mm,
                'panjang_mm'       => $request->panjang_mm,
                'tinggi_mm'        => $request->tinggi_mm,
                'power'            => $request->power,
                'digunakan_untuk'  => $request->digunakan_untuk,
            ]);
        }

        /* ===============================
    3. UPDATE CHECKLIST (AMAN)
    =============================== */
        if ($request->has('checklist')) {
            foreach ($request->checklist as $checklistItemId => $data) {
                ChecklistResult::updateOrCreate(
                    [
                        'laporan_id'        => $laporan->id,
                        'checklist_item_id' => $checklistItemId,
                    ],
                    [
                        'hasil'      => $data['hasil'] ?? null,
                        'keterangan' => $data['keterangan'] ?? null,
                    ]
                );
            }
        }

        /* ===============================
    4. DOKUMENTASI FOTO
    ===============================
    TIDAK DISENTUH (READ-ONLY)
    */

        return redirect('/dashboard')
            ->with('success', 'Laporan berhasil diperbarui');
    }

    public function edit($id)
    {
        $laporan = Laporan::with([
            'dataTeknis',
            'checklistResults.checklistItem',
            'fotos'
        ])->findOrFail($id);

        $checklists = ChecklistItem::where('jenis_laporan', 'Concrete Mixer')
            ->orderBy('kategori')
            ->orderBy('urutan')
            ->get();

        return view('laporan.edit', compact('laporan', 'checklists'));
    }


    public function index()
    {
        $laporans = Laporan::orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('laporans'));
    }

    public function destroy($id)
    {
        $laporan = Laporan::with('fotos')->findOrFail($id);

        // 1. Hapus file dokumentasi dari storage
        foreach ($laporan->fotos as $foto) {
            if ($foto->file_path && Storage::disk('public')->exists($foto->file_path)) {
                Storage::disk('public')->delete($foto->file_path);
            }
        }

        // 2. Hapus data laporan (cascade ke tabel lain)
        $laporan->delete();

        return redirect('/dashboard')
            ->with('success', 'Laporan dan file dokumentasi berhasil dihapus');
    }

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

            // DOKUMENTASI
            'checklist.*.foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);


        /* ===============================
        1. SIMPAN DATA UMUM (laporans)
       =============================== */
        $laporan = Laporan::create([
            'nomor_laporan'         => $request->nomor_laporan,
            'tanggal_pemeriksaan'   => $request->tanggal_pemeriksaan,
            'jenis_laporan'         => 'Concrete Mixer',
            'jenis_pemeriksaan'     => $request->jenis_pemeriksaan,
            'nama_pemeriksa'        => $request->nama_pemeriksa,
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
            'digunakan_untuk'   => $request->digunakan_untuk,

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
        4. SIMPAN DOKUMENTASI PER CHECKLIST
        =============================== */

        $urutan = 1;

        if ($request->has('checklist')) {
            foreach ($request->checklist as $checklistItemId => $data) {

                if (isset($data['foto']) && $data['foto']) {

                    $path = $data['foto']->store('laporan_foto', 'public');

                    DokumentasiFoto::create([
                        'laporan_id'        => $laporan->id,
                        'checklist_item_id' => $checklistItemId,
                        'file_path'         => $path,
                        'keterangan'        => $data['foto_keterangan'] ?? null,
                        'urutan'            => $urutan++,
                    ]);
                }
            }
        }

        return redirect('/dashboard')
            ->with('success', 'Laporan berhasil disimpan');
    }

    public function generatePdf($id)
    {
        $laporan = Laporan::with([
            'dataTeknis',
            'checklistResults.checklistItem',
            'fotos.checklistItem'
        ])->findOrFail($id);

        // ubah jenis laporan jadi slug (spasi -> strip, lowercase)
        $jenis = strtolower(str_replace(' ', '-', $laporan->jenis_laporan));

        $pdf = Pdf::loadView('laporan.pdf', compact('laporan'))
            ->setPaper([0, 0, 595, 935], 'portrait');

        return $pdf->download(
            'laporan-' . $jenis . '.pdf'
        );
    }
}
