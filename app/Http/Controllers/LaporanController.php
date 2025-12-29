<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\LaporanDataTeknis;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        // Simpan laporan
        $laporan = Laporan::create([
            'nomor_laporan'       => $request->nomor_laporan,
            'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
            'jenis_laporan'       => 'Concrete Mixer', // otomatis
            'nama_perusahaan'     => $request->nama_perusahaan,
            'alamat_lokasi'       => $request->alamat_lokasi,
            'jenis_pemeriksaan'   => $request->jenis_pemeriksaan,
            'nama_pemeriksa'      => $request->nama_pemeriksa,
            'status_laporan'      => 'draft',
        ]);

        // Simpan data teknis
        LaporanDataTeknis::create([
            'laporan_id'      => $laporan->id,
            'jenis_pesawat'   => 'Concrete Mixer',
            'merk_tipe'       => $request->merk_tipe,
            'nomor_seri'      => $request->nomor_seri,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'kapasitas'       => $request->kapasitas,
            'dimensi'         => $request->dimensi,
            'power'           => $request->power,
        ]);

        return redirect('/laporan/create')->with('success', 'Laporan berhasil disimpan');
    }
}
