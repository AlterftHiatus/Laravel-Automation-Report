<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDataTeknis;
use Barryvdh\DomPDF\Facade\Pdf;

class PenggerakMulaController extends Controller
{
    /**
     * =========================
     * FORM INPUT PENGGERAK MULA
     * =========================
     */
    public function create()
    {
        return view('laporan.create-penggerakMula');
    }

    /**
     * =========================
     * SIMPAN LAPORAN PENGGERAK MULA
     * =========================
     */
    public function store(Request $request)
    {
        /* ===============================
         * 1. VALIDASI
         * =============================== */
        $request->validate([
            'jenis_pemeriksaan' => 'required|string',

            'pemeriksa.nama'    => 'nullable|string',
            'pemeriksa.no_kep'  => 'nullable|string',
            'pemeriksa.bidang'  => 'nullable|string',
            'pemeriksa.pelaksanaan' => 'nullable|date',
        ]);

        /* ===============================
         * 2. SIMPAN LAPORAN UTAMA
         * =============================== */
        $laporan = Laporan::create([
            'nomor_laporan'     => null, // diisi office
            'jenis_laporan'     => 'Penggerak Mula',
            'jenis_pemeriksaan' => $request->jenis_pemeriksaan,
            'nama_pemeriksa'    => $request->input('pemeriksa.nama'),
            'status_laporan'    => 'draft',

            // DATA UMUM
            'perusahaan_pemilik' => $request->input('data_umum.pemilik'),
            'alamat_pemilik'     => $request->input('data_umum.alamat_pemilik'),
            'perusahaan_pemakai' => $request->input('data_umum.pemakai'),
            'alamat_pemakai'     => $request->input('data_umum.alamat_pemakai'),
            'penanggung_jawab'   => $request->input('data_umum.penanggung_jawab'),
            'lokasi_unit'        => $request->input('data_umum.lokasi_unit'),
        ]);

        /* ===============================
         * 3. SIMPAN DATA TEKNIS MOTOR DIESEL
         * =============================== */
        LaporanDataTeknis::create([
            'laporan_id'     => $laporan->id,
            'jenis_pesawat'  => 'Motor Diesel',

            // IDENTITAS PESAWAT
            'merk_tipe'      => $request->input('identitas.merek_model'),
            'nomor_seri'     => $request->input('identitas.no_seri'),
            'pembuat_pemasang'=> $request->input('identitas.pabrik_pembuat'),
            'kapasitas'      => $request->input('identitas.kapasitas'),
            'tahun_pembuatan'=> $request->input('identitas.tahun_pembuatan'),

            // DATA UMUM TAMBAHAN
            'digunakan_untuk'=> $request->input('data_umum.fungsi'),
            'klasifikasi'    => $request->klasifikasi, // Portable / Station
            'izin_pemakai'   => $request->input('data_umum.izin_pemakai'),
            'operator'       => $request->input('data_umum.nama_operator'),
            'riwayat'        => $request->input('data_umum.riwayat'),
        ]);

        return redirect()
            ->route('laporan.penggerak-mula.create')
            ->with('success', 'Laporan Penggerak Mula berhasil disimpan (draft)');
    }

    /**
     * =========================
     * DOWNLOAD PDF
     * =========================
     */
    public function downloadPdf()
    {
        $pdf = Pdf::loadView('laporan.template_penggerakMula')
            ->setPaper([0, 0, 595, 935], 'portrait');

        return $pdf->download('Laporan-Penggerak-Mula.pdf');
    }
}
