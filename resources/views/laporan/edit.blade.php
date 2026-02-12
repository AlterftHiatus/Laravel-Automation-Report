<!DOCTYPE html>
<html>

<head>
    <title>Buat Laporan Concrete Mixer</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/create.css') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="app-wrapper">
        <div class="container">
            <h2>Buat Laporan Concrete Mixer</h2>

            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/laporan/{{ $laporan->id }}/update" method="POST" enctype="multipart/form-data"
                id="reportForm">
                @csrf
                @method('PUT')

                <h3>DATA LAPORAN</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Laporan</label>
                        <input type="text" name="nomor_laporan"
                            value="{{ old('nomor_laporan', $laporan->nomor_laporan) }}" placeholder="Diisi oleh office">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="date" name="tanggal_pemeriksaan"
                            value="{{ old('tanggal_pemeriksaan', $laporan->tanggal_pemeriksaan) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Jenis Pemeriksaan</label>
                        <select name="jenis_pemeriksaan">
                            <option value="">-- pilih jenis pemeriksaan --</option>
                            @foreach (['Pertama', 'Berkala', 'Ulang', 'Khusus'] as $jenis)
                                <option value="{{ $jenis }}"
                                    {{ old('jenis_pemeriksaan', $laporan->jenis_pemeriksaan) == $jenis ? 'selected' : '' }}>
                                    {{ $jenis }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Pemeriksa</label>
                        <select name="nama_pemeriksa" required>
                            <option value="">-- pilih nama pemeriksa --</option>
                            <option value="NAUFAL ARYA PRIHANDIKO"
                                {{ old('nama_pemeriksa', $laporan->nama_pemeriksa) == 'NAUFAL ARYA PRIHANDIKO' ? 'selected' : '' }}>
                                NAUFAL ARYA PRIHANDIKO
                            </option>
                        </select>
                    </div>
                </div>

                <h3>I. Data Umum</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Perusahaan Pemilik</label>
                        <input type="text" name="perusahaan_pemilik"
                            value="{{ old('perusahaan_pemilik', $laporan->perusahaan_pemilik) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Perusahaan Pemakai</label>
                        <input type="text" name="perusahaan_pemakai"
                            value="{{ old('perusahaan_pemakai', $laporan->perusahaan_pemakai) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Alamat Pemilik</label>
                        <textarea name="alamat_pemilik">{{ old('alamat_pemilik', $laporan->alamat_pemilik) }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Alamat Pemakai</label>
                        <textarea name="alamat_pemakai">{{ old('alamat_pemakai', $laporan->alamat_pemakai) }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Pengurus / Penanggung Jawab</label>
                        <input type="text" name="penanggung_jawab"
                            value="{{ old('penanggung_jawab', $laporan->penanggung_jawab) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Lokasi Unit</label>
                        <input type="text" name="lokasi_unit"
                            value="{{ old('lokasi_unit', $laporan->lokasi_unit) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Jenis Pesawat / Tipe</label>
                        <input type="text" name="jenis_pesawat" value="Concrete Mixer" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Digunakan Untuk</label>
                        <input type="text" name="digunakan_untuk"
                            value="{{ old('digunakan_untuk', $laporan->dataTeknis->digunakan_untuk ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama / No. Sertifikat Juru Las</label>
                        <input type="text" name="sertifikat_juru_las"
                            value="{{ old('sertifikat_juru_las', $laporan->sertifikat_juru_las) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>No. SKP / Bidang PJK3</label>
                        <input type="text" name="no_skp_pjk3" value="5/521/AS.01.02/IV/2025" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>No. SKP / Bidang AK3</label>
                        <input type="text" name="no_skp_ak3" value="5/24797/AS.01.04/XII/2024" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Sertifikasi Standar</label>
                        <input type="text" name="sertifikasi_standar"
                            value="{{ old('sertifikasi_standar', $laporan->sertifikasi_standar) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Izin Pemakai</label>
                        <input type="text" name="nomor_izin_pemakai"
                            value="{{ old('nomor_izin_pemakai', $laporan->nomor_izin_pemakai) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Operator</label>
                        <input type="text" name="nama_operator"
                            value="{{ old('nama_operator', $laporan->nama_operator) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Data Riwayat Motor Diesel</label>
                        <textarea name="riwayat_pemeriksaan">{{ old('riwayat_pemeriksaan', $laporan->riwayat_pemeriksaan) }}</textarea>
                    </div>
                </div>

                <h3>II. DATA TEKNIK</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Merk / Tipe</label>
                        <input type="text" name="merk_tipe"
                            value="{{ old('merk_tipe', $laporan->dataTeknis->merk_tipe ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Pabrik Pembuat / Negara</label>
                        <input type="text" name="pembuat_pemasang"
                            value="{{ old('pembuat_pemasang', $laporan->dataTeknis->pembuat_pemasang ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tahun Pembuatan</label>
                        <input type="number" name="tahun_pembuatan"
                            value="{{ old('tahun_pembuatan', $laporan->dataTeknis->tahun_pembuatan ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Klasifikasi</label>
                        <input type="text" name="klasifikasi"
                            value="{{ old('klasifikasi', $laporan->dataTeknis->klasifikasi ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Seri</label>
                        <input type="text" name="nomor_seri"
                            value="{{ old('nomor_seri', $laporan->dataTeknis->nomor_seri ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" name="kapasitas"
                            value="{{ old('kapasitas', $laporan->dataTeknis->kapasitas ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Power</label>
                        <input type="text" name="power"
                            value="{{ old('power', $laporan->dataTeknis->power ?? '') }}">
                    </div>
                </div>

                <div class="dimensi-container">
                    <p><strong>Dimensi Mesin</strong></p>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Diameter (mm)</label>
                            <input type="number" name="diameter_mm"
                                value="{{ old('diameter_mm', $laporan->dataTeknis->diameter_mm ?? '') }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Panjang (mm)</label>
                            <input type="number" name="panjang_mm"
                                value="{{ old('panjang_mm', $laporan->dataTeknis->panjang_mm ?? '') }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Tinggi (mm)</label>
                            <input type="number" name="tinggi_mm"
                                value="{{ old('tinggi_mm', $laporan->dataTeknis->tinggi_mm ?? '') }}">
                        </div>
                    </div>
                </div>

                <h3>III. PEMERIKSAAN VISUAL</h3>
                @php
                    $currentKategori = null;
                    $visualCategories = [
                        'Konstruksi Dasar',
                        'Struktur Konstruksi',
                        'Safety Device',
                        'Transmisi dan Bagian-Bagian Unit Mesin',
                    ];
                @endphp

                @foreach ($checklists as $item)
                    @if (!in_array($item->kategori, $visualCategories))
                        @continue
                    @endif

                    @php
                        $oldChecklist = $laporan->checklistResults->firstWhere('checklist_item_id', $item->id);
                        $existingFoto = $laporan->fotos->firstWhere('checklist_item_id', $item->id);
                    @endphp

                    @if ($currentKategori !== $item->kategori)
                        <h4 class="category-title">{{ $item->kategori }}</h4>
                        @php $currentKategori = $item->kategori; @endphp
                    @endif

                    <div class="checklist-card">
                        <div class="checklist-header">{{ $item->nama_item }}</div>

                        {{-- HASIL & KETERANGAN --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label>Kondisi</label>
                                <select name="checklist[{{ $item->id }}][hasil]" required>
                                    <option value="">-- pilih kondisi --</option>
                                    <option value="Baik"
                                        {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == 'Baik' ? 'selected' : '' }}>
                                        Baik
                                    </option>
                                    <option value="Buruk"
                                        {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == 'Buruk' ? 'selected' : '' }}>
                                        Buruk
                                    </option>
                                    <option value="-"
                                        {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == '-' ? 'selected' : '' }}>
                                        -
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="checklist[{{ $item->id }}][keterangan]">
                                    <option value="">-- pilih keterangan --</option>

                                    @foreach (['Kondisi Baik', 'Kondisi Kuat', 'Terpasang dengan baik', 'Terpasang, Kuat', 'Belum terpasang', 'Tidak ada', 'N/A'] as $ket)
                                        <option value="{{ $ket }}"
                                            {{ old("checklist.$item->id.keterangan", $oldChecklist->keterangan ?? '') == $ket ? 'selected' : '' }}>
                                            {{ $ket }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- FOTO READONLY --}}
                        @if ($existingFoto)
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Dokumentasi (Readonly)</label><br>

                                    <img src="{{ asset('storage/' . $existingFoto->file_path) }}"
                                        style="max-width:200px; height:auto; border:1px solid #ccc; padding:5px;">

                                    <div style="font-size:12px; margin-top:5px;">
                                        {{ $existingFoto->keterangan ?? $item->nama_item }}
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                @endforeach

                <h3>IV. PENGUJIAN NDT</h3>
                @foreach ($checklists as $item)
                    @if ($item->kategori === 'Pengujian NDT')
                        @php
                            $oldChecklist = $laporan->checklistResults->firstWhere('checklist_item_id', $item->id);
                            $existingFoto = $laporan->fotos->firstWhere('checklist_item_id', $item->id);
                        @endphp

                        <div class="checklist-card">
                            <div class="checklist-header">{{ $item->nama_item }}</div>

                            {{-- HASIL & KETERANGAN --}}
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Hasil</label>
                                    <input type="text" name="checklist[{{ $item->id }}][hasil]"
                                        value="{{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') }}">
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="checklist[{{ $item->id }}][keterangan]"
                                        value="{{ old("checklist.$item->id.keterangan", $oldChecklist->keterangan ?? '') }}"
                                        placeholder="Contoh: Memenuhi">
                                </div>
                            </div>

                            {{-- FOTO READONLY --}}
                            @if ($existingFoto)
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Dokumentasi (Readonly)</label><br>

                                        <img src="{{ asset('storage/' . $existingFoto->file_path) }}"
                                            style="max-width:200px; height:auto; border:1px solid #ccc; padding:5px;">

                                        <div style="font-size:12px; margin-top:5px;">
                                            {{ $existingFoto->keterangan ?? $item->nama_item }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    @endif
                @endforeach

                <h3>V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE</h3>
                @foreach ($checklists as $item)
                    @if ($item->kategori === 'Pengukuran dan Pengujian Safety Device')
                        @php
                            $oldChecklist = $laporan->checklistResults->firstWhere('checklist_item_id', $item->id);
                            $existingFoto = $laporan->fotos->firstWhere('checklist_item_id', $item->id);
                        @endphp

                        <div class="checklist-card">
                            <div class="checklist-header">{{ $item->nama_item }}</div>

                            {{-- HASIL & KETERANGAN --}}
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Hasil</label>
                                    <select name="checklist[{{ $item->id }}][hasil]" required>
                                        <option value="">-- pilih hasil --</option>
                                        <option value="Baik"
                                            {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == 'Baik' ? 'selected' : '' }}>
                                            Baik
                                        </option>
                                        <option value="Buruk"
                                            {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == 'Buruk' ? 'selected' : '' }}>
                                            Buruk
                                        </option>
                                        <option value="N/A"
                                            {{ old("checklist.$item->id.hasil", $oldChecklist->hasil ?? '') == 'N/A' ? 'selected' : '' }}>
                                            N/A
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="checklist[{{ $item->id }}][keterangan]"
                                        value="{{ old("checklist.$item->id.keterangan", $oldChecklist->keterangan ?? '') }}">
                                </div>
                            </div>

                            {{-- FOTO READONLY --}}
                            @if ($existingFoto)
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Dokumentasi (Readonly)</label><br>

                                        <img src="{{ asset('storage/' . $existingFoto->file_path) }}"
                                            style="max-width:200px; height:auto; border:1px solid #ccc; padding:5px;">

                                        <div style="font-size:12px; margin-top:5px;">
                                            {{ $existingFoto->keterangan ?? $item->nama_item }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    @endif
                @endforeach

            </form>
        </div>
    </div>

    <script src="{{ asset('js/create.js') }}?v={{ time() }}"></script>
</body>

</html>
