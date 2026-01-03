<!DOCTYPE html>
<html>

<head>
    <style>
        @page {
            margin: 170px 40px 110px 40px;
        }

        body {
            font-family: DejaVu Sans;
            font-size: 11px;
        }

        /* HEADER */
        .header {
            position: fixed;
            top: -150px;
            left: 0;
            right: 0;
            height: 150px;
        }

        .header .yellow-bar {
            height: 35px;
            background: #d4c017;
        }

        .header .content {
            display: table;
            width: 100%;
            padding: 10px 40px;
        }

        .header .left,
        .header .right {
            display: table-cell;
            vertical-align: middle;
        }

        .header .left img {
            width: 140px;
        }

        .header .right {
            text-align: right;
            font-size: 12px;
            padding-right: 60px;
        }

        .header .right .line {
            border-bottom: 1px solid #777;
            margin-bottom: 6px;
            padding-bottom: 4px;
        }

        /* PANEL HIJAU */
        .header .green-panel {
            position: absolute;
            top: 0;
            right: 40px;
            width: 45px;
            height: 170px;
            background: #0b7d3f;
        }

        .icon-box {
            color: white;
            font-size: 20px;
            margin-bottom: 10px;
        }

        /* FOOTER */
        footer {
            position: fixed;
            bottom: -90px;
            left: 0;
            right: 0;
            height: 70px;
            text-align: center;
            font-size: 10px;
            border-top: 1px solid #000;
        }

        /* WATERMARK */
        .watermark {
            position: fixed;
            top: 20%;
            left: 20%;
            opacity: 0.08;
            z-index: -1;
        }

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

        h3 {
            margin-top: 20px;
            margin-bottom: 8px;
        }

        h4 {
            margin-top: 15px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="yellow-bar"></div>

        <div class="content">
            <div class="left">
                <img src="{{ public_path('storage/images/logo_cakra.png') }}">
            </div>

            <div class="right">
                <div class="line">+62 856 4042 4888</div>
                <div class="line">info@cakrateknika.com</div>
                <div>
                    Jalan Bukit Wato-Wato VII Blok B2A/14<br>
                    Permata Puri, Beringin, Ngaliyan, Semarang
                </div>
            </div>
        </div>

        <div class="green-panel">
            <div class="icon-box"></div>
            <div class="icon-box">☏</div>
            <div class="icon-box">🌐</div>
            <div class="icon-box">📍</div>
        </div>
    </div>



    <footer>
        Halaman <span class="pageNumber"></span>
    </footer>

    <div class="watermark">
        <img src="{{ public_path('storage/images/logo_cakra.png') }}" width="420">
    </div>

    <main style="margin-top: 100px;">

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

    </main>

</body>

</html>