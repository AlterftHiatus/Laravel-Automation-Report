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
            top: -150px;
            left: -40px;
            right: -40px;
            height: 120px;
            text-align: center;
            /* border-bottom: 2px solid #000; */
        }

        /* FIXED HEADER */
        /* .header {
            position: fixed;
            top: -160px;
            left: 0px;
            right: 0px;
            height: 150px;
            width: 100%;
        } */

        .yellow-bar {
            background-color: #d4c017;
            height: 35px;
            width: 100%;
        }

        .header-table {
            width: 100%;
            border: none !important;
        }

        .header-table td {
            border: none !important;
            vertical-align: middle;
        }

        .logo-col {
            width: 40%;
            padding-top: 15px;
        }

        .info-col {
            width: 50%;
            text-align: right;
            padding-top: 15px;
            padding-right: 120px;
        }

        .info-line {
            border-bottom: 1px solid #999;
            margin-bottom: 8px;
            padding-bottom: 8px;
            display: block;
        }

        /* PANEL HIJAU (Gaya Sidebar Kanan) */
        .green-panel {
            position: absolute;
            top: 0;
            right: 70px;
            width: 40px;
            height: 160px;
            background-color: #0b7d3f;
            text-align: center;
            padding-top: 15px;
        }

        .icon-text {
            color: white;
            font-size: 18px;
            margin-bottom: 15px;
            display: block;
        }

        /* ===== WATERMARK ===== */
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            z-index: -1;
            width: 80%;
        }

        /* ===== FOOTER ===== */
        footer {
            position: fixed;
            bottom: -95px;
            left: -40px;
            right: -40px;
            height: 40px;
            text-align: center;
            font-size: 10px;
            width: 100%;
            background-color: #000;
        }

        .footer-layer-wrapper {
            position: fixed;
            bottom: -120px;
            left: -40px;
            right: -40px;
            height: 90px;
            width: 100%;
            overflow: hidden;
        }

        /* Pengaturan umum untuk setiap lapisan */
        .layer {
            position: absolute;
            bottom: 0;
            height: 100%;
            width: 100%;
        }

        /* Lapisan Hijau Paling Atas (Garis Tipis) */
        .layer-green-top {
            border-radius: 0 15px 0 0;
            height: 10px;
            top: 15px;
            background-color: #008744;
            /* Hijau Tua */
        }

        /* Lapisan Abu-abu */
        .layer-gray {
            border-radius: 0 15px 0 0;
            background-color: #eeeeee;
            top: 35px;
            height: 45px;
            width: 55%;
            bottom: 0;
            clip-path: polygon(0 0, 62% 0, 65% 100%, 0% 100%);
        }

        /* Lapisan Kuning/Emas */
        .layer-gold {
            border-radius: 0 15px 0 0;
            background-color: #d4c000;
            bottom: 0;
            height: 40px;
            width: 50%;
            clip-path: polygon(0 0, 70% 0, 75% 100%, 0% 100%);
            z-index: 2;
        }

        /* Lapisan Hijau Besar di Sisi Kanan */
        .layer-green-main {
            border-radius: 0 15px 0 0;
            background-color: #008744;
            right: 0;
            width: 30%;
            height: 100%;
            top: 15px;
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 30% 100%);
            z-index: 3;
        }

        /* ===== TABLE ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
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

    <header class="header">
        <div class="yellow-bar"></div>

        <table class="header-table">
            <tr>
                <td class="logo-col">
                    <img src="{{ public_path('storage/images/logo_cakra.png') }}" style="width: 130px;">
                </td>
                <td class="info-col">
                    <span class="info-line">+62 856 4042 4888</span>
                    <span class="info-line">info@cakrateknika.com</span>
                    <div style="font-size: 10px; margin-top: 5px;">
                        Jalan Bukit Wato-Wato VII Blok B2A/14<br>
                        Permata Puri, Beringin, Ngaliyan, Semarang
                    </div>
                </td>
            </tr>
        </table>

        <div class="green-panel">
            <div class="icon-text">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIGNsYXNzPSJiaSBiaS1waG9uZS1maWxsIiB2aWV3Qm94PSIwIDAgMTYgMTYiPgogIDxwYXRoIGQ9Ik0zIDJhMiAyIDAgMCAxIDItMmg2YTIgMiAwIDAgMSAyIDJ2MTJhMiAyIDAgMCAxLTIgMmgtNmEyIDIgMCAwIDEtMi0yVjJ6bTYgMTFhMSAxIDAgMSAwIDAtMiAxIDEgMCAwIDAgMCAyeiIvPgo8L3N2Zz4=" width="18">
            </div>

            <div class="icon-text">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIGNsYXNzPSJiaSBiaS1nbG9iZSIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNMCA4YTggOCAwIDEgMSAxNiAwQTggOCAwIDAgMSAwIDh6bTcuNSA2LjkyM2MtLjk2LS4zOTktMS43NjUtMS4wNTYtMi4zNDYtMS45MDhBNi43MTEgNi43MTEgMCAwIDEgNy41IDE0LjkyM3pNMTAuNDU1IDEzYTIuMDcyIDIuMDcyIDAgMCAwIC40OTYtMS4xNThIMTQuMzhhNi43MiA2LjcyIDAgMCAxLTMuOTI1IDMuMDc5em0yLjQ1MS0yLjExSDkuMjE3YTUuNTEzIDUuNTEzIDAgMCAwIC40OTItMi40MjNoNC4zMjJhNi43IDYuNyAwIDAgMS0xLjYzIDIuNDIzek0xNC4wMyA3aC00LjMzNWE1LjUxIDUuNTEgMCAwIDAtLjQ5Mi0yLjQyM2gzLjE5N0E2LjcwMSA2LjcwMSAwIDAgMSAxNC4wMyA3ek0xMC40NTUgM2EyLjA3OCAyLjA3OCAwIDAgMC0uNDk2IDEuMTU4SDE0LjM4QTYuNzIgNi43MiAwIDAgMCAxMC40NTUgM3pNNy41IDEuMDc3Yy0uOTYtLjM5OS0xLjc2NS0xLjA1Ni0yLjM0Ni0xLjkwOEE2LjcxMSA2LjcxMSAwIDAgMSA3LjUgMS4wNzd6TTQuNDY1IDYuOTU1SDEuOTdhNi43IDYuNyAwIDAgMSAxLjYzLTIuNDIzaDMuMTk3YTkuMTQ5IDkuMTQ5IDAgMCAwLS4zMzIgMi40MjN6bTAgMi4wOUgxLjk3YTYuNyA2LjcgMCAwIDAgMS42MyAyLjQyM2gzLjE5N2E5LjE0OSA5LjE0OSAwIDAgMS0uMzMyLTIuNDIzek0xLjk3IDcuNWguMDA1YTYuNzUgNi43NSAwIDAgMC0uMDIuNTA3TDQuMDkgOC40NTNBNi45IDYuOSAwIDAgMSA0IDguNWgtLjAwNWE2Ljk1IDYuOTUgMCAwIDEgMC0xLjA0N0g0LjA5YTYuOSA2LjkgMCAwIDEgLjA3MS45NTRsLTIuMTk1LS40Nzd6bTEyLjA2IDBIMTIuMDlhNi45IDYuOSAwIDAgMSAuMDcxLS45NTRsMi4xOTUuNDc3YTYuNzUgNi43NSAwIDAgMC0uMDItLjUwN0gxNC4wM2E2LjcwMSA2LjcwMSAwIDAgMSAwIDEuMDR6Ii8+Cjwvc3ZnPg==" width="18">
            </div>

            <div class="icon-text">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIGNsYXNzPSJiaSBiaS1nZW8tYWx0LWZpbGwiIHZpZXdCb3g9i00IDAgMTYgMTYiPgogIDxwYXRoIGQ9Ik04IDE2czYtNS42ODYgNi0xMEE2IDYgMCAwIDAgMiA2YzAgNC4zMTQgNiAxMCA2IDEwek04IDhhMiAyIDAgMSAxIDAtNCAyIDIgMCAwIDEgMCA0eiIvPgo8L3N2Zz4=" width="18">
            </div>
        </div>
    </header>

    <div class="watermark">
        <img src="{{ public_path('storage/images/logo_cakra.png') }}" style="width: 100%;">
    </div>

    <footer class="footer-layer-wrapper">
        <div class="layer layer-gray"></div>
        <div class="layer layer-green-top"></div>
        <div class="layer layer-green-main"></div>
        <div class="layer layer-gold"></div>
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
            <tr>
                <td>Perusahaan Pemilik</td>
                <td>{{ $laporan->perusahaan_pemilik }}</td>
            </tr>
            <tr>
                <td>Alamat Pemilik</td>
                <td>{{ $laporan->alamat_pemilik }}</td>
            </tr>
            <tr>
                <td>Perusahaan Pemakai</td>
                <td>{{ $laporan->perusahaan_pemakai }}</td>
            </tr>
            <tr>
                <td>Alamat Pemakai</td>
                <td>{{ $laporan->alamat_pemakai }}</td>
            </tr>
            <tr>
                <td>Pengurus / Penanggung Jawab</td>
                <td>{{ $laporan->penanggung_jawab }}</td>
            </tr>
            <tr>
                <td>Lokasi Unit</td>
                <td>{{ $laporan->lokasi_unit }}</td>
            </tr>
            <tr>
                <td>Nama Operator</td>
                <td>{{ $laporan->nama_operator ?? '-' }}</td>
            </tr>
            <tr>
                <td>Nomor Izin Pemakai</td>
                <td>{{ $laporan->nomor_izin_pemakai ?? '-' }}</td>
            </tr>
            <tr>
                <td>Sertifikasi Standar</td>
                <td>{{ $laporan->sertifikasi_standar ?? '-' }}</td>
            </tr>
            <tr>
                <td>Data Riwayat Motor Diesel</td>
                <td>{{ $laporan->riwayat_pemeriksaan ?? '-' }}</td>
            </tr>
        </table>

        {{-- ================= II. DATA TEKNIK ================= --}}
        <h3>II. DATA TEKNIK</h3>
        <table>
            <tr>
                <td>Merk / Tipe</td>
                <td>{{ $laporan->dataTeknis->merk_tipe }}</td>
            </tr>
            <tr>
                <td>Pabrik Pembuat / Negara</td>
                <td>{{ $laporan->dataTeknis->pembuat_pemasang }}</td>
            </tr>
            <tr>
                <td>Tahun Pembuatan</td>
                <td>{{ $laporan->dataTeknis->tahun_pembuatan }}</td>
            </tr>
            <tr>
                <td>Klasifikasi</td>
                <td>{{ $laporan->dataTeknis->klasifikasi }}</td>
            </tr>
            <tr>
                <td>Nomor Seri</td>
                <td>{{ $laporan->dataTeknis->nomor_seri }}</td>
            </tr>
            <tr>
                <td>Kapasitas</td>
                <td>{{ $laporan->dataTeknis->kapasitas }}</td>
            </tr>
            <tr>
                <td>Dimensi Mesin</td>
                <td>
                    Diameter: {{ $laporan->dataTeknis->diameter_mm }} mm<br>
                    Panjang: {{ $laporan->dataTeknis->panjang_mm }} mm<br>
                    Tinggi: {{ $laporan->dataTeknis->tinggi_mm }} mm
                </td>
            </tr>
            <tr>
                <td>Power</td>
                <td>{{ $laporan->dataTeknis->power }}</td>
            </tr>
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