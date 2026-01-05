<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Automation Report K3 - LHPP</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <header>
        <div class="header-container">
            <h1>Sistem Pelaporan LHPP</h1>
            <p>Pilih kategori alat untuk pembuatan laporan pemeriksaan dan pengujian K3</p>
        </div>
    </header>

    <main class="menu-container">

        <div class="dropdown">
            <button class="dropdown-btn">
                <span>⚡ Listrik</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/listrik/instalasi">Instalasi Listrik</a>
                <a href="/laporan/listrik/penyalur-petir">Penyalur Petir</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn">
                <span>🏗️ Pesawat Angkat Angkut</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/paa/excavator">Excavator</a>
                <a href="/laporan/paa/forklift">Forklift</a>
                <a href="/laporan/paa/gondola">Gondola</a>
                <a href="/laporan/paa/konveyor">Konveyor</a>
                <a href="/laporan/paa/loader">Loader</a>
                <a href="/laporan/paa/overhead-crane">Over Head Crane</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn">
                <span>⚙️ Pesawat Tenaga Produksi</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/ptp/concrete-mixer">Mesin Produksi (Concrete Mixer)</a>
                <a href="/laporan/ptp/penggerak-mula">Penggerak Mula</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn">
                <span>💨 Pesawat Uap Bejana Tekan</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/pubt/air-compressor">Air Compressor</a>
                <a href="/laporan/pubt/air-dryer">Air Dryer</a>
                <a href="/laporan/pubt/air-receiver-tank">Air Receiver Tank</a>
                <a href="/laporan/pubt/boiler">Boiler</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn">
                <span>🔥 Proteksi Kebakaran</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/fire/apar">APAR</a>
                <a href="/laporan/fire/fire-alarm">Fire Alarm</a>
                <a href="/laporan/fire/hydrant">Hydrant</a>
                <a href="/laporan/fire/sprinkler">Sprinkler</a>
            </div>
        </div>

    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Automation Report K3 - Keselamatan Kerja Adalah Prioritas</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>