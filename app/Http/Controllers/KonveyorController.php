<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDataTeknis;
use Barryvdh\DomPDF\Facade\Pdf;

class KonveyorController extends Controller
{
    /**
     * =========================
     * FORM INPUT KONVEYOR
     * =========================
     */
    public function create()
    {
        return view('laporan.create-konveyor');
    }

    /**
     * =========================
     * SIMPAN LAPORAN KONVEYOR
     * =========================
     */
    public function store(Request $request)
    {
        /* ===============================
         * 1. VALIDASI
         * =============================== */
        $request->validate([
            'jenis_pemeriksaan' => 'required|string',
            'nomor_riksa_uji'   => 'required|string',

            'nama_pemeriksa'   => 'nullable|string',
            'no_kep'           => 'nullable|string',
            'bidang'           => 'nullable|string',
            'pelaksanaan'      => 'nullable|string',
        ]);

        /* ===============================
         * 2. SIMPAN LAPORAN UTAMA
         * =============================== */
        $laporan = Laporan::create([
            'nomor_laporan'       => $request->nomor_riksa_uji,
            'jenis_laporan'       => 'Konveyor',
            'jenis_pemeriksaan'   => $request->jenis_pemeriksaan,
            'nama_pemeriksa'      => $request->nama_pemeriksa,
            'status_laporan'      => 'draft',

            'perusahaan_pemilik'  => $request->pemilik,
            'alamat_pemilik'      => $request->alamat,
            'perusahaan_pemakai'  => $request->pemakai,
            'penanggung_jawab'    => $request->penanggung_jawab,
            'lokasi_unit'         => $request->lokasi_unit,

            'nomor_surat'         => $request->nomor_surat,
            'lisensi_operator'    => $request->lisensi_operator,
        ]);

        /* ===============================
         * 3. SIMPAN DATA TEKNIS
         * =============================== */
        LaporanDataTeknis::create([
            'laporan_id'       => $laporan->id,
            'jenis_pesawat'    => 'Konveyor',

            'merk_tipe'        => $request->merk_type,
            'pembuat_pemasang' => $request->pabrik_pembuat,
            'tahun_pembuatan'  => $request->tahun_pembuatan,
            'nomor_seri'       => $request->no_seri,
            'kapasitas'        => $request->kapasitas,
            'digunakan_untuk'  => $request->digunakan_untuk,

            'jenis_konveyor'   => $request->jenis_konveyor,
            'bobot_kerja'      => $request->bobot_kerja,
            'panjang'          => $request->panjang,
            'tinggi'           => $request->tinggi,
            'lebar'            => $request->lebar,
            'bahan_ban'        => $request->bahan_ban,

            'jenis_penggerak'  => $request->jenis_penggerak,
            'merk_motor'       => $request->merk_motor,
            'model_motor'      => $request->model_motor,
            'negara_pembuat'   => $request->negara_pembuat,
            'no_seri_motor'    => $request->no_seri_motor,
            'tegangan'         => $request->tegangan,
            'daya'             => $request->daya,
            'pabrik_motor'     => $request->pabrik_motor,
        ]);

        return redirect()
            ->route('laporan.konveyor.create')
            ->with('success', 'Laporan Konveyor berhasil disimpan (draft)');
    }

    /**
     * =========================
     * DOWNLOAD PDF KONVEYOR
     * =========================
     */
    public function downloadPdf()
    {
        $pdf = Pdf::loadView('laporan.template_konveyor')
            ->setPaper([0, 0, 595, 935], 'portrait');

        return $pdf->download('Laporan-Konveyor.pdf');
    }
}
