<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Automation Report K3 - LHPP</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        /* CSS Tambahan untuk memastikan dropdown terlihat rapi di atas layout lama Anda */
        .menu-item { position: relative; }
        .dropdown-content {
            display: none; /* Default tersembunyi */
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 50;
            border-radius: 8px;
            margin-top: 5px;
            overflow: hidden;
        }
        /* Class ini akan dipicu oleh Alpine.js */
        .is-open { display: block !important; }
        
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }
        .dropdown-content a:hover { background-color: #f1f1f1; }
    </style>
</head>
<body>

    <header>
        <div class="header-container">
            <h1>Sistem Pelaporan LHPP</h1>
            <p>Pilih kategori alat untuk pembuatan laporan pemeriksaan dan pengujian K3</p>
        </div>
    </header>

    <main class="menu-container">
        
        <div class="menu-item" x-data="{ open: false }">
            <button class="dropdown-btn" @click="open = !open" @click.away="open = false">
                <span>⚡ Listrik</span>
                <i class="fas fa-chevron-down ml-2 text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div class="dropdown-content" :class="open ? 'is-open' : ''">
                <a href="#">Instalasi Listrik</a>
                <a href="#">Penyalur Petir</a>
            </div>
        </div>

        <div class="menu-item" x-data="{ open: false }">
            <button class="dropdown-btn" @click="open = !open" @click.away="open = false">
                <span>🏗️ Pesawat Angkat Angkut</span>
                <i class="fas fa-chevron-down ml-2 text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div class="dropdown-content" :class="open ? 'is-open' : ''">
                <a href="#">Excavator</a>
                <a href="#">Forklift</a>
                <a href="#">Gondola</a>
                <a href="#">Konveyor</a>
                <a href="#">Loader</a>
                <a href="#">Overhead Crane</a>
            </div>
        </div>

        <div class="menu-item" x-data="{ open: false }">
            <button class="dropdown-btn" @click="open = !open" @click.away="open = false">
                <span>⚙️ Pesawat Tenaga Produksi</span>
                <i class="fas fa-chevron-down ml-2 text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div class="dropdown-content" :class="open ? 'is-open' : ''">
                <a href="/laporan/create">Mesin Produksi (Concrete Mixer)</a>
                <a href="#">Penggerak Mula</a>
            </div>
        </div>

        <div class="menu-item" x-data="{ open: false }">
            <button class="dropdown-btn" @click="open = !open" @click.away="open = false">
                <span>💨 Pesawat Uap Bejana Tekan</span>
                <i class="fas fa-chevron-down ml-2 text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div class="dropdown-content" :class="open ? 'is-open' : ''">
                <a href="#">Air Compressor</a>
                <a href="#">Air Dryer</a>
                <a href="#">Air Receiver Tank</a>
                <a href="#">Boiler</a>
            </div>
        </div>

        <div class="menu-item" x-data="{ open: false }">
            <button class="dropdown-btn" @click="open = !open" @click.away="open = false">
                <span>🔥 Proteksi Kebakaran</span>
                <i class="fas fa-chevron-down ml-2 text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div class="dropdown-content" :class="open ? 'is-open' : ''">
                <a href="#">APAR</a>
                <a href="#">Fire Alarm</a>
                <a href="#">Hydrant</a>
                <a href="#">Sprinkler</a>
            </div>
        </div>

    </main>

    <footer class="bg-gray-800 text-white pt-12 pb-6 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo K3" class="h-16 mb-4">
                    <p class="text-gray-400 text-sm italic">"Keselamatan Kerja Adalah Prioritas Utama Kami"</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Sistem Otomasi LHPP K3</h3>
                    <p class="text-gray-400">Platform digital untuk efisiensi pembuatan laporan K3 secara akurat.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Navigasi Laporan</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Instalasi Listrik</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pesawat Angkat Angkut</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jl. Madukoro Blok AA-BB, Semarang</li>
                        <li><i class="fas fa-phone-alt mr-2"></i> (024) 7613185</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-6 text-center">
                <small class="text-gray-400">© {{ date('Y') }} Dinas ESDM Provinsi Jawa Tengah.</small>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>