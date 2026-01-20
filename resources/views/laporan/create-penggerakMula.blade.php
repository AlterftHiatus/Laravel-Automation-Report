<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pemeriksaan Motor Diesel</title>

    {{-- CSS GLOBAL (boleh pakai yang sama dengan konveyor) --}}
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1100px;
            margin: 30px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
        }
        h2, h3 {
            margin-top: 0;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 12px 16px;
            margin-bottom: 20px;
        }
        input, textarea, select {
            padding: 8px;
            width: 100%;
        }
        textarea {
            min-height: 80px;
        }
        .btn-primary {
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .strike {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>

<body>

{{-- JS GLOBAL (SAMA DENGAN KONVEYOR) --}}
<script src="{{ asset('js/create.js') }}" defer></script>

<div class="container">

    <!-- ================= JUDUL ================= -->
    <h2 style="text-align:center;">
        LAPORAN PEMERIKSAAN DAN PENGUJIAN
        (
        <span id="jp-pertama">Pertama</span> /
        <span id="jp-berkala">Berkala</span> /
        <span id="jp-khusus">Khusus</span> /
        <span id="jp-ulang">Ulang</span>
        )
        <br>
        PESAWAT TENAGA DAN PRODUKSI – MOTOR DIESEL
    </h2>

    <!-- ================= FORM ================= -->
    <form method="POST" action="#">
        @csrf

        <!-- ================= JENIS PEMERIKSAAN ================= -->
        <label>Jenis Pemeriksaan</label><br>
        <select name="jenis_pemeriksaan" id="jenis_pemeriksaan" required>
            <option value="">-- pilih --</option>
            <option value="Pertama">Pertama</option>
            <option value="Berkala">Berkala</option>
            <option value="Khusus">Khusus</option>
            <option value="Ulang">Ulang</option>
        </select>
        <br><br>

        <!-- ===================================================== -->
        <!-- 1.2 IDENTITAS PESAWAT TENAGA DAN PRODUKSI -->
        <!-- ===================================================== -->
        <h3>1.2 Identitas Pesawat Tenaga dan Produksi</h3>

        <p>
            Identitas dari Pesawat Tenaga dan Produksi jenis motor diesel yang dilakukan
            pemeriksaan dan pengujian adalah sebagai berikut:
        </p>

        <div class="form-grid">
            <label>Jenis Pesawat</label>
            <input type="text" name="identitas[jenis_pesawat]"
                   value="Motor Diesel Pembangkit Generator">

            <label>Merek / Model</label>
            <input type="text" name="identitas[merek_model]"
                   placeholder="Federal / AT5625D">

            <label>No. Seri</label>
            <input type="text" name="identitas[no_seri]">

            <label>Pabrik Pembuat</label>
            <input type="text" name="identitas[pabrik_pembuat]"
                   placeholder="Federal Generator Co., Ltd. / China">

            <label>Kapasitas Daya</label>
            <input type="text" name="identitas[kapasitas]"
                   placeholder="630 KW">

            <label>Tahun Pembuatan</label>
            <input type="number" name="identitas[tahun_pembuatan]">

            <label>Pemilik Pesawat</label>
            <input type="text" name="identitas[pemilik]">
        </div>

        <!-- ===================================================== -->
        <!-- IDENTITAS PEMERIKSA -->
        <!-- ===================================================== -->
        <h3>Pemeriksaan dan Pengujian Motor Diesel</h3>

        <div class="form-grid">
            <label>Nama Pemeriksa</label>
            <input type="text" name="pemeriksa[nama]">

            <label>No. Kep</label>
            <input type="text" name="pemeriksa[no_kep]">

            <label>Bidang</label>
            <input type="text" name="pemeriksa[bidang]"
                   value="Pesawat Tenaga dan Produksi">

            <label>Pelaksanaan</label>
            <input type="date" name="pemeriksa[pelaksanaan]">
        </div>

        <!-- ===================================================== -->
        <!-- I. DATA UMUM -->
        <!-- ===================================================== -->
        <h3>I. Data Umum</h3>

<div class="form-grid">
    <label>Perusahaan Pemakai</label>
    <input type="text" name="data_umum[perusahaan_pemakai]">

    <label>Alamat</label>
    <textarea name="data_umum[alamat]"></textarea>

    <label>Pengurus / Penanggung Jawab</label>
    <input type="text" name="data_umum[penanggung_jawab]">

    <label>Lokasi Unit</label>
    <input type="text" name="data_umum[lokasi_unit]" placeholder="Lokasi Unit R">

    <label>Jenis Pesawat / Tipe</label>
    <input type="text" name="data_umum[jenis_pesawat]"
           placeholder="Mesin Diesel Pembangkit Generator">

    <label>Merek / Tipe</label>
    <input type="text" name="data_umum[merek_tipe]"
           placeholder="Federal / AT5625D">

    <label>No. Seri / No. Unit</label>
    <input type="text" name="data_umum[no_seri]"
           placeholder="DJ20167">

    <label>Perusahaan Pembuat / Pemasang</label>
    <input type="text" name="data_umum[pembuat_pemasang]"
           placeholder="Federal Generator Co., Ltd.">

    <label>Lokasi / Tahun Pembuatan</label>
    <input type="text" name="data_umum[lokasi_tahun_pembuatan]"
           placeholder="China / 2025">

    <label>Kapasitas</label>
    <input type="text" name="data_umum[kapasitas]"
           placeholder="630 KW">

    <label>Digunakan Untuk</label>
    <input type="text" name="data_umum[dipergunakan_untuk]">

    <label>Nama / No. Sertifikat Juru Las</label>
    <input type="text" name="data_umum[juru_las]">

    <label>No. SKP / Bidang PJK3</label>
    <input type="text" name="data_umum[skp_pjk3]"
           placeholder="5/521/AS.01.02/IV/2025">

    <label>No. SKP / Bidang AK3</label>
    <input type="text" name="data_umum[skp_ak3]"
           placeholder="5/24797/AS.01.04/XII/2024">

    <label>Sertifikasi Standar Permenaker Nomor</label>
    <input type="text" name="data_umum[standar_permenaker]"
           placeholder="38/MEN/2016">

    <label>Klasifikasi</label>
    <select name="data_umum[klasifikasi]">
        <option value="">-- pilih --</option>
        <option value="Portable">Portable</option>
        <option value="Station">Station</option>
    </select>

    <label>Nomor Izin Pemakai</label>
    <input type="text" name="data_umum[nomor_izin_pemakai]">

    <label>Nama Operator</label>
    <input type="text" name="data_umum[nama_operator]">

    <label>Data Riwayat Motor Diesel</label>
    <textarea name="data_umum[riwayat_motor_diesel]"
              placeholder="Riwayat pemeliharaan, perbaikan, dan penggantian komponen"></textarea>
</div>

<h3>II. Data Teknik</h3>
<h4>A. ENGINE</h4>

<div class="form-grid">
    <label>Merek / Tipe</label>
    <input type="text" name="data_teknik[engine][merek_tipe]"
           placeholder="Federal / AT5625D">

    <label>Pabrik Pembuat / Negara</label>
    <input type="text" name="data_teknik[engine][pabrik_negara]"
           placeholder="Federal Generator Co., Ltd. / China">

    <label>Tahun Pembuatan</label>
    <input type="number" name="data_teknik[engine][tahun_pembuatan]"
           placeholder="2025">

    <label>Klasifikasi</label>
    <select name="data_teknik[engine][klasifikasi]">
        <option value="">-- pilih --</option>
        <option value="Portable">Portable</option>
        <option value="Station">Station</option>
    </select>

    <label>Nomor Seri</label>
    <input type="text" name="data_teknik[engine][nomor_seri]"
           placeholder="DJ20167">

    <label>Daya</label>
    <input type="text" name="data_teknik[engine][daya]"
           placeholder="630 KW">

    <label>Tenaga Mula</label>
    <input type="text" name="data_teknik[engine][tenaga_mula]"
           placeholder="Accu">

    <label>Jumlah Silinder</label>
    <input type="number" name="data_teknik[engine][jumlah_silinder]"
           placeholder="6">
</div>

<h4>B. GENERATOR</h4>

<div class="form-grid">
    <label>Merek / Tipe</label>
    <input type="text" name="data_teknik[generator][merek_tipe]"
           placeholder="Federal / FDD650S-3">

    <label>Pabrik Pembuat / Negara</label>
    <input type="text" name="data_teknik[generator][pabrik_negara]"
           placeholder="Federal Generator / China">

    <label>Tahun Pembuatan</label>
    <input type="number" name="data_teknik[generator][tahun_pembuatan]"
           placeholder="2025">

    <label>Nomor Seri</label>
    <input type="text" name="data_teknik[generator][nomor_seri]"
           placeholder="CP2503001">

    <label>Daya / Current</label>
    <input type="text" name="data_teknik[generator][daya_current]"
           placeholder="650 KVA">

    <label>Frekuensi</label>
    <input type="text" name="data_teknik[generator][frekuensi]"
           placeholder="50 Hz">

    <label>Putaran</label>
    <input type="text" name="data_teknik[generator][putaran]"
           placeholder="1500 Rpm">

    <label>Tegangan</label>
    <input type="text" name="data_teknik[generator][tegangan]"
           placeholder="230 / 400 V">

    <label>Faktor Daya (Cos Phi)</label>
    <input type="text" name="data_teknik[generator][faktor_daya]"
           placeholder="0.8">
</div>

<h3>III. Pemeriksaan Visual</h3>

<table class="table-inspeksi">
    <thead>
        <tr>
            <th>No</th>
            <th>Komponen</th>
            <th>Baik</th>
            <th>Buruk</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>

        <!-- ============================= -->
        <!-- A. KONSTRUKSI DASAR -->
        <!-- ============================= -->
        <tr class="section">
            <td colspan="5"><strong>A. KONSTRUKSI DASAR</strong></td>
        </tr>

        @php
            $konstruksi_dasar = [
                'pondasi_dasar' => 'Pondasi Dasar',
                'rumah_diesel'  => 'Rumah Diesel',
                'support'       => 'Support / Penopang',
                'anchor_bolt'   => 'Anchor Bolt',
            ];
        @endphp

        @foreach ($konstruksi_dasar as $key => $label)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $label }}</td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
            <td>
                <input type="text"
                       name="pemeriksaan_visual[{{ $key }}][keterangan]"
                       placeholder="Kondisi Baik">
            </td>
        </tr>
        @endforeach

        <!-- ============================= -->
        <!-- B. STRUKTUR KONSTRUKSI -->
        <!-- ============================= -->
        <tr class="section">
            <td colspan="5"><strong>B. STRUKTUR KONSTRUKSI</strong></td>
        </tr>

        @php
            $struktur = [
                'tangki_harian' => 'Tangki Harian',
                'muffler'       => 'Muffler',
                'bejana_angin'  => 'Bejana Angin',
                'panel'         => 'Panel',
            ];
        @endphp

        @foreach ($struktur as $key => $label)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $label }}</td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
            <td>
                <input type="text"
                       name="pemeriksaan_visual[{{ $key }}][keterangan]"
                       placeholder="Kondisi Baik / N/A">
            </td>
        </tr>
        @endforeach

        <!-- ============================= -->
        <!-- C. SISTEM PELUMASAN -->
        <!-- ============================= -->
        <tr class="section">
            <td colspan="5"><strong>C. SISTEM PELUMASAN</strong></td>
        </tr>

        @php
            $pelumasan = [
                'oli'           => 'Oli',
                'oil_strainer'  => 'Oil Strainer / Carter',
                'oil_cooler'    => 'Oil Cooler',
                'oil_filter'    => 'Oil Filter',
                'bypass_filter' => 'By Pass Filter',
                'safety_valve'  => 'Safety Valve',
                'packing'       => 'Packing',
            ];
        @endphp

        @foreach ($pelumasan as $key => $label)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $label }}</td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
            <td>
                <input type="text"
                       name="pemeriksaan_visual[{{ $key }}][keterangan]"
                       placeholder="Kondisi Baik / N/A">
            </td>
        </tr>
        @endforeach

        <!-- ============================= -->
        <!-- D. SISTEM BAHAN BAKAR -->
        <!-- ============================= -->
        <tr class="section">
            <td colspan="5"><strong>D. SISTEM BAHAN BAKAR</strong></td>
        </tr>

        @php
            $bahan_bakar = [
                'tanki_harian'   => 'Tanki Harian',
                'fuel_injector'  => 'Fuel Injector',
                'sambungan'      => 'Sambungan-sambungan',
                'float_tank'     => 'Float Tank',
                'fuel_filter'    => 'Fuel Filter',
                'fip'            => 'Fuel Injector Pump',
                'magnetic_screen'=> 'Magnetic Screen',
                'governor'       => 'Governor',
                'throttle_shaft' => 'Throttle Shaft',
                'regulator'      => 'Regulator',
                'shut_off_valve' => 'Shut Off Valve',
            ];
        @endphp

        @foreach ($bahan_bakar as $key => $label)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $label }}</td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
            <td>
                <input type="text"
                       name="pemeriksaan_visual[{{ $key }}][keterangan]"
                       placeholder="Kondisi Baik / Ada dan Berfungsi / N/A">
            </td>
        </tr>
        @endforeach

        <!-- ============================= -->
        <!-- E. ALAT BANTU MENGHIDUPKAN MESIN -->
        <!-- ============================= -->
        <tr class="section">
            <td colspan="5"><strong>E. ALAT BANTU MENGHIDUPKAN MESIN</strong></td>
        </tr>

        @php
            $starter = [
                'feed_pump'        => 'Feed Pump',
                'fuel_valve'       => 'Fuel Valve',
                'priming_pump'     => 'Priming Ring Pump',
                'heater_plug'      => 'Heater Plug',
                'heater_switch'    => 'Heater Switch',
                'pre_heater'            => 'Pre Heater', 
                'water_signal'          => 'Water Signal', 
                'starting_switch'       => 'Starting Switch', 
                'kutub_baterai'         => 'Kutub-Kutub Baterai', 
                'thermostart_tank'      => 'Thermostart Tank', 
                'thermostart'           => 'Thermostart', 
                'heater_signal'         => 'Heater Signal', 
                'thermostart_switch'    => 'Thermostart Switch', 
                'glow_plug'             => 'Glow Plug', 
                'engine_speed_sensor'   => 'Engine Speed Sensor', 
                'manometer_bejana'      => 'Manometer Bejana Tekan', 
                'service_meter'         => 'Service Meter', 
                'water_temp_sensor'     => 'Water Temperatur Sensor', 
                'motor_starter'         => 'Motor Starter', 
                'safety_valve_bejana'   => 'Safety Valve Bejana Tekan', 
                'bejana_angin'          => 'Bejana Angin', 
                        ];
        @endphp

        @foreach ($starter as $key => $label)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $label }}</td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
            <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
            <td>
                <input type="text"
                       name="pemeriksaan_visual[{{ $key }}][keterangan]"
                       placeholder="Kondisi Baik">
            </td>
        </tr>
        @endforeach

        <tr class="section">
    <td colspan="5"><strong>F. SISTEM PENDINGIN</strong></td>
</tr>

@php
$sistem_pendingin = [
    'cooling_water'   => 'Cooling Water',
    'baut_pengikat'   => 'Baut-Baut Pengikat',
    'klem_pengikat'   => 'Klem Pengikat',
    'radiator'        => 'Radiator',
    'thermostart_cool'=> 'Thermostart',
    'kipas'           => 'Kipas / Fan',
    'pelindung_kipas' => 'Pelindung Kipas',
    'putaran_kipas'   => 'Putaran Kipas',
    'bantalan'        => 'Bantalan / Dudukan',
];
@endphp

@foreach ($sistem_pendingin as $key => $label)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="Kondisi Baik">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>G. SISTEM SIRKULASI UDARA</strong></td>
</tr>

@php
$sirkulasi_udara = [
    'pre_cleaner'     => 'Pre-Cleaner',
    'dust_indicator'  => 'Dust Indicator',
    'air_cleaner'     => 'Air Cleaner / Filter',
    'turbocharger'    => 'Turbocharger',
    'klem_udara'      => 'Klem-klem Pengikat',
    'after_cooler'    => 'After Cooler',
    'muffler_udara'   => 'Muffler',
    'silincer'        => 'Silincer',
    'peredam_panas'   => 'Peredam Panas',
    'baut_udara'      => 'Baut-Baut Pengikat',
];
@endphp

@foreach ($sirkulasi_udara as $key => $label)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="Kondisi Baik">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>H. BAGIAN-BAGIAN UTAMA</strong></td>
</tr>

@php
$bagian_utama = [
    'baut_peredam'    => ['Baut-Baut Pengikat Peredam', '-'],
    'support'         => ['Support / Penopang', 'Kondisi Baik'],
    'rumah_fly'       => ['Rumah Fly / Wheel', 'Kondisi Baik'],
    'fly_wheel'       => ['Fly Wheel', 'Kondisi Baik'],
    'peredam_getar'   => ['Peredam Getaran', 'Kondisi Baik'],
    'sabuk_puli'      => ['Sabuk dan Puli', 'Kondisi Baik'],
    'crankshaft'      => ['Crankshaft / Poros Engkol', 'Kondisi Baik'],
];
@endphp

@foreach ($bagian_utama as $key => [$label, $default])
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="{{ $default }}">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>I. GENERATOR</strong></td>
</tr>

@php
$generator = [
    'terminal_generator' => 'Hubungan Terminal Generator',
    'kabel_generator'    => 'Kabel dari Generator ke Panel Board',
    'panel_board'        => 'Panel Board',
    'ampere_meter_gen'   => 'Ampere Meter',
    'volt_meter_gen'     => 'Volt Meter',
    'frequency'          => 'Frequency',
    'circuit_breaker'    => 'Circuit Breaker',
    'saklar'             => 'Saklar On – Off',
];
@endphp

@foreach ($generator as $key => $label)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="Kondisi Baik">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>J. TRANSMISI</strong></td>
</tr>

@php
$transmisi_visual = [
    'roda_gigi'        => ['Roda Gigi', 'Kondisi Baik'],
    'transmisi_sabuk'  => ['Transmisi Sabuk', 'Kondisi Baik'],
    'transmisi_rantai' => ['Transmisi Rantai', 'N/A'],
];
@endphp

@foreach ($transmisi_visual as $key => [$label, $default])
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="{{ $default }}">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>K. MAIN DISTRIBUTOR PANEL</strong></td>
</tr>

@php
$main_panel = [
    'hubungan_kabel' => ['Hubungan Kabel dari Panel Board ke Main Distributor Board', 'N/A'],
    'kondisi_panel'  => ['Kondisi Main Distributor Board', 'Kondisi Baik'],
    'ampere_main'    => ['Ampere Meter', 'Kondisi Baik'],
    'volt_main'      => ['Volt Meter', 'Kondisi Baik'],
    'main_cb'        => ['Main Circuit Breaker', 'Kondisi Baik'],
];
@endphp

@foreach ($main_panel as $key => [$label, $default])
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="{{ $default }}">
    </td>
</tr>
@endforeach

<tr class="section">
    <td colspan="5"><strong>L. SAFETY DEVICE</strong></td>
</tr>

@php
$safety_device = [
    'grounding'        => ['Grounding', 'Kondisi Baik'],
    'penyalur_petir'   => ['Penyalur Petir', 'N/A'],
    'emergency_stop'   => ['Emergency Stop', 'Kondisi Baik'],
    'governor'         => ['Governor', 'Kondisi Baik'],
    'thermostat'       => ['Thermostat', 'Kondisi Baik'],
    'water_signal_sd'  => ['Water Signal', 'Kondisi Baik'],
    'pelindung_kipas'  => ['Pelindung Kipas', 'Kondisi Baik'],
    'silincer'         => ['Silincer', 'Kondisi Baik'],
    'peredam_getaran'  => ['Peredam Getaran', 'Kondisi Baik'],
    'circuit_breaker'  => ['Circuit Breaker', 'Kondisi Baik'],
    'avr'              => ['AVR Automatic Voltage Regulator', 'Kondisi Baik'],
];
@endphp

@foreach ($safety_device as $key => [$label, $default])
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $label }}</td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Baik"></td>
    <td><input type="radio" name="pemeriksaan_visual[{{ $key }}][kondisi]" value="Buruk"></td>
    <td>
        <input type="text"
               name="pemeriksaan_visual[{{ $key }}][keterangan]"
               value="{{ $default }}">
    </td>
</tr>
@endforeach

<h3>IV. PENGUJIAN NDT</h3>

<table border="1" width="100%" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Komponen Yang Diuji</th>
            <th>Hasil</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>

@php
$ndt = [
    [
        'label' => 'Putaran Poros Diesel (Rpm)',
        'hasil' => '1500 Rpm',
        'ket'   => 'Memenuhi',
    ],
    [
        'label' => 'Pembumian (Grounding)',
        'hasil' => '0,36 Ohm',
        'ket'   => 'NAB = 5 Ohm',
    ],
    [
        'label' => 'Pengujian Sambungan Las',
        'hasil' => 'Baik',
        'ket'   => 'Memenuhi',
    ],
    [
        'label' => 'Kebisingan',
        'hasil' => '95,3 dB',
        'ket'   => 'NAB = 85 dB',
    ],
    [
        'label' => 'Getaran',
        'hasil' => "Tertinggi: 0,80 mm/s\nTerendah: 04,3 mm/s",
        'ket'   => 'Memenuhi',
    ],
    [
        'label' => 'Pencahayaan',
        'hasil' => '143 Lux',
        'ket'   => '> 100 Lux (Memenuhi)',
    ],
    [
        'label' => 'Iklim Kerja',
        'hasil' => 'Baik',
        'ket'   => 'Iklim kerja baik',
    ],
    [
        'label' => 'Pondasi',
        'hasil' => 'Baik',
        'ket'   => 'Pondasi kokoh',
    ],
    [
        'label' => 'Running Test / Load Test',
        'hasil' => 'Baik',
        'ket'   => 'Bekerja dengan baik',
    ],
];
@endphp

@foreach ($ndt as $i => $row)
<tr>
    <td>{{ $i + 1 }}</td>
    <td>{{ $row['label'] }}</td>
    <td>
        <textarea name="ndt[{{ $i }}][hasil]" rows="2">{{ $row['hasil'] }}</textarea>
    </td>
    <td>
        <textarea name="ndt[{{ $i }}][keterangan]" rows="2">{{ $row['ket'] }}</textarea>
    </td>
</tr>
@endforeach

<h3>V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE</h3>

<table border="1" width="100%" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Komponen</th>
            <th>Hasil</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>

@php
$safety_test = [
    ['Lampu Penanda Emergency', 'Baik', ''],
    ['Emergency Stop', 'Baik', 'Memenuhi Syarat'],
    ['Tahanan Pembumian (Grounding)', 'Baik', 'Memenuhi Syarat'],
    ['Tahanan Isolasi', 'Baik', 'Memenuhi Syarat'],
    ['Panel-Panel Indikator / Listrik', 'Baik', 'Memenuhi Syarat'],
    ['Pressure Gauge', 'Baik', 'Memenuhi Syarat'],
    ['Temperature Indicator', 'Baik', 'Memenuhi Syarat'],
    ['Water Indicator', 'Baik', 'Memenuhi Syarat'],
    ['Katup-Katup Pengaman', 'Baik', 'Memenuhi Syarat'],
    ['Radiator', 'Baik', 'Memenuhi Syarat'],
];
@endphp

@foreach ($safety_test as $i => $row)
<tr>
    <td>{{ $i + 1 }}</td>
    <td>{{ $row[0] }}</td>
    <td>
        <input type="text"
               name="safety_device[{{ $i }}][hasil]"
               value="{{ $row[1] }}">
    </td>
    <td>
        <input type="text"
               name="safety_device[{{ $i }}][keterangan]"
               value="{{ $row[2] }}">
    </td>
</tr>
@endforeach

    </tbody>
</table>


    </tbody>
</table>



    </tbody>
</table>

        <br><br>

        <button type="submit" class="btn-primary">
            Simpan Draft Laporan
        </button>

    </form>
</div>

</body>
</html>
