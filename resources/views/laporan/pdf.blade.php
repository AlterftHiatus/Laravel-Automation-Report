<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }
        td, th {
            padding: 5px;
        }
    </style>
</head>
<body>

<h1>LAPORAN PEMERIKSAAN</h1>

<p><strong>Nomor Laporan:</strong> {{ $laporan->nomor_laporan }}</p>
<p><strong>Tanggal:</strong> {{ $laporan->tanggal_laporan }}</p>
<p><strong>Jenis:</strong> {{ $laporan->jenis_laporan }}</p>
<p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>

<hr>

<h3>Kesimpulan</h3>
<p>{{ $laporan->kesimpulan ?? '-' }}</p>

</body>
</html>
