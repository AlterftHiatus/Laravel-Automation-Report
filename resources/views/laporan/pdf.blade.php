<!DOCTYPE html>
<html>
<head>
   <style>
    /* ===== PAGE MARGIN (sesuai template PDF) ===== */
    @page {
        margin: 160px 60px 110px 60px;
    }

    /* ===== GLOBAL FONT ===== */
    body {
        font-family: 'cambria', serif;
        font-size: 11px;
        line-height: 1.4;
    }

    /* ===== HEADER ===== */
    header {
        position: fixed;
        top: -140px;
        left: 0;
        right: 0;
        height: 120px;
        text-align: center;
        border-bottom: 2px solid #000;
    }

    /* ===== FOOTER ===== */
    footer {
        position: fixed;
        bottom: -95px;
        left: 0;
        right: 0;
        height: 70px;
        border-top: 2px solid #000;
        text-align: center;
        font-size: 10px;
    }

    /* ===== TABLE ===== */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 12px;
    }

    table, th, td {
        border: 1px solid #000;
    }

    th, td {
        padding: 5px;
        vertical-align: top;
    }

    /* ===== HEADING ===== */
    h3 {
        margin-top: 20px;
        margin-bottom: 12px;
        text-align: center;
    }

    h4 {
        margin-top: 15px;
        margin-bottom: 6px;
    }
</style>

</head>

<body>

<header>
    <strong>PT CAKRA TEKNIKA SOLUSI</strong><br>
    FORMULIR / CHECKLIST PEMERIKSAAN DAN PENGUJIAN MOTOR DIESEL<br>
    (PEMERIKSAAN {{ strtoupper($laporan->jenis_pemeriksaan) }})
</header>

<footer>
    Halaman <span class="pageNumber"></span>
</footer>

<main>
{{-- ================= SUMMARY REPORT ================= --}}
<div style="font-family: Georgia, serif; font-size: 11px;">
    <h3 style="text-align:center; margin-bottom:20px; font-family: Georgia, serif; font-size: 11px;">
        SUMMARY REPORT
    </h3>

    <p style="margin-left:80px;">
        No Laporan <span style="display:inline-block; width:25px;">:</span><br>
        Tanggal Pemeriksaan <span style="display:inline-block; width:25px;">:</span>
    </p>

    <p style="margin-top:15px;"><strong>Data Umum</strong></p>

    <p style="margin-left:80px;">
        Nama Perusahaan <span style="display:inline-block; width:25px;">:</span><br>
        Lokasi <span style="display:inline-block; width:25px;">:</span><br>
        Alamat Perusahaan <span style="display:inline-block; width:25px;">:</span><br>
        Jenis Pemeriksaan <span style="display:inline-block; width:25px;">:</span><br>
        Pemeriksa <span style="display:inline-block; width:25px;">:</span>
    </p>

    <p style="margin-top:15px;"><strong>Data Teknis</strong></p>

    <p style="margin-left:80px;">
        Merk / Tipe <span style="display:inline-block; width:25px;">:</span><br>
        Pabrik Pembuat <span style="display:inline-block; width:25px;">:</span><br>
        Tahun Pembuatan <span style="display:inline-block; width:25px;">:</span><br>
        Nomor Seri <span style="display:inline-block; width:25px;">:</span><br>
        Kapasitas <span style="display:inline-block; width:25px;">:</span>
    </p>

    <p style="margin-top:15px;"><strong>Referensi / Standart</strong></p>

    <p style="margin-left:80px;">
        1. <br>
        2.
    </p>

    <p style="margin-top:15px;"><strong>Ruang Lingkup Pemeriksaan:</strong></p>
    <p style="margin-left:80px;">
        1. Pemeriksaan dokumen<br>
        2. Pemeriksaan visual<br>
        3. Pengujian fungsi<br>
        4. Pengujian tidak merusak<br>
        5. Pengujian beban
    </p>

    <p style="margin-top:15px; text-align:justify;">
        Berdasarkan hasil pemeriksaan dan pengujian yang dilakukan dapat disimpulkan bahwa
        peralatan ini berada dalam kondisi baik dan memenuhi syarat keselamatan dan kesehatan kerja (K3).
    </p>

    <p style="margin-top:40px; text-align:right; margin-right:80px;">
        PT Cakra Teknika Solusi<br>
        Semarang
    </p>

    <p style="margin-top:60px; text-align:right; margin-right:80px;">
        <strong>( ........................................ )</strong><br>
        Direktur
    </p>
</div>

<div style="page-break-after: always;"></div>

{{-- ================= BAB 1 ================= --}}
<div style="font-family: Georgia, serif; font-size: 11px;">
    <h3 style="text-align:center; font-family: Georgia, serif; font-size: 11px;">
        BAB I<br>PENDAHULUAN
    </h3>

    <h4 style="font-family: Georgia, serif; font-size: 11px;">1.1 Latar Belakang</h4>
    <p style="text-align: justify;">
        Disebutkan di dalam Undang-Undang No. 1 Tahun 1970 bahwa setiap pembuatan,
        percobaan, dan pemakaian mesin, pesawat, alat perkakas, peralatan atau instalasi
        yang berbahaya atau dapat menimbulkan kecelakaan maupun peledakan harus dilakukan
        pengawasan. Terkait dengan pengawasan Keselamatan dan Kesehatan Kerja (K3)
        pada Pesawat Tenaga dan Produksi diatur dalam Peraturan Menteri Tenaga Kerja
        RI Nomor 38 Tahun 2016.
    </p>

    <p style="text-align: justify;">
        Dalam melakukan pengawasan tersebut, Kementerian Ketenagakerjaan Republik Indonesia
        menunjuk Perusahaan Jasa Keselamatan dan Kesehatan Kerja (PJK3) sebagai pihak yang
        berwenang untuk melaksanakan pemeriksaan dan pengujian sesuai dengan regulasi yang
        berlaku serta tunduk dan patuh terhadap peraturan perundang-undangan yang berlaku
        di Negara Republik Indonesia.
    </p>

    <p style="text-align: justify;">
        Tujuan penyusunan Laporan Hasil Pemeriksaan dan Pengujian Pesawat Tenaga dan Produksi
        ini adalah untuk menjalankan amanat undang-undang serta peraturan yang telah
        ditetapkan, sekaligus mewujudkan rasa aman dan nyaman bagi tenaga kerja di lingkungan kerja.
    </p>

    <h4 style="font-family: Georgia, serif; font-size: 11px;">1.2 Identitas Pesawat Tenaga dan Produksi</h4>
    <p style="text-align: justify;">
        Identitas Pesawat Tenaga dan Produksi jenis mesin yang dilakukan pemeriksaan
        dan pengujian adalah sebagai berikut:
    </p>

    <table>
        <tr>
            <td width="30%">Jenis Pesawat</td>
            <td>: {{ $laporans_data_teknis->jenis_pesawat ?? 'Concrete Mixer' }}</td>
        </tr>
        <tr>
            <td>Merk / Model</td>
            <td>: {{ $laporan->dataTeknis->merk_tipe ?? '-' }}</td>
        </tr>
        <tr>
            <td>No. Seri</td>
            <td>: {{ $laporan->dataTeknis->nomor_seri ?? '-' }}</td>
        </tr>
        <tr>
            <td>Pabrik Pembuat</td>
            <td>: {{ $laporan->dataTeknis->pabrik_pembuat ?? '-' }}</td>
        </tr>
        <tr>
            <td>Kapasitas</td>
            <td>: {{ $laporan->dataTeknis->kapasitas ?? '-' }}</td>
        </tr>
        <tr>
            <td>Tahun Pembuatan</td>
            <td>: {{ $laporan->dataTeknis->tahun_pembuatan ?? '-' }}</td>
        </tr>
        <tr>
            <td>Pemilik Pesawat</td>
            <td>: {{ $laporan->perusahaan_pemilik }}</td>
        </tr>
    </table>

    <h4 style="font-family: Georgia, serif; font-size: 11px;">1.3 Dasar Hukum / Referensi</h4>
    <p style="text-align: justify;">
        Dasar hukum yang digunakan dalam pelaksanaan kegiatan pemeriksaan dan pengujian
        terhadap pesawat tenaga dan produksi adalah sebagai berikut:
    </p>

    <ol style="margin-left: 20px;">
        <li>Undang-Undang Nomor 1 Tahun 1970 tentang Keselamatan Kerja</li>
        <li>Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan</li>
        <li>Peraturan Pemerintah Nomor 50 Tahun 2012 tentang Penerapan Sistem Manajemen
            Keselamatan dan Kesehatan Kerja</li>
        <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 04/MEN/1995 tentang
            Jasa Keselamatan dan Kesehatan Kerja</li>
        <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 38/MEN/2016 tentang
            Keselamatan dan Kesehatan Kerja Pesawat Tenaga dan Produksi</li>
    </ol>

    <p style="text-align: justify;">
        Referensi dan standar lain yang digunakan dalam pelaksanaan pemeriksaan dan pengujian
        pesawat tenaga dan produksi antara lain:
    </p>

    <ol style="margin-left: 20px;">
        <li>Manual book pesawat angkat dan angkut</li>
        <li>Standar internasional dan/atau standar negara lain yang diakui</li>
    </ol>

    <h4 style="font-family: Georgia, serif; font-size: 11px;">1.4 Alat Uji dan Alat Ukur</h4>
    <p style="text-align: justify;">
        Alat uji dan alat ukur yang digunakan dalam pelaksanaan pemeriksaan dan pengujian
        Pesawat Tenaga dan Produksi meliputi:
    </p>

    <ol style="margin-left: 20px;">
        <li>Meteran gulung</li>
        <li>Lux Meter</li>
        <li>Tacho Meter</li>
        <li>Sound Level Meter</li>
        <li>Vibration Meter</li>
    </ol>
</div>
<div style="page-break-after: always;"></div>

{{-- ================= DATA LAPORAN ================= --}}
<h3>DATA LAPORAN</h3>
<table>
    <tr>
        <td width="30%">Nomor Laporan</td>
        <td>{{ $laporan->nomor_laporan }}</td>
    </tr>
    <tr>
        <td>Tanggal Pemeriksaan</td>
        <td>{{ $laporan->tanggal_pemeriksaan }}</td>
    </tr>
    <tr>
        <td>Jenis Pemeriksaan</td>
        <td>{{ $laporan->jenis_pemeriksaan }}</td>
    </tr>
</table>

{{-- ================= I. DATA UMUM ================= --}}
<h3>I. DATA UMUM</h3>
<table>
    <tr><td>Perusahaan Pemilik</td><td>{{ $laporan->perusahaan_pemilik }}</td></tr>
    <tr><td>Alamat Pemilik</td><td>{{ $laporan->alamat_pemilik }}</td></tr>
    <tr><td>Perusahaan Pemakai</td><td>{{ $laporan->perusahaan_pemakai }}</td></tr>
    <tr><td>Alamat Pemakai</td><td>{{ $laporan->alamat_pemakai }}</td></tr>
    <tr><td>Pengurus / Penanggung Jawab</td><td>{{ $laporan->penanggung_jawab }}</td></tr>
    <tr><td>Lokasi Unit</td><td>{{ $laporan->lokasi_unit }}</td></tr>
    <tr><td>Nama Operator</td><td>{{ $laporan->nama_operator ?? '-' }}</td></tr>
    <tr><td>Nomor Izin Pemakai</td><td>{{ $laporan->nomor_izin_pemakai ?? '-' }}</td></tr>
    <tr><td>Sertifikasi Standar</td><td>{{ $laporan->sertifikasi_standar ?? '-' }}</td></tr>
    <tr><td>Data Riwayat Motor Diesel</td><td>{{ $laporan->riwayat_pemeriksaan ?? '-' }}</td></tr>
</table>

{{-- ================= II. DATA TEKNIK ================= --}}
<h3>II. DATA TEKNIK</h3>
<table>
    <tr><td>Merk / Tipe</td><td>{{ $laporan->dataTeknis->merk_tipe }}</td></tr>
    <tr><td>Pabrik Pembuat / Negara</td><td>{{ $laporan->dataTeknis->pembuat_pemasang }}</td></tr>
    <tr><td>Tahun Pembuatan</td><td>{{ $laporan->dataTeknis->tahun_pembuatan }}</td></tr>
    <tr><td>Klasifikasi</td><td>{{ $laporan->dataTeknis->klasifikasi }}</td></tr>
    <tr><td>Nomor Seri</td><td>{{ $laporan->dataTeknis->nomor_seri }}</td></tr>
    <tr><td>Kapasitas</td><td>{{ $laporan->dataTeknis->kapasitas }}</td></tr>
    <tr>
        <td>Dimensi Mesin</td>
        <td>
            Diameter: {{ $laporan->dataTeknis->diameter_mm }} mm<br>
            Panjang: {{ $laporan->dataTeknis->panjang_mm }} mm<br>
            Tinggi: {{ $laporan->dataTeknis->tinggi_mm }} mm
        </td>
    </tr>
    <tr><td>Power</td><td>{{ $laporan->dataTeknis->power }}</td></tr>
</table>

{{-- ================= III–V CHECKLIST ================= --}}
<h3>HASIL PEMERIKSAAN & PENGUJIAN</h3>

@php
    $currentKategori = null;
@endphp

<table>
    <tr>
        <th width="5%">No</th>
        <th>Komponen</th>
        <th width="15%">Hasil</th>
        <th width="25%">Keterangan</th>
    </tr>

    @foreach ($laporan->checklistResults as $index => $result)
        @if ($currentKategori !== $result->checklistItem->kategori)
            <tr>
                <td colspan="4"><strong>{{ $result->checklistItem->kategori }}</strong></td>
            </tr>
            @php $currentKategori = $result->checklistItem->kategori; @endphp
        @endif

        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $result->checklistItem->nama_item }}</td>
            <td>{{ $result->hasil }}</td>
            <td>{{ $result->keterangan }}</td>
        </tr>
    @endforeach
</table>

{{-- ================= DOKUMENTASI ================= --}}
<h3>DOKUMENTASI FOTO</h3>

@foreach ($laporan->fotos as $foto)
    <p>{{ $foto->keterangan }}</p>
    <img src="{{ storage_path('app/public/'.$foto->file_path) }}" width="300">
@endforeach
<div style="page-break-after: always;"></div>

{{-- ================= BAB 3 ================= --}}
<div style="font-family: Georgia, serif; font-size: 11px;">
    <h3 style="text-align:center; margin-bottom:20px; font-family: Georgia, serif; font-size: 11px;">
        BAB III<br>
        HASIL DAN KESIMPULAN
    </h3>

    <p><strong>3.1 Temuan</strong></p>

    <p style="margin-left:40px;">
        1. <br>
    </p>

    <p style="margin-top:15px;"><strong>3.2 Rekomendasi</strong></p>

    <p style="margin-left:40px;">
        1. <br>
        2. <br>
        3. <br>
        4. <br>
    </p>

    <p style="margin-top:15px;"><strong>3.3 Kesimpulan</strong></p>

    <p style="text-align:justify; margin-left:40px;">
        
    </p>

    <p style="margin-top:15px;"><strong>3.4 Syarat-syarat dan Ketentuan</strong></p>

    <p style="margin-left:40px;">
        1. <br>
        2. <br>
        3. <br>
        4. <br>
        5. <br>
        6. <br>
        7. <br>
        8. <br>
        9. <br>
        10.
    </p>

    <p style="margin-top:30px; text-align:right; margin-right:80px;">
        Semarang, ....................................
    </p>

    <p style="margin-top:40px; text-align:right; margin-right:80px;">
        PT. Cakra Teknika Solusi<br>
        Yang Memeriksa dan Menguji<br>
        <strong>Ahli K3 Bidang<br>
        Pesawat Tenaga dan Produksi</strong>
    </p>

    <p style="margin-top:60px; text-align:right; margin-right:80px;">
        <strong>( ........................................ )</strong><br>
        No. SKP :
    </p>
</div>

</main>

</body>
</html>
