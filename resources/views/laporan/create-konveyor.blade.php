<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input Laporan Konveyor</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <style>
        .strike {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>

<body>
    <script src="{{ asset('js/create.js') }}" defer></script>


    <h2 style="text-align:center;">
        LAPORAN PEMERIKSAAN DAN PENGUJIAN
        (<span id="jp-pertama">Pertama</span> /
        <span id="jp-berkala">Berkala</span> /
        <span id="jp-khusus">Khusus</span> /
        <span id="jp-ulang">Ulang</span>)
        <br>
        KONVEYOR
    </h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('laporan.konveyor.store') }}" method="POST">
        @csrf

      
        <label>Jenis Pemeriksaan</label><br>
        <select name="jenis_pemeriksaan" id="jenis_pemeriksaan" required>
            <option value="">-- pilih --</option>
            <option value="Pertama">Pertama</option>
            <option value="Berkala">Berkala</option>
            <option value="Khusus">Khusus</option>
            <option value="Ulang">Ulang</option>
        </select><br><br>

        <label>Nomor Riksa Uji</label><br>
        <input type="text" name="nomor_riksa_uji"
            placeholder="010 /CTS/RIKSAUJI-PAA/IV/2024"><br><br>

        <hr>


        <h3>Identitas Pemeriksa</h3>

        <label>Nama Pemeriksa</label><br>
        <input type="text" name="nama_pemeriksa"><br><br>

        <label>No. Kep</label><br>
        <input type="text" name="no_kep"><br><br>

        <label>Bidang</label><br>
        <input type="text" name="bidang"><br><br>

        <label>Pelaksanaan</label><br>
        <input type="text" name="pelaksanaan"><br><br>

        <hr>

      
        <h3>I. Data Umum</h3>

        <label>Pemilik</label><br>
        <input type="text" name="pemilik"><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat"></textarea><br><br>

        <label>Pemakai</label><br>
        <input type="text" name="pemakai"><br><br>

        <label>Pengurus / Sub Kontraktor / Penanggung Jawab</label><br>
        <input type="text" name="penanggung_jawab"><br><br>

        <label>Lokasi Unit</label><br>
        <input type="text" name="lokasi_unit"><br><br>

        <label>Jenis Pesawat</label><br>
        <input type="text" name="jenis_pesawat" value="Konveyor" readonly><br><br>

        <label>Pabrik Pembuat</label><br>
        <input type="text" name="pabrik_pembuat"><br><br>

        <label>Merek / Type</label><br>
        <input type="text" name="merk_type"><br><br>

        <label>Lokasi dan Tahun Pembuatan</label><br>
        <input type="text" name="lokasi_tahun_pembuatan"><br><br>

        <label>No. Seri / No. Unit</label><br>
        <input type="text" name="no_seri"><br><br>

        <label>Kapasitas / Bobot Kerja</label><br>
        <input type="text" name="kapasitas"><br><br>

        <label>Standar Yang Dipakai</label><br>
        <input type="text" name="standar"><br><br>

        <label>Digunakan Untuk</label><br>
        <input type="text" name="digunakan_untuk"><br><br>

        <label>Nomor Surat Keterangan</label><br>
        <input type="text" name="nomor_surat"><br><br>

        <label>No. Lisensi K3 Operator / Masa Berlaku s/d</label><br>
        <input type="text" name="lisensi_operator"><br><br>

        <hr>

        <h3>II. Data Teknis</h3>

        <h4>Spesifikasi Konveyor</h4>

        <label>Jenis</label><br>
        <input type="text" name="jenis_konveyor"><br><br>

        <label>Tahun Pembuatan</label><br>
        <input type="number" name="tahun_pembuatan"><br><br>

        <label>Kapasitas / Bobot Kerja</label><br>
        <input type="text" name="bobot_kerja"><br><br>

        <label>Panjang Keseluruhan</label><br>
        <input type="text" name="panjang"><br><br>

        <label>Tinggi Keseluruhan</label><br>
        <input type="text" name="tinggi"><br><br>

        <label>Lebar</label><br>
        <input type="text" name="lebar"><br><br>

        <label>Bahan Ban Berjalan</label><br>
        <input type="text" name="bahan_ban"><br><br>

        <h4>Motor Penggerak</h4>

        <label>Jenis Penggerak</label><br>
        <input type="text" name="jenis_penggerak"><br><br>

        <label>Merk</label><br>
        <input type="text" name="merk_motor"><br><br>

        <label>Negara Pembuat</label><br>
        <input type="text" name="negara_pembuat"><br><br>

        <label>Model</label><br>
        <input type="text" name="model_motor"><br><br>

        <label>No. Seri / Unit</label><br>
        <input type="text" name="no_seri_motor"><br><br>

        <label>Tegangan</label><br>
        <input type="text" name="tegangan"><br><br>

        <label>Daya</label><br>
        <input type="text" name="daya"><br><br>

        <label>Merek / Tahun Pembuatan</label><br>
        <input type="text" name="merk_tahun_motor"><br><br>

        <label>Pabrik Pembuat</label><br>
        <input type="text" name="pabrik_motor"><br><br>

        <hr>

<h3>III. Pemeriksaan Visual dan Fungsi</h3>

<!-- ================================================= -->
<h4>1. Pemeriksaan Konveyor (Mesin Mati)</h4>

<h5>A. Bagian-bagian Utama</h5>

@php
$mesinMatiBagianUtama = [
    'sabuk_belt' => 'Sabuk (Belt)',
    'head_conveyor' => 'Head of Conveyor',
    'tail_conveyor' => 'Tail of Conveyor',
    'carrying_idler' => 'Carrying Idler',
    'impact_idler' => 'Impact Idler',
    'trough_idler' => 'Trough Idler',
    'return_idler' => 'Return Idler',
];
@endphp

@foreach ($mesinMatiBagianUtama as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_mati][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach


<h5>B. Drive / Penggerak Utama</h5>

@php
$driveUtama = [
    'motor_penggerak' => 'Motor Penggerak',
    'kabel_kabel' => 'Kabel-Kabel',
    'panel_control' => 'Panel Control Room',
    'tail_pulley' => 'Tail Pulley',
    'snub_pulley' => 'Snub Pulley',
];
@endphp

@foreach ($driveUtama as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_mati][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach


<h5>C. Transmisi</h5>

@php
$transmisi = [
    'bend_pulley' => 'Bend Pulley',
    'head_drive_pulley' => 'Head of Drive Pulley',
    'counter_weight' => 'Bobot Imbang (Counter Weight)',
    'return_idlers_transmisi' => 'Return Idlers',
];
@endphp

@foreach ($transmisi as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_mati][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach


<h5>D. Aksesoris</h5>

@php
$aksesoris = [
    'belt_cleaner' => 'Belt Cleaner',
    'plough_scraper' => 'Plough Scraper',
    'magnetic_separator' => 'Magnetic Separator',
    'brake_system' => 'Brake System',
];
@endphp

@foreach ($aksesoris as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_mati][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach


<h5>E. Alat Pengaman</h5>

@php
$alatPengaman = [
    'emergency_stop' => 'Emergency Stop',
    'pagar_pengaman' => 'Pagar Pengaman',
    'apar' => 'APAR',
    'sangkar_motor' => 'Sangkar Pengaman Motor',
];
@endphp

@foreach ($alatPengaman as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_mati][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_mati][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach


<!-- ================================================= -->
<h4>2. Pemeriksaan Konveyor (Mesin Hidup)</h4>

@php
$mesinHidup = [
    'suara_getaran' => 'Suara Getaran',
    'brake_system_hidup' => 'Brake System',
    'kerja_belt' => 'Kerja Belt Conveyor',
    'kerja_head_drive' => 'Kerja Head Drive Pulley',
    'kerja_tail_pulley' => 'Kerja Tail Pulley',
    'kerja_return_idler' => 'Kerja Return Idler',
    'emergency_stop_hidup' => 'Emergency Stop',
    'panel_control' => 'Kerja Semua Panel Kontrol',
    'lampu_panel' => 'Lampu-Lampu Panel Kontrol',
];
@endphp

@foreach ($mesinHidup as $key => $label)
    <div class="form-row">
        <strong>{{ $label }}</strong><br>

        <label>
            <input type="radio" name="pemeriksaan[mesin_hidup][{{ $key }}][kondisi]" value="Memenuhi" required>
            Memenuhi Syarat
        </label>

        <label>
            <input type="radio" name="pemeriksaan[mesin_hidup][{{ $key }}][kondisi]" value="Tidak Memenuhi">
            Tidak Memenuhi
        </label>

        <br>
        <textarea name="pemeriksaan[mesin_hidup][{{ $key }}][keterangan]"
            placeholder="Keterangan"></textarea>
        <hr>
    </div>
@endforeach

<hr>

<h3>IV. Pemeriksaan Tidak Merusak Terhadap Konstruksi dan Komponen</h3>

<p><strong>Secara Visual</strong></p>

@php
$pemeriksaanNDT = [
    [
        'key' => 'sabuk_konveyor',
        'nama' => 'Sabuk Konveyor',
        'bahan' => 'PVC',
    ],
    [
        'key' => 'penyangga_trough_idler',
        'nama' => 'Penyangga Trough Idler',
        'bahan' => 'Besi',
    ],
];
@endphp

@foreach ($pemeriksaanNDT as $index => $item)
    <div class="form-row">
        <strong>{{ $index + 1 }}. {{ $item['nama'] }}</strong><br>

        <label>Bahan</label><br>
        <input type="text"
            name="ndt[konstruksi][{{ $item['key'] }}][bahan]"
            value="{{ $item['bahan'] }}"
            readonly
        >

        <br><br>

        <label><strong>Kondisi</strong></label><br>

        <label>
            <input type="radio"
                name="ndt[konstruksi][{{ $item['key'] }}][kondisi]"
                value="Retak / Putus"
                required>
            Retak / Putus
        </label>

        <label>
            <input type="radio"
                name="ndt[konstruksi][{{ $item['key'] }}][kondisi]"
                value="Tidak Ada Retak / Putus">
            Tidak Ada Retak / Putus
        </label>

        <br><br>

        <label>Keterangan</label><br>
        <textarea
            name="ndt[konstruksi][{{ $item['key'] }}][keterangan]"
            placeholder="Contoh: Kencang dan tidak ada robek"
        ></textarea>

        <hr>
    </div>
@endforeach


<hr>

<h3>V. Pengujian Dinamis</h3>

@php
$ujiDinamis = [
    ['key' => 'tanpa_beban', 'label' => 'Tanpa Beban'],
    ['key' => '25_swl', 'label' => '25 % SWL'],
    ['key' => '75_swl', 'label' => '75 % SWL'],
    ['key' => '100_swl', 'label' => '100 % SWL'],
];
@endphp

@foreach ($ujiDinamis as $index => $uji)
    <div class="form-row">
        <strong>{{ $index + 1 }}. {{ $uji['label'] }}</strong><br><br>

        <label>Beban (Kg)</label><br>
        <input type="text"
            name="uji_dinamis[{{ $uji['key'] }}][beban]"
            placeholder="Contoh: 10 / 0 / -"
        >

        <br><br>

        <label>Kecepatan</label><br>
        <input type="text"
            name="uji_dinamis[{{ $uji['key'] }}][kecepatan]"
            placeholder="Contoh: 0.33 m/s"
        >

        <br><br>

        <label>Hasil</label><br>
        <select name="uji_dinamis[{{ $uji['key'] }}][hasil]">
            <option value="">-- pilih --</option>
            <option value="Baik">Baik</option>
            <option value="Tidak Baik">Tidak Baik</option>
            <option value="-">-</option>
        </select>

        <br><br>

        <label>Keterangan</label><br>
        <textarea
            name="uji_dinamis[{{ $uji['key'] }}][keterangan]"
            placeholder="Contoh: Mesin penggerak berfungsi normal dan sabuk kencang"
        ></textarea>

        <hr>
    </div>
@endforeach


        <button type="submit">Simpan Laporan</button>

    </form>

    <!-- ================= SCRIPT ================= -->
    <script>
        document.getElementById('jenis_pemeriksaan').addEventListener('change', function () {
            const jenis = ['pertama', 'berkala', 'khusus', 'ulang'];
            jenis.forEach(j => {
                const el = document.getElementById('jp-' + j);
                el.classList.add('strike');
            });

            if (this.value) {
                document.getElementById('jp-' + this.value.toLowerCase())
                    .classList.remove('strike');
            }
        });
    </script>

</body>

</html>
