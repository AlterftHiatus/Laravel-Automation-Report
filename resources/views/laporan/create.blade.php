<!DOCTYPE html>
<html>

<head>
    <title>Buat Laporan Concrete Mixer</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>

<body>

    <h2>Buat Laporan Concrete Mixer</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="/laporan" method="POST" enctype="multipart/form-data">
        @csrf

        <h3>DATA LAPORAN</h3>

        <label>Nomor Laporan</label><br>
        <input type="text" name="nomor_laporan" value="Diisi manual oleh Office" readonly><br><br>

        <label>Tanggal Pemeriksaan</label><br>
        <input type="date" name="tanggal_pemeriksaan"><br><br>

        <label>Jenis Pemeriksaan</label><br>
        <select name="jenis_pemeriksaan">
            <option value="">-- pilih jenis pemeriksaan --</option>
            <option value="Pertama">Pertama</option>
            <option value="Berkala">Berkala</option>
            <option value="Ulang">Ulang</option>
            <option value="Khusus">Khusus</option>
        </select>

        <label>Nama Pemeriksa</label><br>
        <input type="text" name="nama_pemeriksa" placeholder="Nama pemeriksa"><br><br>

        <br><br>

        <hr>

        <h3>I. Data Umum</h3>

        <label>Perusahaan Pemilik</label><br>
        <input type="text" name="perusahaan_pemilik"><br><br>

        <label>Alamat Pemilik</label><br>
        <textarea name="alamat_pemilik"></textarea><br><br>

        <label>Perusahaan Pemakai</label><br>
        <input type="text" name="perusahaan_pemakai"><br><br>

        <label>Alamat Pemakai</label><br>
        <textarea name="alamat_pemakai"></textarea><br><br>

        <label>Pengurus / Penanggung Jawab</label><br>
        <input type="text" name="penanggung_jawab"><br><br>

        <label>Lokasi Unit</label><br>
        <input type="text" name="lokasi_unit"><br><br>

        <label>Jenis Pesawat / Tipe</label><br>
        <input type="text" name="jenis_pesawat" value="Concrete Mixer" readonly><br><br>

        {{-- <label>Merk / Tipe</label><br>
        <input type="text" name="merk_tipe"><br><br> --}}

        {{-- <label>No. Seri / No. Unit</label><br>
        <input type="text" name="nomor_seri"><br><br> --}}

        {{-- <label>Perusahaan Pembuat / Pemasang</label><br>
        <input type="text" name="pembuat_pemasang"><br><br> --}}
{{-- 
        <label>Tahun Pembuatan</label><br>
        <input type="number" name="tahun_pembuatan"><br><br> --}}

        {{-- <label>Kapasitas</label><br>
        <input type="text" name="kapasitas" placeholder="contoh: 350 Liter"><br><br> --}}

        <label>Digunakan Untuk</label><br>
        <input type="text" name="digunakan_untuk"><br><br>

        <label>Nama / No. Sertifikat Juru Las</label><br>
        <input type="text" name="sertifikat_juru_las"><br><br>

        <label>No. SKP / Bidang PJK3</label><br>
        <input type="text" name="no_skp_pjk3" value="5/521/AS.01.02/IV/2025" readonly><br><br>

        <label>No. SKP / Bidang AK3</label><br>
        <input type="text" name="no_skp_ak3" value="5/24797/AS.01.04/XII/2024" readonly><br><br>

        <label>Sertifikasi Standar</label><br>
        <input type="text" name="sertifikasi_standar"><br><br>

        {{-- <label>Klasifikasi</label><br>
        <input type="text" name="klasifikasi"><br><br> --}}

        <label>Nomor Izin Pemakai</label><br>
        <input type="text" name="nomor_izin_pemakai"><br><br>

        <label>Nama Operator</label><br>
        <input type="text" name="nama_operator"><br><br>

        <label>Data Riwayat Motor Diesel</label><br>
        <textarea name="riwayat_pemeriksaan"></textarea><br><br>

        <hr>

        <h3>II. DATA TEKNIK</h3>

        <label>Merk / Tipe</label><br>
        <input type="text" name="merk_tipe"><br><br>

        <label>Pabrik Pembuat / Negara</label><br>
        <input type="text" name="pembuat_pemasang"><br><br>

        <label>Tahun Pembuatan</label><br>
        <input type="number" name="tahun_pembuatan"><br><br>

        <label>Klasifikasi</label><br>
        <input type="text" name="klasifikasi"><br><br>

        <label>Nomor Seri</label><br>
        <input type="text" name="nomor_seri"><br><br>

        <label>Kapasitas</label><br>
        <input type="text" name="kapasitas" placeholder="contoh: 350 Liter"><br><br>

        <hr>

        <label><strong>Dimensi Mesin</strong></label><br><br>

        <label>Diameter (mm)</label><br>
        <input type="number" name="diameter_mm"><br><br>

        <label>Panjang (mm)</label><br>
        <input type="number" name="panjang_mm"><br><br>

        <label>Tinggi (mm)</label><br>
        <input type="number" name="tinggi_mm"><br><br>

        <hr>

        <label>Power</label><br>
        <input type="text" name="power" placeholder="contoh: 10 PK"><br><br>

        <hr>

        <h3>III. PEMERIKSAAN VISUAL</h3>

        @php
            $currentKategori = null;

            $visualCategories = [
                'Konstruksi Dasar',
                'Struktur Konstruksi',
                'Safety Device',
                'Transmisi dan Bagian-Bagian Unit Mesin',
            ];
        @endphp

        @foreach ($checklists as $item)
            @if (!in_array($item->kategori, $visualCategories))
                @continue
            @endif

            @if ($currentKategori !== $item->kategori)
                <h4>{{ $item->kategori }}</h4>
                @php $currentKategori = $item->kategori; @endphp
            @endif

            <p>
                <strong>{{ $item->nama_item }}</strong><br>

                <!-- KONDISI -->
                <label>Kondisi</label><br>
                <select name="checklist[{{ $item->id }}][hasil]" required>
                    <option value="">-- pilih kondisi --</option>
                    <option value="Baik">Baik</option>
                    <option value="Buruk">Buruk</option>
                    <option value="-">-</option>
                </select><br><br>

                <!-- KETERANGAN -->
                <label>Keterangan</label><br>
                <select name="checklist[{{ $item->id }}][keterangan]">
                    <option value="">-- pilih keterangan --</option>
                    <option value="Kondisi Baik">Kondisi Baik</option>
                    <option value="Kondisi Kuat">Kondisi Kuat</option>
                    <option value="Terpasang dengan baik">Terpasang dengan baik</option>
                    <option value="Terpasang, Kuat">Terpasang, Kuat</option>
                    <option value="Belum terpasang">Belum terpasang</option>
                    <option value="Tidak ada">Tidak ada</option>
                    <option value="N/A">N/A</option>
                </select>

                <hr>
            </p>
        @endforeach

        <hr>

        <h3>IV. PENGUJIAN NDT</h3>

        @foreach ($checklists as $item)
            @if ($item->kategori === 'Pengujian NDT')
                <p>
                    <strong>{{ $item->nama_item }}</strong><br>

                    <label>Hasil</label><br>
                    <input type="text" name="checklist[{{ $item->id }}][hasil]"><br><br>

                    <label>Keterangan</label><br>
                    <input type="text" name="checklist[{{ $item->id }}][keterangan]"
                        placeholder="contoh: Memenuhi / Tidak dilakukan / Tidak memenuhi > 85">

                    <hr>
                </p>
            @endif
        @endforeach


        <hr>

        <h3>V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE</h3>

        @foreach ($checklists as $item)
            @if ($item->kategori === 'Pengukuran dan Pengujian Safety Device')
                <p>
                    <strong>{{ $item->nama_item }}</strong><br>

                    <label>Hasil</label><br>
                    <select name="checklist[{{ $item->id }}][hasil]" required>
                        <option value="">-- pilih hasil --</option>
                        <option value="Baik">Baik</option>
                        <option value="Buruk">Buruk</option>
                        <option value="N/A">N/A</option>
                    </select><br><br>

                    <label>Keterangan</label><br>
                    <input type="text" name="checklist[{{ $item->id }}][keterangan]">

                    <hr>
                </p>
            @endif
        @endforeach


        <hr>

        <h3>Dokumentasi Foto</h3>

        <div id="dokumentasi-wrapper">

            <!-- Dokumentasi pertama (wajib) -->
            <div class="dokumentasi-item">
                <h4>Dokumentasi #1</h4>

                <label>Foto</label><br>
                <input type="file" name="dokumentasi[0][foto]" accept="image/*" required><br><br>

                <label>Keterangan</label><br>
                <input type="text" name="dokumentasi[0][keterangan]" placeholder="contoh: Kondisi mesin"><br><br>

                <hr>
            </div>

        </div>

        <button type="button" onclick="tambahDokumentasi()">+ Tambah Dokumentasi</button>

        <br><br>

        <button type="submit">Simpan Laporan</button>

    </form>

    <script src="{{ asset('js/create.js') }}" defer></script>

</body>

</html>
