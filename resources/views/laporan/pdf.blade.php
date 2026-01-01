<!DOCTYPE html>
<html>
<head>
    <style>
        @page {
            margin: 120px 40px 100px 40px;
        }

        body {
            font-family: DejaVu Sans;
            font-size: 12px;
        }

        header {
            position: fixed;
            top: -100px;
            left: 0;
            right: 0;
            height: 90px;
            text-align: center;
            border-bottom: 2px solid #333;
        }

        footer {
            position: fixed;
            bottom: -80px;
            left: 0;
            right: 0;
            height: 60px;
            border-top: 2px solid #333;
            text-align: center;
            font-size: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 5px;
        }

        h3 {
            margin-top: 20px;
        }
    </style>
</head>

<body>

<header>
    <strong>PT CAKRA TEKNIKA SOLUSI</strong><br>
    Laporan Pemeriksaan Concrete Mixer
</header>

<footer>
    Halaman <span class="pageNumber"></span>
</footer>

<main>

<h3>DATA LAPORAN</h3>
<table>
    <tr>
        <td>Nomor Laporan</td>
        <td>{{ $laporan->nomor_laporan }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>{{ $laporan->tanggal_pemeriksaan }}</td>
    </tr>
    <tr>
        <td>Perusahaan</td>
        <td>{{ $laporan->nama_perusahaan }}</td>
    </tr>
    <tr>
        <td>Lokasi</td>
        <td>{{ $laporan->alamat_lokasi }}</td>
    </tr>
</table>

<h3>DATA TEKNIS</h3>
<table>
    <tr><td>Merk / Tipe</td><td>{{ $laporan->dataTeknis->merk_tipe }}</td></tr>
    <tr><td>Nomor Seri</td><td>{{ $laporan->dataTeknis->nomor_seri }}</td></tr>
    <tr><td>Tahun</td><td>{{ $laporan->dataTeknis->tahun_pembuatan }}</td></tr>
    <tr><td>Kapasitas</td><td>{{ $laporan->dataTeknis->kapasitas }}</td></tr>
</table>

<h3>CHECKLIST PEMERIKSAAN</h3>
<table>
    <tr>
        <th>No</th>
        <th>Item</th>
        <th>Hasil</th>
    </tr>
    @foreach ($laporan->checklistResults as $index => $result)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $result->checklistItem->nama_item }}</td>
        <td>{{ $result->hasil }}</td>
    </tr>
    @endforeach
</table>

<h3>DOKUMENTASI FOTO</h3>
@foreach ($laporan->fotos as $foto)
    <p>{{ $foto->keterangan }}</p>
    <img src="{{ storage_path('app/public/'.$foto->file_path) }}" width="300">
@endforeach

<h3>KESIMPULAN</h3>
<p>{{ $laporan->kesimpulan ?? '-' }}</p>

</main>

</body>
</html>
