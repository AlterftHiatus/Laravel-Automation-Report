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

            <form action="/laporan" method="POST" enctype="multipart/form-data" id="reportForm">
                @csrf

                <h3>DATA LAPORAN</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Laporan</label>
                        <input type="text" name="nomor_laporan" value="Diisi manual oleh Office" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="date" name="tanggal_pemeriksaan">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Jenis Pemeriksaan</label>
                        <select name="jenis_pemeriksaan">
                            <option value="">-- pilih jenis pemeriksaan --</option>
                            <option value="Pertama">Pertama</option>
                            <option value="Berkala">Berkala</option>
                            <option value="Ulang">Ulang</option>
                            <option value="Khusus">Khusus</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Pemeriksa</label>
                        <select name="nama_pemeriksa" required>
                            <option value="">-- pilih nama pemeriksa --</option>

                            <!-- isi opsi di sini -->
                            <option value="NAUFAL ARYA PRIHANDIKO">NAUFAL ARYA PRIHANDIKO</option>
                            {{-- <option value="Pemeriksa B">Pemeriksa B</option> --}}
                        </select>
                    </div>

                </div>

                <h3>I. Data Umum</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Perusahaan Pemilik</label>
                        <input type="text" name="perusahaan_pemilik">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Perusahaan Pemakai</label>
                        <input type="text" name="perusahaan_pemakai">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Alamat Pemilik</label>
                        <textarea name="alamat_pemilik"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Alamat Pemakai</label>
                        <textarea name="alamat_pemakai"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Pengurus / Penanggung Jawab</label>
                        <input type="text" name="penanggung_jawab">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Lokasi Unit</label>
                        <input type="text" name="lokasi_unit">
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
                        <input type="text" name="digunakan_untuk">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama / No. Sertifikat Juru Las</label>
                        <input type="text" name="sertifikat_juru_las">
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
                        <input type="text" name="sertifikasi_standar">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Izin Pemakai</label>
                        <input type="text" name="nomor_izin_pemakai">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Operator</label>
                        <input type="text" name="nama_operator">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Data Riwayat Motor Diesel</label>
                        <textarea name="riwayat_pemeriksaan"></textarea>
                    </div>
                </div>

                <h3>II. DATA TEKNIK</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Merk / Tipe</label>
                        <input type="text" name="merk_tipe">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Pabrik Pembuat / Negara</label>
                        <input type="text" name="pembuat_pemasang">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tahun Pembuatan</label>
                        <input type="number" name="tahun_pembuatan">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Klasifikasi</label>
                        <input type="text" name="klasifikasi">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Seri</label>
                        <input type="text" name="nomor_seri">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" name="kapasitas" placeholder="contoh: 350 Liter">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Power</label>
                        <input type="text" name="power" placeholder="contoh: 10 PK">
                    </div>
                </div>

                <div class="dimensi-container">
                    <p><strong>Dimensi Mesin</strong></p>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Diameter (mm)</label>
                            <input type="number" name="diameter_mm">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Panjang (mm)</label>
                            <input type="number" name="panjang_mm">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Tinggi (mm)</label>
                            <input type="number" name="tinggi_mm">
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

                    @if ($currentKategori !== $item->kategori)
                        <h4 class="category-title">{{ $item->kategori }}</h4>
                        @php $currentKategori = $item->kategori; @endphp
                    @endif

                    <div class="checklist-card">
                        <div class="checklist-header">{{ $item->nama_item }}</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Kondisi</label>
                                <select name="checklist[{{ $item->id }}][hasil]" required>
                                    <option value="">-- pilih kondisi --</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="-">-</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="checklist[{{ $item->id }}][keterangan]">
                                    <option value="">-- pilih keterangan --</option>
                                    <option value="Kondisi Baik">Kondisi Baik</option>
                                    <option value="Kondisi Kuat">Kondisi Kuat</option>
                                    <option value="Terpasang dengan baik">Terpasang dengan baik</option>
                                    <option value="Terpasang, Kuat">Terpasang, Kuat</option>
                                    <option value="Belum terpasang">Belum terpasang</option>
                                    <option value="Tidak ada">Tidak ada</option>
                                    <option value="N/A">N/A</option>
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach

                <h3>IV. PENGUJIAN NDT</h3>
                @foreach ($checklists as $item)
                    @if ($item->kategori === 'Pengujian NDT')
                        <div class="checklist-card">
                            <div class="checklist-header">{{ $item->nama_item }}</div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Hasil</label>
                                    <input type="text" name="checklist[{{ $item->id }}][hasil]">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="checklist[{{ $item->id }}][keterangan]"
                                        placeholder="Contoh: Memenuhi">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <h3>V. PENGUKURAN DAN PENGUJIAN SAFETY DEVICE</h3>
                @foreach ($checklists as $item)
                    @if ($item->kategori === 'Pengukuran dan Pengujian Safety Device')
                        <div class="checklist-card">
                            <div class="checklist-header">{{ $item->nama_item }}</div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Hasil</label>
                                    <select name="checklist[{{ $item->id }}][hasil]" required>
                                        <option value="">-- pilih hasil --</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="checklist[{{ $item->id }}][keterangan]">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <h3>Dokumentasi Foto</h3>
                <div id="dokumentasi-wrapper">
                    <div class="dokumentasi-item">
                        <h4>Dokumentasi #1</h4>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="dokumentasi[0][foto]" accept="image/*"
                                    capture="environment" required class="file-input-hidden">

                                <button type="button" class="btn-file">
                                    📷 Ambil Gambar
                                </button>

                                <span class="file-name">Belum ada gambar</span>
                            </div>
                            
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="dokumentasi[0][keterangan]"
                                    placeholder="contoh: Kondisi mesin">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="button" class="btn-secondary" onclick="tambahDokumentasi()">+ Tambah
                        Dokumentasi</button>
                </div>

            </form>
        </div>
    </div>

    <script src="{{ asset('js/create.js') }}?v={{ time() }}"></script>
</body>

</html>
