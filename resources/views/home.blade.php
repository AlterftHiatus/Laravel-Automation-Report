<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laporan K3</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: auto; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { color: #2c3e50; margin-bottom: 10px; }
        .header p { color: #7f8c8d; }
        
        /* Grid System */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        
        /* Card Style */
        .card { background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); overflow: hidden; border-top: 5px solid #3498db; }
        .card-header { padding: 15px 20px; background: #f8f9fa; border-bottom: 1px solid #eee; }
        .card-header h2 { margin: 0; font-size: 1.2rem; color: #2c3e50; }
        
        .card-body { padding: 10px 0; }
        
        /* Link Style */
        .sub-link { 
            display: flex; 
            justify-content: space-between; 
            align-items: center;
            padding: 12px 20px; 
            text-decoration: none; 
            color: #34495e; 
            border-bottom: 1px solid #f1f1f1;
            transition: background 0.2s;
        }
        .sub-link:last-child { border-bottom: none; }
        .sub-link:hover { background: #e8f4fd; color: #3498db; }
        .sub-link i { font-size: 0.8rem; color: #bdc3c7; }

        /* Color Coding for Categories */
        .cat-1 { border-top-color: #f1c40f; } /* Listrik - Kuning */
        .cat-2 { border-top-color: #3498db; } /* PAA - Biru */
        .cat-3 { border-top-color: #e74c3c; } /* PTP - Merah */
        .cat-4 { border-top-color: #9b59b6; } /* PUBT - Ungu */
        .cat-5 { border-top-color: #e67e22; } /* Fire - Oranye */
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Automation Laporan K3</h1>
        <p>Pilih sub-bagian di bawah ini untuk mulai membuat laporan baru</p>
    </div>

    <div class="grid">
        <div class="card cat-1">
            <div class="card-header"><h2>1. Listrik</h2></div>
            <div class="card-body">
                <a href="{{ route('laporan.create', ['jenis' => 'Instalasi Listrik']) }}" class="sub-link">Instalasi Listrik <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Penyalur Petir']) }}" class="sub-link">Penyalur Petir <span>&rarr;</span></a>
            </div>
        </div>

        <div class="card cat-2">
            <div class="card-header"><h2>2. Pesawat Angkat Angkut</h2></div>
            <div class="card-body">
                <a href="{{ route('laporan.create', ['jenis' => 'Excavator']) }}" class="sub-link">Excavator <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Forklift']) }}" class="sub-link">Forklift <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Gondola']) }}" class="sub-link">Gondola <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Konveyor']) }}" class="sub-link">Konveyor <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Loader']) }}" class="sub-link">Loader <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Over Head Crane']) }}" class="sub-link">Over Head Crane <span>&rarr;</span></a>
            </div>
        </div>

        <div class="card cat-3">
            <div class="card-header"><h2>3. Pesawat Tenaga Produksi</h2></div>
            <div class="card-body">
                <a href="{{ route('laporan.create', ['jenis' => 'Mesin Produksi']) }}" class="sub-link">Mesin Produksi <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Penggerak Mula']) }}" class="sub-link">Penggerak Mula <span>&rarr;</span></a>
            </div>
        </div>

        <div class="card cat-4">
            <div class="card-header"><h2>4. Pesawat Uap Bejana Tekan</h2></div>
            <div class="card-body">
                <a href="{{ route('laporan.create', ['jenis' => 'Air Compressor']) }}" class="sub-link">Air Compressor <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Air Dryer']) }}" class="sub-link">Air Dryer <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Air Receiver Tank']) }}" class="sub-link">Air Receiver Tank <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Boiler']) }}" class="sub-link">Boiler <span>&rarr;</span></a>
            </div>
        </div>

        <div class="card cat-5">
            <div class="card-header"><h2>5. Proteksi Kebakaran</h2></div>
            <div class="card-body">
                <a href="{{ route('laporan.create', ['jenis' => 'APAR']) }}" class="sub-link">APAR <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Fire Alarm']) }}" class="sub-link">Fire Alarm <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Hydrant']) }}" class="sub-link">Hydrant <span>&rarr;</span></a>
                <a href="{{ route('laporan.create', ['jenis' => 'Sprinkler']) }}" class="sub-link">Sprinkler <span>&rarr;</span></a>
            </div>
        </div>
    </div>

    <footer style="text-align: center; margin-top: 50px; color: #bdc3c7; font-size: 0.9rem;">
        &copy; {{ date('Y') }} Automation Laporan Laravel
    </footer>
</div>

</body>
</html>