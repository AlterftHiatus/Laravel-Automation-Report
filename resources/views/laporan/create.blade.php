<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan Concrete Mixer</title>
</head>
<body>

<h2>Buat Laporan Concrete Mixer</h2>

<form action="/laporan" method="POST">
    @csrf

    <h3>Data Laporan</h3>

    <label>Nomor Laporan</label><br>
    <input type="text" name="nomor_laporan"><br><br>

    <label>Tanggal Pemeriksaan</label><br>
    <input type="date" name="tanggal_pemeriksaan"><br><br>

    <label>Nama Perusahaan</label><br>
    <input type="text" name="nama_perusahaan"><br><br>

    <label>Alamat Lokasi</label><br>
    <textarea name="alamat_lokasi"></textarea><br><br>

    <label>Jenis Pemeriksaan</label><br>
    <select name="jenis_pemeriksaan">
        <option value="Pertama">Pertama</option>
        <option value="Berkala">Berkala</option>
    </select><br><br>

    <label>Nama Pemeriksa</label><br>
    <input type="text" name="nama_pemeriksa"><br><br>

    <hr>

    <h3>Data Teknis Concrete Mixer</h3>

    <label>Merk / Tipe</label><br>
    <input type="text" name="merk_tipe"><br><br>

    <label>Nomor Seri</label><br>
    <input type="text" name="nomor_seri"><br><br>

    <label>Tahun Pembuatan</label><br>
    <input type="number" name="tahun_pembuatan"><br><br>

    <label>Kapasitas</label><br>
    <input type="text" name="kapasitas"><br><br>

    <label>Dimensi</label><br>
    <input type="text" name="dimensi"><br><br>

    <label>Power</label><br>
    <input type="text" name="power"><br><br>

    <button type="submit">Simpan Laporan</button>

</form>

</body>
</html>
