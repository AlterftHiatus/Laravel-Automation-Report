<!DOCTYPE html>
<html>

<head>
    <title>Buat Laporan {{ $jenis }}</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; max-width: 800px; margin: auto; }
        .error-box { color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px; }
        hr { margin: 30px 0; border: 0; border-top: 2px solid #eee; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; background: #f9f9f9; }
    </style>
</head>

<body>

    <h2>Buat Laporan: {{ $jenis }}</h2>

    @if ($errors->any())
    <div class="error-box">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="jenis_laporan" value="{{ $jenis }}">

        <h3>DATA LAPORAN</h3>

        <label>Nomor Laporan</label><br>
        <input type="text" name="nomor_laporan" placeholder="contoh: 013/CTS/LHPP/X/2025" required style="width: 100%"><br><br>

        <label>Tanggal Pemeriksaan</label><br>
        <input type="date" name="tanggal_pemeriksaan" required><br><br>

        <label>Jenis Pemeriksaan</label><br>
        <select name="jenis_pemeriksaan" required>
            <option value="">-- pilih jenis pemeriksaan --</option>
            <option value="Pertama">Pertama</option>
            <option value="Berkala">Berkala</option>
            <option value="Ulang">Ulang</option>
            <option value="Khusus">Khusus</option>
        </select><br><br>

        <hr>

        <h3>I. Data Umum</h3>

        <label>Perusahaan Pemilik</label><br>
        <input type="text" name="perusahaan_pemilik" style="width: 100%"><br><br>

        <label>Alamat Pemilik</label><br>
        <textarea name="alamat_pemilik" style="width: 100%"></textarea><br><br>

        <label>Perusahaan Pemakai</label><br>
        <input type="text" name="perusahaan_pemakai" style="width: 100%"><br><br>

        <label>Alamat Pemakai</label><br>
        <textarea name="alamat_pemakai" style="width: 100%"></textarea><br><br>

        <label>Pengurus / Penanggung Jawab</label><br>
        <input type="text" name="penanggung_jawab" style="width: 100%"><br><br>

        <label>Lokasi Unit</label><br>
        <input type="text" name="lokasi_unit" style="width: 100%"><br><br>

        <label>Jenis Pesawat / Tipe</label><br>
        <input type="text" name="jenis_pesawat" value="{{ $jenis }}" readonly style="background: #eee; width: 100%"><br><br>

        <label>Merk / Tipe</label><br>
        <input type="text" name="merk_tipe" style="width: 100%"><br><br>

        <label>No. Seri / No. Unit</label><br>
        <input type="text" name="nomor_seri" style="width: 100%"><br><br>

        <label>Perusahaan Pembuat / Pemasang</label><br>
        <input type="text" name="pembuat_pemasang" style="width: 100%"><br><br>

        <label>Tahun Pembuatan</label><br>
        <input type="number" name="tahun_pembuatan"><br><br>

        <label>Kapasitas</label><br>
        <input type="text" name="kapasitas" placeholder="contoh: 350 Liter / 10 Ton" style="width: 100%"><br><br>

        <label>Nama Operator</label><br>
        <input type="text" name="nama_operator" style="width: 100%"><br><br>

        <label>Riwayat Pemeriksaan / Data Motor</label><br>
        <textarea name="riwayat_pemeriksaan" style="width: 100%"></textarea><br><br>

        <hr>

        <h3>II. DATA TEKNIK</h3>
        <p><small>*Isi data teknis spesifik untuk {{ $jenis }}</small></p>

        <label>Merk / Tipe</label><br>
        <input type="text" name="merk_tipe_teknik" style="width: 100%"><br><br>

        <label>Kapasitas Kerja</label><br>
        <input type="text" name="kapasitas_teknik" style="width: 100%"><br><br>

        <label>Power (jika ada)</label><br>
        <input type="text" name="power" placeholder="contoh: 10 PK / 50 kW" style="width: 100%"><br><br>

        <label><strong>Dimensi (mm)</strong></label><br>
        <input type="number" name="diameter_mm" placeholder="Diameter">
        <input type="number" name="panjang_mm" placeholder="Panjang">
        <input type="number" name="tinggi_mm" placeholder="Tinggi">

        <hr>

        <h3>III. PEMERIKSAAN VISUAL</h3>

        @php
            // Kita kelompokkan checklist berdasarkan kategori agar rapi
            $groupedChecklists = $checklists->groupBy('kategori');
        @endphp

        @foreach ($groupedChecklists as $kategori => $items)
            @if($kategori != 'Pengujian NDT' && $kategori != 'Pengukuran dan Pengujian Safety Device')
                <h4>{{ $kategori }}</h4>
                @foreach ($items as $item)
                <div class="card">
                    <strong>{{ $item->nama_item }}</strong><br><br>

                    <label>Kondisi</label>
                    <select name="checklist[{{ $item->id }}][hasil]" required>
                        <option value="">-- pilih --</option>
                        <option value="Baik">Baik</option>
                        <option value="Buruk">Buruk</option>
                        <option value="-">-</option>
                    </select>

                    <label style="margin-left: 20px;">Keterangan</label>
                    <input type="text" name="checklist[{{ $item->id }}][keterangan]" placeholder="Catatan tambahan">
                </div>
                @endforeach
            @endif
        @endforeach

        <hr>

        <h3>IV. PENGUJIAN NDT (Jika Ada)</h3>
        @if(isset($groupedChecklists['Pengujian NDT']))
            @foreach ($groupedChecklists['Pengujian NDT'] as $item)
            <div class="card">
                <strong>{{ $item->nama_item }}</strong><br><br>
                <input type="text" name="checklist[{{ $item->id }}][hasil]" placeholder="Hasil pengujian">
                <input type="text" name="checklist[{{ $item->id }}][keterangan]" placeholder="Keterangan">
            </div>
            @endforeach
        @else
            <p><em>Tidak ada item NDT untuk jenis ini.</em></p>
        @endif

        <hr>

        <h3>V. SAFETY DEVICE</h3>
        @if(isset($groupedChecklists['Pengukuran dan Pengujian Safety Device']))
            @foreach ($groupedChecklists['Pengukuran dan Pengujian Safety Device'] as $item)
            <div class="card">
                <strong>{{ $item->nama_item }}</strong><br><br>
                <select name="checklist[{{ $item->id }}][hasil]">
                    <option value="Baik">Baik</option>
                    <option value="Buruk">Buruk</option>
                    <option value="N/A">N/A</option>
                </select>
                <input type="text" name="checklist[{{ $item->id }}][keterangan]" placeholder="Keterangan">
            </div>
            @endforeach
        @else
            <p><em>Tidak ada item Safety Device untuk jenis ini.</em></p>
        @endif

        <hr>

        <h3>VI. DOKUMENTASI FOTO</h3>
        <div id="dokumentasi-wrapper">
            <div class="dokumentasi-item card">
                <h4>Foto #1</h4>
                <input type="file" name="dokumentasi[0][foto]" accept="image/*" required><br><br>
                <input type="text" name="dokumentasi[0][keterangan]" placeholder="Keterangan foto" style="width: 100%">
            </div>
        </div>

        <br>
        <button type="button" onclick="tambahDokumentasi()">+ Tambah Foto</button>
        <br><br><br>

        <button type="submit" style="padding: 15px 30px; background: green; color: white; border: none; cursor: pointer; font-size: 16px;">
            SIMPAN LAPORAN {{ strtoupper($jenis) }}
        </button>

    </form>

    <script>
        let index = 1;
        function tambahDokumentasi() {
            const wrapper = document.getElementById('dokumentasi-wrapper');
            const html = `
                <div class="dokumentasi-item card">
                    <h4>Foto #${index + 1}</h4>
                    <input type="file" name="dokumentasi[${index}][foto]" accept="image/*"><br><br>
                    <input type="text" name="dokumentasi[${index}][keterangan]" placeholder="Keterangan foto" style="width: 100%">
                </div>
            `;
            wrapper.insertAdjacentHTML('beforeend', html);
            index++;
        }
    </script>

</body>
</html>