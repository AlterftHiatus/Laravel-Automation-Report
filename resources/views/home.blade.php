<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Automation Report K3 - LHPP</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="header-container">
            <h1>Sistem Pelaporan LHPP</h1>
            <p>Pilih kategori alat untuk pembuatan laporan pemeriksaan dan pengujian K3</p>
        </div>
    </header>

    <main class="menu-container">

        <div class="menu-item">
            <a href="/laporan/listrik" class="menu-card">
                <span>⚡ Listrik</span>
            </a>
        </div>

        <div class="menu-item">
            <a href="/laporan/paa" class="menu-card">
                <span>🏗️ Pesawat Angkat Angkut</span>
            </a>
        </div>

        <div class="menu-item dropdown">
            <button class="dropdown-btn">
                <span>⚙️ Pesawat Tenaga Produksi</span>
                <i class="arrow"></i>
            </button>
            <div class="dropdown-content">
                <a href="/laporan/create">Mesin Produksi (Concrete Mixer)</a>
                <a href="/laporan/ptp/penggerak-mula">Penggerak Mula</a>
            </div>
        </div>

        <div class="menu-item">
            <a href="/laporan/pubt" class="menu-card">
                <span>💨 Pesawat Uap Bejana Tekan</span>
            </a>
        </div>

        <div class="menu-item">
            <a href="/laporan/fire" class="menu-card">
                <span>🔥 Proteksi Kebakaran</span>
            </a>
        </div>

    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Automation Report K3 - Keselamatan Kerja Adalah Prioritas</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>