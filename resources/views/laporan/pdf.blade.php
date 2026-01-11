<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ public_path('css/concrete_mixer.css') }}">
</head>

<body style="margin-top: 55px; margin-right: 10px; border: 1px solid red;">
    <header>
        <div>
            <img src="{{ public_path('storage/images/header.jpeg') }}" style="width: 595pt;">
        </div>
    </header>

    <div class="watermark">
        <img src="{{ public_path('storage/images/watermark.jpeg') }}" style="width: 100%;">
    </div>

    <footer>
        <div>
            <img src="{{ public_path('storage/images/footer.jpeg') }}" style="width: 595pt;">
        </div>
    </footer>

    <main>
        {{-- ================= SUMMARY REPORT ================= --}}
        <div class="summary-wrapper">

            <h3 style="text-align:center; margin-bottom: 0px; margin-top: 0px; padding-top: 0px;">
                SUMMARY REPORT
            </h3>

            <table class="table-clean" style="border: 1px solid green;">
                <tr>
                    <td class="col-label" style="padding-left: 150px; padding-right: 50px;">No Laporan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value"><span style="background-color: yellow">Diisi Manual Oleh Office</span></td>
                </tr>
                <tr>
                    <td class="col-label" style="padding-left: 150px;">Tanggal Pemeriksaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">
                        {{ \Carbon\Carbon::parse($laporan->tanggal_pemeriksaan)->translatedFormat('d F Y') }}
                    </td>
                </tr>

            </table>

            <p class="judul">Data Umum</p>

            <table class="table-clean">
                <tr>
                    <td class="col-label">Nama Perusahaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->perusahaan_pemilik }}</td>
                </tr>
                <tr>
                    <td class="col-label">Lokasi</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">WORKSHOP</td>
                </tr>
                <tr>
                    <td class="col-label">Alamat Perusahaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">JALAN KENANGA 14 RT 08/RW 04, PEGULON, KENDAL</td>
                </tr>
                <tr>
                    <td class="col-label">Jenis Pemeriksaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">BERKALA</td>
                </tr>
                <tr>
                    <td class="col-label">Pemeriksa</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->nama_pemeriksa ?? 'Belum diisi'}}</td>
                </tr>
            </table>

            <p class="judul">Data Teknis</p>

            <table class="table-clean">
                <tr>
                    <td class="col-label">Merk / Tipe</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">Quad</td>
                </tr>
                <tr>
                    <td class="col-label">Pabrik Pembuat</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">-</td>
                </tr>
                <tr>
                    <td class="col-label">Tahun Pembuatan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">2022</td>
                </tr>
                <tr>
                    <td class="col-label">Nomor Seri</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">003</td>
                </tr>
                <tr>
                    <td class="col-label">Kapasitas</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">350 Liter</td>
                </tr>
            </table>

            <p class="judul">Referensi / Standart</p>

            <table class="table-clean">
                <tr>
                    <td class="col-label">1. Undang-Undang RI No 1 Tahun 1970 tentang Keselamatan Kerja</td>
                </tr>
                <tr>
                    <td class="col-label">2. Peraturan Menteri Tenaga Kerja No 38 Tahun 2016</td>
                </tr>
            </table>

            <p class="judul">Ruang Lingkup Pemeriksaan</p>

            <table class="table-clean">
                <tr>
                    <td class="col-label">1. Pemeriksaan dokumen</td>
                </tr>
                <tr>
                    <td class="col-label">2. Pemeriksaan visual</td>
                </tr>
                <tr>
                    <td class="col-label">3. Pengujian Fungsi</td>
                </tr>
                <tr>
                    <td class="col-label">4. Pengujian Tidak Merusak</td>
                </tr>
                <tr>
                    <td class="col-label">5. Pengujian Beban</td>
                </tr>
            </table>
            <p class="judul" style="text-align: justify; padding-right: 20px;">
                Berdasarkan hasil pemeriksaan dan pengujian
                yang dilakukan dapat disimpulkan bahwa peralatan di
                atas dalam kondisi <strong>Baik dan Memenuhi Syarat Keselamatan dan Kesehatan Kerja (K3)</strong>
            </p>
        </div>
        <div class="ttd_container" style="border: 1px solid rgb(4, 0, 255);">
            <div class="ttd">
                <p>
                    <span>PT CAKRA TEKNIKA SOLUSI</span> <br>
                    <span>SEMARANG</span>
                </p>

                <p>
                    <span>NAUFAL ARYA PRIHANDIKO</span>
                    <br>
                    <span>DIREKTUR</span>
                </p>
            </div>
        </div>
        <div style="page-break-after: always;"></div>

        {{-- ================= BAB 1 ================= --}}
        <div class="bab1_container" style="border: 1px solid rgb(4, 0, 255)">
            <h3 style="text-align:center; margin-top: 0px;">
                BAB I<br>PENDAHULUAN
            </h3>

            <h4 class="sub_bab1 latbel">1.1 Latar Belakang</h4>
            <p>
                Disebutkan di dalam Undang-Undang No. 1 Tahun 1970 bahwa setiap pembuatan,
                percobaan, dan pemakaian mesin, pesawat, alat perkakas, peralatan atau instalasi
                yang berbahaya atau dapat menimbulkan kecelakaan maupun peledakan harus dilakukan
                pengawasan. Terkait dengan pengawasan Keselamatan dan Kesehatan Kerja (K3)
                pada Pesawat Tenaga dan Produksi diatur dalam Peraturan Menteri Tenaga Kerja
                RI Nomor 38 Tahun 2016.
            </p>

            <p>
                Dalam melakukan pengawasan tersebut, Kementerian Ketenagakerjaan Republik Indonesia
                menunjuk Perusahaan Jasa Keselamatan dan Kesehatan Kerja (PJK3) sebagai pihak yang
                berwenang untuk melaksanakan pemeriksaan dan pengujian sesuai dengan regulasi yang
                berlaku serta tunduk dan patuh terhadap peraturan perundang-undangan yang berlaku
                di Negara Republik Indonesia.
            </p>

            <p>
                Tujuan penyusunan Laporan Hasil Pemeriksaan dan Pengujian Pesawat Tenaga dan Produksi
                ini adalah untuk menjalankan amanat undang-undang serta peraturan yang telah
                ditetapkan, sekaligus mewujudkan rasa aman dan nyaman bagi tenaga kerja di lingkungan kerja.
            </p>

            <h4 class="sub_bab1">1.2 Identitas Pesawat Tenaga dan Produksi</h4>
            <p>
                Identitas Pesawat Tenaga dan Produksi jenis mesin yang dilakukan pemeriksaan
                dan pengujian adalah sebagai berikut:
            </p>

            <table>
                <tr>
                    <td>Jenis Pesawat</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporans_data_teknis->jenis_pesawat ?? 'Concrete Mixer' }}</td>
                </tr>
                <tr>
                    <td>Merk / Model</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->dataTeknis->merk_tipe ?? '-' }}</td>
                </tr>
                <tr>
                    <td>No. Seri</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->dataTeknis->nomor_seri ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Pabrik Pembuat</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->dataTeknis->pabrik_pembuat ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Kapasitas</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->dataTeknis->kapasitas ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Tahun Pembuatan</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->dataTeknis->tahun_pembuatan ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Pemilik Pesawat</td>
                    <td style="text-align: center">:</td>
                    <td>{{ $laporan->perusahaan_pemilik }}</td>
                </tr>
            </table>

            <div style="page-break-after: always;"></div>

            <h4 class="sub_bab1" style="margin-top: 0px; padding-top: 0px;">1.3 Dasar Hukum / Referensi</h4>
            <p>
                Dasar hukum yang digunakan dalam pelaksanaan kegiatan pemeriksaan dan pengujian
                terhadap pesawat tenaga dan produksi adalah sebagai berikut:
            </p>

            <div class="container_1_3">
                <ol>
                    <li>Undang-Undang Nomor 1 Tahun 1970 tentang Keselamatan Kerja</li>
                    <li>Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan</li>
                    <li>Peraturan Pemerintah Nomor 50 Tahun 2012 tentang Penerapan Sistem Manajemen
                        Keselamatan dan Kesehatan Kerja</li>
                    <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 04/MEN/1995 tentang
                        Jasa Keselamatan dan Kesehatan Kerja</li>
                    <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 38/MEN/2016 tentang
                        Keselamatan dan Kesehatan Kerja Pesawat Tenaga dan Produksi
                        <br><br>
                        Referensi dan standar lain yang digunakan dalam pelaksanaan pemeriksaan dan pengujian
                        pesawat tenaga dan produksi antara lain:
                        <br>
                        1. Manual book pesawat angkat dan angkut
                        <br>
                        2. Standar internasional dan/atau standar negara lain yang diakui
                    </li>
                </ol>
            </div>

            <h4 class="sub_bab1">1.4 Alat Uji dan Alat Ukur</h4>
            <p>
                Alat uji dan alat ukur yang digunakan dalam pelaksanaan pemeriksaan dan pengujian
                Pesawat Tenaga dan Produksi meliputi:
            </p>

            <ol style="margin-left: 72px;">
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
            <img src="{{ storage_path('app/public/' . $foto->file_path) }}" width="300">
        @endforeach
        <div style="page-break-after: always;"></div>

        {{-- ================= BAB 3 ================= --}}
        <div>
            <h3 style="text-align:center; margin-bottom:20px; ">
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
