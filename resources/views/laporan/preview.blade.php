<!DOCTYPE html>
<html>

<head>
    <style>
        @page {
            margin: 120px 40px 100px 40px;
        }

        body {
            font-family: DejaVu Sans;
            font-size: 11px;
        }

        header {
            position: fixed;
            top: -100px;
            left: 0;
            right: 0;
            height: 90px;
            text-align: center;
            border-bottom: 2px solid #000;
        }

        footer {
            position: fixed;
            bottom: -80px;
            left: 0;
            right: 0;
            height: 60px;
            border-top: 2px solid #000;
            text-align: center;
            font-size: 10px;
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

    <header>
        <strong>PT CAKRA TEKNIKA SOLUSI</strong><br>
        FORMULIR / CHECKLIST PEMERIKSAAN DAN PENGUJIAN MOTOR DIESEL<br>
        (PEMERIKSAAN {{ strtoupper($laporan->jenis_pemeriksaan) }})
    </header>

    <footer>
        Halaman <span class="pageNumber"></span>
    </footer>

    <main>

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
        <img src="{{ asset('storage/'.$foto->file_path) }}" width="300">
        @endforeach

    </main>

</body>

</html>