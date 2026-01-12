<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat laporan LHPP</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine JS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

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
                <a href="/riwayat" class="text-gray-700 hover:text-green-600 font-medium transition">Riwayat Laporan</a>
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

                    <a href="/riwayat" class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-green-50 hover:text-green-600
                      transition font-medium text-slate-700">
                        <i class="fas fa-history text-lg w-5"></i>
                        Riwayat Laporan
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

                <!-- Footer -->
                <div class="p-6 border-t">
                    <a href="/contact" class="w-full flex items-center justify-center gap-2
                      py-3.5 bg-[#27ae60] text-white rounded-xl
                      font-bold hover:bg-[#219150]
                      shadow-lg shadow-green-100 transition">
                        <i class="fas fa-envelope text-lg"></i>
                        Hubungi Kami
                    </a>
                </div>

            </aside>
    </header>


    <main class="container mx-auto max-w-7xl px-4 py-12" x-data="{ visible: false, searchQuery: '' }"
        x-init="setTimeout(() => visible = true, 100)">

        <div class="mb-10 text-center md:text-left" x-show="visible"
            x-transition:enter="transition ease-out duration-500">
            <h2 class="text-3xl font-bold text-[#2c3e50] mb-2 flex items-center justify-center md:justify-start gap-3">
                <i class="fas fa-file-invoice text-green-600"></i>
                Arsip Laporan Selesai
            </h2>
            <p class="text-gray-500 text-lg">Daftar seluruh laporan pemeriksaan (LHPP) yang telah diterbitkan.</p>
        </div>

        <div class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-between" x-show="visible"
            x-transition:enter="transition ease-out duration-500 delay-100">
            <div class="relative w-full md:w-96">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" x-model="searchQuery" placeholder="Cari berdasarkan kode atau judul..."
                    class="w-full pl-10 pr-4 py-3 rounded-2xl border border-gray-200 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition shadow-sm">
            </div>

            <a href="/laporan/create"
                class="w-full md:w-auto bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-2xl font-bold transition flex items-center justify-center gap-2 shadow-lg shadow-green-100">
                <i class="fas fa-plus"></i> Buat Laporan Baru
            </a>
        </div>

        <div class="hidden md:block bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 overflow-hidden border border-gray-100"
            x-show="visible" x-transition:enter="transition ease-out duration-500 delay-200">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 border-b border-gray-100 text-slate-500 uppercase text-xs tracking-widest">
                    <tr>
                        <th class="px-8 py-5 font-bold">No. Kode</th>
                        <th class="px-8 py-5 font-bold">Judul Laporan</th>
                        <th class="px-8 py-5 font-bold">Pemeriksa</th>
                        <th class="px-8 py-5 font-bold">Tanggal Terbit</th>
                        <th class="px-8 py-5 font-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-green-50/30 transition duration-200">
                        <td class="px-8 py-5 font-bold text-green-700">LHPP-2024-001</td>
                        <td class="px-8 py-5 font-medium text-slate-800">Pemeriksaan Berkala Crane Overhead</td>
                        <td class="px-8 py-5 text-slate-600 text-sm">Ahmad Pratama</td>
                        <td class="px-8 py-5 text-slate-500 text-sm">12 Jan 2026</td>
                        <td class="px-8 py-5">
                            <div class="flex items-center justify-center gap-3">
                                <button title="Lihat"
                                    class="p-2.5 text-blue-600 hover:bg-blue-50 rounded-xl transition"><i
                                        class="fas fa-eye"></i></button>
                                <button title="Unduh PDF"
                                    class="flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 rounded-xl hover:bg-green-200 transition font-bold text-xs">
                                    <i class="fas fa-download"></i> UNDUH PDF
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-green-50/30 transition duration-200">
                        <td class="px-8 py-5 font-bold text-green-700">LHPP-2024-002</td>
                        <td class="px-8 py-5 font-medium text-slate-800">Uji Kelayakan Bejana Tekan</td>
                        <td class="px-8 py-5 text-slate-600 text-sm">Siti Rahmawati</td>
                        <td class="px-8 py-5 text-slate-500 text-sm">15 Jan 2026</td>
                        <td class="px-8 py-5">
                            <div class="flex items-center justify-center gap-3">
                                <button title="Lihat"
                                    class="p-2.5 text-blue-600 hover:bg-blue-50 rounded-xl transition"><i
                                        class="fas fa-eye"></i></button>
                                <button title="Unduh PDF"
                                    class="flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 rounded-xl hover:bg-green-200 transition font-bold text-xs">
                                    <i class="fas fa-download"></i> UNDUH PDF
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="px-8 py-4 bg-slate-50 flex items-center justify-between border-t border-gray-100">
                <span class="text-sm text-slate-400 font-medium">Menampilkan 2 laporan terbaru</span>
                <div class="flex gap-2">
                    <button
                        class="p-2 px-4 border border-slate-200 rounded-xl text-slate-400 cursor-not-allowed text-xs font-bold uppercase">Prev</button>
                    <button
                        class="p-2 px-4 border border-green-200 text-green-600 rounded-xl hover:bg-green-50 text-xs font-bold uppercase">Next</button>
                </div>
            </div>
        </div>

        <div class="md:hidden space-y-4" x-show="visible"
            x-transition:enter="transition ease-out duration-500 delay-300">
            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 p-6 border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs font-black text-green-600 bg-green-50 px-3 py-1 rounded-full">LHPP-001</span>
                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">12 Jan 2026</span>
                </div>
                <h3 class="font-bold text-slate-800 text-lg leading-tight mb-4">Pemeriksaan Berkala Crane Overhead</h3>
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 text-xs">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="text-sm">
                        <p class="text-slate-400 text-[10px] uppercase font-bold leading-none">Pemeriksa</p>
                        <p class="font-bold text-slate-700">Ahmad Pratama</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex-1 py-3 bg-slate-100 text-slate-600 rounded-2xl font-bold text-sm">Detail</button>
                    <button
                        class="flex-[2] py-3 bg-green-600 text-white rounded-2xl font-bold text-sm shadow-lg shadow-green-100 flex items-center justify-center gap-2">
                        <i class="fas fa-download"></i> Unduh PDF
                    </button>
                </div>
            </div>
        </div>

    </main>
     <footer class="bg-gray-800 text-white pt-14 pb-6 mt-0">

        <div class="container mx-auto px-4">

            <div class="flex flex-col items-center mb-10 text-center">
                <img src="{{ asset('storage/images/image.png') }}" alt="Logo Perusahaan" class="h-24 md:h-20 lg:h-28 w-auto mb-4">
                <p class="text-gray-400 text-sm italic">
                    "Keselamatan dan Kesehatan Kerja adalah Prioritas Utama"
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10">

                <div>
                    <h4 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">
                        Kontak Kami
                    </h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <h1 class="text-gray-400">Jl. Bukit Wato-Wato VII<br class="hidden md:block">
                                Blok B2A/14, Permata Puri,<br class="hidden md:block">
                                Beringin, Ngaliyan,<br class="hidden md:block">
                                Kota Semarang
                            </h1>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-envelope mt-1"></i>
                            <span>info@cakrateknika.com</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-phone-alt mt-1"></i>
                            <span>+62 856-4042-4888</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">
                        Ikuti Kami
                    </h4>
                    <div class="flex gap-4 mt-4" style=" display: flex; justify-content: center;">

                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 hover:bg-blue-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://www.instagram.com/cakrateknika?igsh=MWlhYWtydTBjazNjNA==" target="_blank"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 hover:bg-pink-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 hover:bg-blue-500 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>
                </div>

            </div>

            <div class="border-t border-gray-700 pt-6 text-center">
                <small class="text-gray-400">
                    © 2026 Sistem Otomasi Laporan Cakra Teknika Solusi
                </small>
            </div>

        </div>
    </footer>


    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>