<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laporan - LHPP</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('storage/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body class="bg-gray-50">

    <header x-data="{ openMenu: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })" :class="scrolled
        ? 'bg-white/70 backdrop-blur-xl shadow-md py-2'
        : 'bg-white py-4'" class="sticky top-0 z-50 transition-all duration-300 border-b border-[#27ae60]/40">

        <!-- ===== Top Bar ===== -->
        <div class="max-w-7xl mx-auto px-3 sm:px-4 flex items-center justify-between">

            <!-- Logo + Title -->
            <div class="flex flex-col items-center transition-all duration-300">
                <img src="{{ asset('storage/images/image.png') }}" alt="Logo" class="transition-all duration-300 object-contain"
                    :class="scrolled ? 'h-9' : 'h-14 md:h-16'">
            </div>

            
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-green-600 font-medium transition">Beranda</a>
                <a href="/input_laporan" class="text-gray-700 hover:text-green-600 font-medium transition">Input LHPP</a>
                <a href="/dashboard" class="text-gray-700 hover:text-green-600 font-medium transition">Dashboard Laporan</a>
                <a href="/profile_perusahaan" class="text-gray-700 hover:text-green-600 font-medium transition">Profile Perusahaan</a>
                <a href="/tentang" class="text-gray-700 hover:text-green-600 font-medium transition">Tentang Sistem</a>
                <a href="/contact" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Hubungi Kami</a>
            </nav>

            
            <button x-show="!openMenu" x-transition.opacity @click="openMenu = true" class="lg:hidden z-[80]
            text-black rounded-xl 
           transition-all duration-300" :class="scrolled
        ? 'p-2 scale-90'
        : 'p-3 scale-100'">
                <i class="fas fa-bars text-lg"></i>
            </button>

            <div x-show="openMenu" x-cloak x-transition.opacity @click="openMenu = false"
                class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[60]"></div>

            <aside x-show="openMenu" x-cloak x-transition:enter="transition transform duration-300"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition transform duration-200" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed top-0 right-0 w-80 h-full bg-white z-[70] shadow-2xl flex flex-col">

                <div class="p-6 border-b flex items-center justify-between bg-slate-50">
                    <div>
                        <h2 class="text-lg font-bold text-[#2c3e50]">Menu Utama</h2>
                        <p class="text-xs text-gray-500">Navigasi LHPP</p>
                    </div>
                    <button @click="openMenu = false" class="text-gray-400 hover:text-red-500 transition">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

            
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    <a href="/" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="fas fa-home text-lg w-5"></i>
                        Beranda
                    </a>

                    <a href="/input_laporan" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="bi bi-file-earmark-plus text-lg"></i>
                        Input LHPP
                    </a>

                    <a href="/dashboard" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="fas fa-history text-lg w-5"></i>
                        Dashboard Laporan
                    </a>

                    <a href="/profile_perusahaan" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="fas fa-building text-lg w-5"></i>
                        Profile Perusahaan
                    </a>

                    <a href="/tentang" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="fas fa-info-circle text-lg w-5"></i>
                        Tentang Sistem
                    </a>

                </nav>
            </aside>
    </header>


    <main class="container mx-auto max-w-7xl px-4 py-12" x-data="{ visible: false, searchQuery: '' }"
        x-init="setTimeout(() => visible = true, 100)">

        <div class="mb-0 mt-0 text-center md:text-left" x-show="visible" x-transition:enter="transition ease-out duration-500">
            <h2 class="text-3xl font-bold text-[#2c3e50] mb-2 flex items-center justify-center md:justify-start gap-3">
                <i class="fas fa-database text-green-600"></i>
                Dashboard Laporan
            </h2>
            <p class="text-gray-500 text-lg">Manajemen arsip laporan pemeriksaan (LHPP) yang tersedia di sistem.</p>
        </div>

        <div class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-between" x-show="visible"
            x-transition:enter="transition ease-out duration-500 delay-100">
            <div class="relative w-full md:w-96">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                </span>
            </div>
        </div>

        <div class="hidden md:block bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 overflow-hidden border border-gray-100"
            x-show="visible" x-transition:enter="transition ease-out duration-500 delay-200">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 border-b border-gray-100 text-slate-500 uppercase text-xs tracking-widest">
                    <tr>
                        <th class="px-6 py-5 font-bold text-center">No</th>
                        <th class="px-6 py-5 font-bold">Nomor Laporan</th>
                        <th class="px-6 py-5 font-bold">Tanggal</th>
                        <th class="px-6 py-5 font-bold">Jenis Laporan</th>
                        <th class="px-6 py-5 font-bold">Pemeriksa</th>
                        <th class="px-6 py-5 font-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse ($laporans as $laporan)
                    <tr class="hover:bg-green-50/30 transition duration-200">
                        <td class="px-6 py-5 text-center text-slate-500">{{ $loop->iteration }}</td>
                        <td class="px-6 py-5 font-bold text-green-700">{{ $laporan->nomor_laporan }}</td>
                        <td class="px-6 py-5 text-slate-500 text-sm">{{ $laporan->tanggal_pemeriksaan }}</td>
                        <td class="px-6 py-5 font-medium text-slate-800">{{ $laporan->jenis_laporan }}</td>
                        <td class="px-6 py-5 text-slate-600 text-sm">{{ $laporan->nama_pemeriksa ?? '-' }}</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/laporan/{{ $laporan->id }}/edit" title="Edit"
                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/laporan/{{ $laporan->id }}/pdf" target="_blank" title="Unduh PDF"
                                    class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition">
                                    <i class="fas fa-file-pdf text-lg"></i>
                                </a>
                                <form action="/laporan/{{ $laporan->id }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-8 py-10 text-center text-gray-400 italic">
                            <i class="fas fa-folder-open text-4xl mb-3 block"></i>
                            Belum ada data laporan tersedia.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4" x-show="visible" x-transition:enter="transition ease-out duration-500 delay-300">
            @foreach ($laporans as $laporan)
            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 p-6 border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs font-black text-green-600 bg-green-50 px-3 py-1 rounded-full">{{ $laporan->nomor_laporan }}</span>
                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">{{ $laporan->tanggal_pemeriksaan }}</span>
                </div>
                <h3 class="font-bold text-slate-800 text-lg leading-tight mb-2">{{ $laporan->jenis_laporan }}</h3>
                <p class="text-sm text-slate-500 mb-4 italic">Pemeriksa: {{ $laporan->nama_pemeriksa ?? '-' }}</p>
                
                <div class="flex gap-2 border-t pt-4">
                    <a href="/laporan/{{ $laporan->id }}/edit" class="flex-1 py-3 bg-blue-50 text-blue-600 rounded-2xl font-bold text-center text-sm">Edit</a>
                    <a href="/laporan/{{ $laporan->id }}/pdf" target="_blank" class="flex-[2] py-3 bg-green-600 text-white rounded-2xl font-bold text-sm shadow-lg shadow-green-100 flex items-center justify-center gap-2">
                        <i class="fas fa-download"></i> PDF
                    </a>
                    <form action="/laporan/{{ $laporan->id }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full py-3 bg-red-50 text-red-500 rounded-2xl font-bold text-sm">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>