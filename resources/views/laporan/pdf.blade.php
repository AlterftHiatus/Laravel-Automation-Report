<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        /* CONFIG PAGE */
        @page {
            margin: 180px 40px 100px 40px;
        }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
        }

        /* FIXED HEADER */
        .header {
            position: fixed;
            top: -160px;
            left: 0px;
            right: 0px;
            height: 150px;
            width: 100%;
        }

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
            padding-right: 50px;
        }

        .info-line {
            border-bottom: 1px solid #999;
            margin-bottom: 4px;
            padding-bottom: 2px;
            display: block;
        }

        /* PANEL HIJAU (Gaya Sidebar Kanan) */
        .green-panel {
            position: absolute;
            top: 0;
            right: 0;
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

        /* FIXED FOOTER */
        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 10px;
        }

        /* WATERMARK */
        .watermark {
            position: fixed;
            top: 25%;
            left: 15%;
            width: 70%;
            opacity: 0.05;
            z-index: -1000;
        }

        /* CONTENT STYLING */
        h3 {
            background-color: #f2f2f2;
            padding: 5px;
            border-left: 5px solid #0b7d3f;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th {
            background-color: #eee;
            text-align: center;
            padding: 8px;
        }

        td {
            padding: 6px;
            vertical-align: top;
        }

        .kategori-row {
            background-color: #e8f4fd;
            font-weight: bold;
        }

        .foto-container {
            text-align: center;
            margin-bottom: 20px;
            page-break-inside: avoid; /* Mencegah foto terpotong antar halaman */
        }

        .foto-img {
            width: 400px;
            border: 5px solid #eee;
            margin-top: 5px;
        }

        .page-number:before {
            content: "Halaman " counter(page);
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="yellow-bar"></div>
        
        <table class="header-table">
            <tr>
                <td class="logo-col">
                    <img src="{{ public_path('storage/images/logo_cakra.png') }}" style="width: 150px;">
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
            <div class="icon-text">☏</div>
            <div class="icon-text">🌐</div>
            <div class="icon-text">📍</div>
        </div>
    </div>

    <div class="watermark">
        <img src="{{ public_path('storage/images/logo_cakra.png') }}" style="width: 100%;">
    </div>

    <footer>
        <div class="page-number"></div>
        <div style="font-size: 8px; margin-top: 5px;">Dokumen ini dihasilkan secara otomatis oleh Sistem Manajemen Laporan K3</div>
    </footer>

    <div class="content">
        
        <h2 style="text-align: center; color: #0b7d3f;">LAPORAN PEMERIKSAAN K3</h2>
        <p style="text-align: center; margin-top: -15px;">Jenis Alat: {{ $laporan->jenis_laporan }}</p>

        <h3>DATA LAPORAN</h3>
        <table>
            <tr><td width="30%">Nomor Laporan</td><td>{{ $laporan->nomor_laporan }}</td></tr>
            <tr><td>Tanggal Pemeriksaan</td><td>{{ \Carbon\Carbon::parse($laporan->tanggal_pemeriksaan)->format('d F Y') }}</td></tr>
            <tr><td>Jenis Pemeriksaan</td><td>{{ $laporan->jenis_pemeriksaan }}</td></tr>
        </table>

        <h3>I. DATA UMUM</h3>
        <table>
            <tr><td width="30%">Perusahaan Pemilik</td><td>{{ $laporan->perusahaan_pemilik }}</td></tr>
            <tr><td>Alamat Pemilik</td><td>{{ $laporan->alamat_pemilik }}</td></tr>
            <tr><td>Perusahaan Pemakai</td><td>{{ $laporan->perusahaan_pemakai }}</td></tr>
            <tr><td>Alamat Pemakai</td><td>{{ $laporan->alamat_pemakai }}</td></tr>
            <tr><td>Lokasi Unit</td><td>{{ $laporan->lokasi_unit }}</td></tr>
            <tr><td>Nama Operator</td><td>{{ $laporan->nama_operator ?? '-' }}</td></tr>
        </table>

        <h3>II. DATA TEKNIK</h3>
        <table>
            <tr><td width="30%">Merk / Tipe</td><td>{{ $laporan->dataTeknis->merk_tipe }}</td></tr>
            <tr><td>Tahun Pembuatan</td><td>{{ $laporan->dataTeknis->tahun_pembuatan }}</td></tr>
            <tr><td>Kapasitas</td><td>{{ $laporan->dataTeknis->kapasitas }}</td></tr>
            <tr><td>Power</td><td>{{ $laporan->dataTeknis->power }}</td></tr>
        </table>

        <div style="page-break-after: always;"></div> <h3>III. HASIL PEMERIKSAAN & PENGUJIAN</h3>
        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Komponen Pemeriksaan</th>
                    <th width="15%">Hasil</th>
                    <th width="25%">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $currentKategori = null; $no = 1; @endphp
                @foreach ($laporan->checklistResults as $result)
                    @if ($currentKategori !== $result->checklistItem->kategori)
                        <tr class="kategori-row">
                            <td colspan="4">{{ $result->checklistItem->kategori }}</td>
                        </tr>
                        @php $currentKategori = $result->checklistItem->kategori; @endphp
                    @endif
                    <tr>
                        <td style="text-align: center;">{{ $no++ }}</td>
                        <td>{{ $result->checklistItem->nama_item }}</td>
                        <td style="text-align: center;">{{ $result->hasil }}</td>
                        <td>{{ $result->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($laporan->fotos->count() > 0)
            <div style="page-break-before: always;"></div>
            <h3>IV. DOKUMENTASI FOTO</h3>
            @foreach ($laporan->fotos as $foto)
                <div class="foto-container">
                    <p><strong>Foto:</strong> {{ $foto->keterangan }}</p>
                    <img src="{{ public_path('storage/'.$foto->file_path) }}" class="foto-img">
                </div>
            @endforeach
        @endif
    </div>

</body>
</html>