<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ public_path('css/concrete_mixer.css') }}">
</head>

<body style="margin-top: 55px; margin-right: 10px; margin-bottom: 0px; padding-bottom: 0px;">
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
            <br>

            <table class="table-clean">
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
                    <td class="col-value" style="text-transform: uppercase;">{{ $laporan->perusahaan_pemilik }}</td>
                </tr>
                <tr>
                    <td class="col-label">Lokasi Unit</td>
                    <td class="col-colon">:</td>
                    <td class="col-value" style="text-transform: uppercase;">{{ $laporan->lokasi_unit }}</td>
                </tr>
                <tr>
                    <td class="col-label">Alamat Perusahaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value" style="text-transform: uppercase;">{{ $laporan->alamat_pemilik }}</td>
                </tr>
                <tr>
                    <td class="col-label">Jenis Pemeriksaan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value" style="text-transform: uppercase;">{{ $laporan->jenis_pemeriksaan }}</td>
                </tr>
                <tr>
                    <td class="col-label">Pemeriksa</td>
                    <td class="col-colon">:</td>
                    <td class="col-value" style="text-transform: uppercase;">
                        {{ $laporan->nama_pemeriksa ?? 'Belum diisi' }}</td>
                </tr>
            </table>

            <p class="judul">Data Teknis</p>

            <table class="table-clean">
                <tr>
                    <td class="col-label">Merk / Tipe</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->dataTeknis->merk_tipe ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="col-label">Pabrik Pembuat</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->dataTeknis->pembuat_pemasang ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="col-label">Tahun Pembuatan</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->dataTeknis->tahun_pembuatan ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="col-label">Nomor Seri</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->dataTeknis->nomor_seri }}</td>
                </tr>
                <tr>
                    <td class="col-label">Kapasitas</td>
                    <td class="col-colon">:</td>
                    <td class="col-value">{{ $laporan->dataTeknis->kapasitas }}</td>
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
        <div class="ttd_container">
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
        <div class="bab1_container">
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
                    <td>{{ $laporan->dataTeknis->pembuat_pemasang ?? '-' }}</td>
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

            <h4 class="sub_bab1" style="margin-top: 0px; padding-top: 0px; margin-bottom: 0px;">1.3 Dasar Hukum /
                Referensi</h4>


            <div class="container_1_3">

                <p style=" text-align: justify; text-indent: 30px; padding-left: 20px; padding-right: 0px;">
                    Dasar hukum yang digunakan dalam pelaksanaan kegiatan pemeriksaan dan pengujian
                    terhadap pesawat tenaga dan produksi adalah sebagai berikut:
                </p>

                <ol>
                    <li>Undang-Undang Nomor 1 Tahun 1970 tentang Keselamatan Kerja</li>
                    <li>Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan</li>
                    <li>Peraturan Pemerintah Nomor 50 Tahun 2012 tentang Penerapan Sistem Manajemen
                        Keselamatan dan Kesehatan Kerja</li>
                    <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 04/MEN/1995 tentang
                        Jasa Keselamatan dan Kesehatan Kerja</li>
                    <li>Peraturan Menteri Tenaga Kerja Republik Indonesia Nomor 38/MEN/2016 tentang
                        Keselamatan dan Kesehatan Kerja Pesawat Tenaga dan Produksi
                        <br>
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

        {{-- ================= BAB 2 ================= --}}
        <h3 style="text-align:center; margin-top: 0px; margin-bottom: 20px;">
            BAB II<br>LAPORAN HASIL PEMERIKSAAN DAN PENGUJIAN
            <br>
        </h3>

        <table class="data-table" style="margin-bottom: 20px">
            <thead>
                <tr>
                    <th colspan="3">PEMERIKSAAN DAN PENGUJIAN MOTOR DIESEL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="label">Yang Memeriksa</td>
                    <td class="colon"></td>
                    <td class="value"></td>
                </tr>
                <tr>
                    <td class="label">Nama</td>
                    <td class="colon">:</td>
                    <td class="value">{{ $laporan->nama_pemeriksa ?? 'Belum diisi' }}</td>
                </tr>
                <tr>
                    <td class="label">No.Kep</td>
                    <td class="colon">:</td>
                    <td class="value">5/24797/AS.01.04/XII/2024</td>
                </tr>
                <tr>
                    <td class="label">Bidang</td>
                    <td class="colon">:</td>
                    <td class="value">Pesawat Tenaga dan Produksi</td>
                </tr>
                <tr>
                    <td class="label">Pelaksanaan</td>
                    <td class="colon">:</td>
                    <td class="value">
                        {{ \Carbon\Carbon::parse($laporan->tanggal_pemeriksaan)->translatedFormat('d F Y') }}
                    </td>
                </tr>
                <tr>
                    <td class="label">Jenis Pemeriksaan</td>
                    <td class="colon">:</td>
                    <td class="value">{{ $laporan->jenis_pemeriksaan }}</td>
                </tr>
            </tbody>
        </table>

        {{-- ================= I. DATA UMUM ================= --}}
        <div class="container_data_umum">
            <table class="table_data_umum" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th colspan="3" class="th1">FORMULIR/CHECHLIST PEMERIKSAAN DAN PENGUJUAN MOTOR DIESEL
                            <br> ( PEMERIKSAAN {{ $laporan->jenis_pemeriksaan }} )
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: left; padding: 8px 10px;">I. DATA UMUM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no">1</td>
                        <td class="label">Perusahaan Pemilik</td>
                        <td class="value">{{ $laporan->perusahaan_pemilik }}</td>
                    </tr>
                    <tr>
                        <td class="no">2</td>
                        <td class="label">Alamat Pemilik</td>
                        <td class="value">{{ $laporan->alamat_pemilik }}</td>
                    </tr>
                    <tr>
                        <td class="no">3</td>
                        <td class="label">Perusahaan Pemakai</td>
                        <td class="value">{{ $laporan->perusahaan_pemakai }}</td>
                    </tr>
                    <tr>
                        <td class="no">4</td>
                        <td class="label">Alamat Pemakai</td>
                        <td class="value">{{ $laporan->alamat_pemakai }}</td>
                    </tr>
                    <tr>
                        <td class="no">5</td>
                        <td class="label">Pengurus / Penanggung Jawab</td>
                        <td class="value">{{ $laporan->penanggung_jawab }}</td>
                    </tr>
                    <tr>
                        <td class="no">6</td>
                        <td class="label">Lokasi Unit</td>
                        <td class="value">{{ $laporan->lokasi_unit }}</td>
                    </tr>
                    <tr>
                        <td class="no">7</td>
                        <td class="label">Jenis Pesawat / Tipe</td>
                        <td class="value">{{ $laporans_data_teknis->jenis_pesawat ?? 'Concrete Mixer' }}</td>
                    </tr>
                    <tr>
                        <td class="no">8</td>
                        <td class="label">Merek / Tipe</td>
                        <td class="value">{{ $laporan->dataTeknis->merk_tipe ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">9</td>
                        <td class="label">No. Seri / No. Unit</td>
                        <td class="value">{{ $laporan->dataTeknis->nomor_seri ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">10</td>
                        <td class="label">Perusahaan Pembuat</td>
                        <td class="value">{{ $laporan->dataTeknis->pembuat_pemasang ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">11</td>
                        <td class="label">Tahun Pembuatan</td>
                        <td class="value">{{ $laporan->dataTeknis->tahun_pembuatan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">12</td>
                        <td class="label">Kapasitas</td>
                        <td class="value">{{ $laporan->dataTeknis->kapasitas ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">13</td>
                        <td class="label">Digunakan Untuk</td>
                        <td class="value">{{ $laporan->dataTeknis->digunakan_untuk ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">14</td>
                        <td class="label">Nama / No.Sertifikat Juru Las</td>
                        <td class="value">{{ $laporan->sertifikat_juru_las ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">15</td>
                        <td class="label">No. SKP / Bidang PJK3</td>
                        <td class="value">{{ $laporan->no_skp_pjk3 ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">16</td>
                        <td class="label">No. SKP / Bidang AK3</td>
                        <td class="value">{{ $laporan->no_skp_ak3 ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">17</td>
                        <td class="label">Sertifikasi Standar</td>
                        <td class="value">{{ $laporan->sertifikasi_standar ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">18</td>
                        <td class="label">Klasifikasi</td>
                        <td class="value">{{ $laporan->dataTeknis->klasifikasi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">19</td>
                        <td class="label">Nomor Izin Pemakai</td>
                        <td class="value">{{ $laporan->nomor_izin_pemakai ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">20</td>
                        <td class="label">Nama Operator</td>
                        <td class="value">{{ $laporan->nama_operator ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">21</td>
                        <td class="label">Data Riwayat Motor Diesel</td>
                        <td class="value">{{ $laporan->riwayat_pemeriksaan ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- ================= II. DATA TEKNIK ================= --}}
        <br>
        <br>

        <div class="container_data_umum">
            <table class="table_data_umum">
                <thead>
                    <tr>
                        <th colspan="3" style="text-align: left; padding: 8px 10px;">II. DATA TEKNIK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no">1</td>
                        <td class="label">Merk / Tipe</td>
                        <td class="value">{{ $laporan->dataTeknis->merk_tipe }}</td>
                    </tr>
                    <tr>
                        <td class="no">2</td>
                        <td class="label">Pabrik Pembuat / Negara</td>
                        <td class="value">{{ $laporan->dataTeknis->pembuat_pemasang ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="no">3</td>
                        <td class="label">Tahun Pembuatan</td>
                        <td class="value">{{ $laporan->dataTeknis->tahun_pembuatan }}</td>
                    </tr>
                    <tr>
                        <td class="no">4</td>
                        <td class="label">Klasifikasi</td>
                        <td class="value">{{ $laporan->dataTeknis->klasifikasi }}</td>
                    </tr>
                    <tr>
                        <td class="no">5</td>
                        <td class="label">Nomor Seri</td>
                        <td class="value">{{ $laporan->dataTeknis->nomor_seri }}</td>
                    </tr>
                    <tr>
                        <td class="no">6</td>
                        <td class="label">Kapasitas</td>
                        <td class="value">{{ $laporan->dataTeknis->kapasitas }}</td>
                    </tr>
                    <tr>
                        <td class="no">7</td>
                        <td class="label">Dimensi Mesin</td>
                        <td class="value"></td>
                    </tr>
                    <tr>
                        <td class="no"></td>
                        <td class="label">Diameter</td>
                        <td class="value">{{ $laporan->dataTeknis->diameter_mm }} mm</td>
                    </tr>
                    <tr>
                        <td class="no"></td>
                        <td class="label">Panjang</td>
                        <td class="value">{{ $laporan->dataTeknis->panjang_mm }} mm</td>
                    </tr>
                    <tr>
                        <td class="no"></td>
                        <td class="label">Tinggi</td>
                        <td class="value">{{ $laporan->dataTeknis->tinggi_mm }} mm</td>
                    </tr>
                    <tr>
                        <td class="no">8</td>
                        <td class="label">Power</td>
                        <td class="value">{{ $laporan->dataTeknis->power }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- ================= III CHECKLIST ================= --}}

        <div style="page-break-after: always;"></div>

        <div class="container_checklist">
            @php
                $kategoriMap = [
                    'Konstruksi Dasar' => 'A. Konstruksi Dasar',
                    'Struktur Konstruksi' => 'B. Struktur Konstruksi',
                    'Safety Device' => 'C. Safety Device',
                    'Transmisi dan Bagian-Bagian Unit Mesin' => 'D. Transmisi dan Bagian-Bagian Unit Mesin',
                ];

                $allowedKategori = array_keys($kategoriMap);
                $currentKategori = null;
                $no = 1;
            @endphp

            <table class="table_checklist">
                {{-- HEADER BARIS 1 --}}
                <tr class="tr1">
                    <th colspan="5">III. PEMERIKSAAN VISUAL</th>
                </tr>
                <tr class="tr2">
                    <th rowspan="2" width="25px">No</th>
                    <th rowspan="2">Komponen</th>
                    <th colspan="2">Kondisi</th>
                    <th rowspan="2">Keterangan</th>
                </tr>

                {{-- HEADER BARIS 2 --}}
                <tr class="tr2">
                    <th width="9%">Baik</th>
                    <th width="9%">Buruk</th>
                </tr>

                @foreach ($laporan->checklistResults as $result)
                    {{-- FILTER HANYA 4 BAGIAN --}}
                    @if (!in_array($result->checklistItem->kategori, $allowedKategori))
                        @continue
                    @endif

                    {{-- JUDUL KATEGORI --}}
                    @if ($currentKategori !== $result->checklistItem->kategori)
                        <tr>
                            <td colspan="5">
                                <strong
                                    style="padding-left: 10px;">{{ $kategoriMap[$result->checklistItem->kategori] }}</strong>
                            </td>
                        </tr>
                        @php
                            $currentKategori = $result->checklistItem->kategori;
                            $no = 1;
                        @endphp
                    @endif

                    <tr>
                        <td align="center">{{ $no++ }}</td>
                        <td style="padding-left: 10px;">{{ $result->checklistItem->nama_item }}</td>

                        {{-- KOLOM BAIK --}}
                        <td style="text-align: center; vertical-align: middle;">
                            @if ($result->hasil === 'Baik')
                                <img src="{{ public_path('storage/images/checklist.png') }}"
                                    style="width: 20px; height: 20px;">
                            @elseif ($result->hasil === '-')
                                -
                            @elseif ($result->hasil === 'Buruk')
                                -
                            @endif
                        </td>

                        {{-- KOLOM BURUK --}}
                        <td align="center">
                            @if ($result->hasil === 'Buruk')
                                <img src="{{ public_path('storage/images/checklist.png') }}"
                                    style="width: 20px; height: 20px;">
                            @elseif ($result->hasil === '-')
                                -
                            @elseif ($result->hasil === 'Baik')
                                -
                            @endif
                        </td>

                        {{-- KETERANGAN --}}
                        <td style="text-align: center">{{ $result->keterangan ?? '-' }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        {{-- ================= IV. PENGUJIAN NDT ================= --}}
        @php
            $kategoriNDT = 'Pengujian NDT';
            $no = 1;
        @endphp

        <table class="table_pengujian_ndt" style="margin-bottom: 35px">
            <tr>
                <th colspan="4" style="text-align: left; padding-left: 10px;">IV. PENGUJIAN NDT</th>
            </tr>
            <tr>
                <th width="25px">No</th>
                <th>Komponen yang diuji</th>
                <th width="20%">Hasil</th>
                <th width="35%">Keterangan</th>
            </tr>

            @foreach ($laporan->checklistResults as $result)
                @if ($result->checklistItem->kategori !== $kategoriNDT)
                    @continue
                @endif

                <tr>
                    <td align="center">{{ $no++ }}</td>
                    <td style="padding-left: 10px">{{ $result->checklistItem->nama_item }}</td>
                    <td align="center">{{ $result->hasil ?? '-' }}</td>
                    <td align="center">{{ $result->keterangan ?? '-' }}</td>
                </tr>
            @endforeach
        </table>

        {{-- ================= V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE ================= --}}

        @php
            $kategoriSafetyPengujian = 'Pengukuran dan Pengujian Safety Device';
            $no = 1;
        @endphp

        <table>
            <tr>
                <th colspan="4" style="text-align: left; padding-left: 10px;">V. PENGUKURAN DAN PENGUJIAN SAFETY
                    DEVICE</th>
            </tr>
            <tr>
                <th width="5%">No</th>
                <th>Komponen</th>
                <th width="20%">Hasil</th>
                <th width="35%">Keterangan</th>
            </tr>

            @foreach ($laporan->checklistResults as $result)
                @if ($result->checklistItem->kategori !== $kategoriSafetyPengujian)
                    @continue
                @endif

                <tr>
                    <td align="center">{{ $no++ }}</td>
                    <td style="padding-left: 10px">{{ $result->checklistItem->nama_item }}</td>
                    <td align="center">{{ $result->hasil }}</td>
                    <td align="center">{{ $result->keterangan ?? '-' }}</td>
                </tr>
            @endforeach
        </table>


        <div style="page-break-after: always;"></div>

        {{-- ================= BAB 3 ================= --}}
        <div class="bab3_container" style="margin-bottom:0px; margin-top:0px; pqadding-top:0px;">
            <h3 style="text-align:center; margin-top: 0px; padding-top: 0px;">
                BAB III<br>
                HASIL DAN KESIMPULAN
            </h3>

            @php
                $kebisingan = $laporan->checklistResults->firstWhere('checklistItem.nama_item', 'Kebisingan');
            @endphp

            <p><strong>I. TEMUAN</strong></p>

            <ol>
                <li>Hasil pengukuran kebisingan suara genset di dalam ruang genset adalah
                    <strong>{{ $kebisingan->hasil ?? '-' }}</strong>
                </li>
            </ol>

            <p><strong>II. REKOMENDASI</strong></p>

            <ol>
                <li>Area kerja Concreate Mixer harus dalam keadaan bersih</li>
                <li>Petugas Operator Concreate Mixer harus memenuhi syarat Keselamatan dan Kesehatan Kerja, dan memiliki
                    kemampuan teknis yang diperlukan</li>
                <li>Petugas atau operator motor diesel wajib memakai APD (Ear Plug) ketika mengoperasikan motor diesel
                </li>
                <li>Menambahkan Apar di dekat ruang Concreate Mixer.</li>
            </ol>

            <p><strong>III. KESIMPULAN</strong></p>

            <p class="p_kesimpulan">
                Dari hasil pemeriksaan dan pengujian tersebut diatas dinyatakan bahwa <b>CONREATE MIXER MEMENUHI
                    PERSYARATAN KESELAMATAN DAN KESEHATAN KERJA</b>. Genset boleh dioperasikan sebagaimana fungsinya dan
                harus dilaksanakan perbaikan-perbaikan yang direkomendasikan.
            </p>

            <p><strong>IV. SYARAT-SYARAT DAN KETENTUAN</strong></p>

            <ol>
                <li>Sebelum concreate mixer ini dioperasikan, semua perlengkapan pengamanan dan peralatannya harus
                    diperiksa/dichek terlebih dahulu oleh operator</li>
                <li>Prosedur perawatan dan pengoperasian aman harus sesuai dengan <i>Manual Book</i> (Buku Petunjuk
                    Pabrik Pembuat)</li>
                <li>Kondisi area kerja dalam keadaan baik dan ruang sekitarnya dalam kondisi bersih.</li>
                <li>Operator yang mengoperasikan diwajibkan memiliki Sertifikat dari Kemnaker RI</li>
                <li>Operator/orang yang memasuki ruang genset/Pembangkitan Listrik harus diwajibkan memakai peralatan
                    pelindung diri (APD) sesuai dengan ketentuan yang ditetapkan dan memasang tanda berbahaya / larangan
                    yang membahayakan serta menjaga kebersihan ruang diesel/genset.</li>
                <li>Perusahaan wajib memperhatikan Alat Pemadam Api Ringan (APAR)</li>
                <li>Perusahaan wajib menyediakan dan menempatkan Alat Pelindung Diri (APD) berupa Ear Muff, Safety
                    Helmet, Safety Shoes, Safety Vest, Safety Glooves/Sarung Tangan, Safety Googles/Kacamata Pelindung
                    saat mau merawat/mengoperasikan mesin.</li>
                <li>Diwajibkan membuat SOP / Standar Operasional Prosedur saat pengoperasian mesin.</li>
                <li>Apabila ada perubahan konstruksi/perbaikan konstruksi harus melapor Instansi Ketenagakerjaan
                    setempat.</li>
                <li>Concreate mixer dilaksanakan pemeriksaan berkala dilaksanakan <b>1 (satu) tahun sekali</b>.
                    Pemeriksaan dan pengujian selanjutnya dilaksanakan paling lambat 27 Agustus 2026</li>
            </ol>
            <br>
            <div class="ttd_container_bab3">
                <div class="ttd_bab3">
                    <p>
                        Semarang, {{ \Carbon\Carbon::parse($laporan->tanggal_pemeriksaan)->translatedFormat('d F Y') }}
                        <br>
                        PT CAKRA TEKNIKA SOLUSI<br>
                        Yang Memeriksa dan Menguji<br>
                        <strong>
                            Ahli K3 Bidang<br>
                            Pesawat Tenaga dan Produksi
                        </strong>
                    </p>

                    <p>
                        <strong style="text-transform: capitalize; text-decoration: underline;">
                            {{ $laporan->nama_pemeriksa ?? 'Belum diisi' }}
                        </strong><br>
                        <strong style="text-decoration: underline;">
                            No. SKP. <br>
                            5/24797/AS.01.04/XII/2024
                        </strong>
                    </p>
                </div>
            </div>

        </div>

        <div style="page-break-after: always;"></div>

        {{-- ================= DOKUMENTASI ================= --}}
        <h3 style="text-align:center;">DOKUMENTASI</h3>

        <table width="100%" cellpadding="5" cellspacing="0">
            @php
                // pastikan urutan sesuai database
                $fotos = $laporan->fotos->sortBy('urutan')->values();
            @endphp

            @for ($i = 0; $i < $fotos->count(); $i += 2)
                {{-- BARIS FOTO --}}
                <tr>
                    {{-- FOTO KIRI --}}
                    <td style="width: 50%; text-align: center; vertical-align: middle;">
                        @if (isset($fotos[$i]))
                            <img src="{{ storage_path('app/public/' . $fotos[$i]->file_path) }}"
                                style="width:90%; height:auto;">
                        @endif
                    </td>

                    {{-- FOTO KANAN --}}
                    <td style="width: 50%; text-align: center; vertical-align: middle;">
                        @if (isset($fotos[$i + 1]))
                            <img src="{{ storage_path('app/public/' . $fotos[$i + 1]->file_path) }}"
                                style="width:90%; height:auto;">
                        @endif
                    </td>
                </tr>

                {{-- BARIS KETERANGAN --}}
                <tr>
                    <td align="center">
                        {{ $fotos[$i]->keterangan ?? '' }}
                    </td>
                    <td align="center">
                        {{ $fotos[$i + 1]->keterangan ?? '' }}
                    </td>
                </tr>
            @endfor
        </table>

        {{-- ================= Sertifikat 1 ================= --}}
        <div style="page-break-before: always;"></div>

        <div>
            <img src="{{ public_path('storage/images/sertifikat_naufal_521.jpeg') }}"
                style="width:100%; height:100%;">
        </div>


        {{-- ================= Sertifikat 2 ================= --}}
        <div style="page-break-before: always;"></div>

        <div>
            <img src="{{ public_path('storage/images/sertifikat_naufal_24797.jpeg') }}"
                style="width:100%; height:100%;">
        </div>

    </main>
</body>

</html>
