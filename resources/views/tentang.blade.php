<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Perusahaan - Cakra Teknika Solusi</title>

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

    <main class="container mx-auto max-w-6xl px-4 py-16 bg-gradient-to-br from-green-50 to-white min-h-screen">

        <!-- Penjelasan Sistem -->
        <section class="mb-16 text-center">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="flex justify-center mb-6">
                    <div class="bg-gradient-to-r from-green-400 to-blue-500 p-4 rounded-full">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#2c3e50] mb-6">
                    Tentang Sistem Otomasi Laporan K3
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed max-w-4xl mx-auto">
                    Sistem Otomasi Laporan Keselamatan dan Kesehatan Kerja (K3) ini dirancang untuk memudahkan proses pelaporan harian pelaksanaan proyek (LHPP) dengan fokus pada aspek keselamatan kerja. 
                    Dikembangkan menggunakan teknologi modern seperti <strong>PHP</strong> untuk backend yang kuat, <strong>JavaScript</strong> dan <strong>CSS</strong> untuk interaksi dinamis dan desain responsif, serta <strong>Laravel</strong> sebagai framework utama yang memastikan keamanan, skalabilitas, dan efisiensi tinggi. 
                    Sistem ini membantu perusahaan dalam memantau, mengelola, dan melaporkan aktivitas K3 secara real-time, mengurangi risiko kecelakaan kerja, dan meningkatkan produktivitas tim.
                </p>
                <div class="flex justify-center gap-6 mt-8">
                    <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full font-semibold">PHP</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold">JavaScript</span>
                    <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-semibold">CSS</span>
                    <span class="bg-red-100 text-red-800 px-4 py-2 rounded-full font-semibold">Laravel</span>
                </div>
            </div>
        </section>

        <!-- Profile Tim Pengembang -->
        <section>
            <h2 class="text-3xl md:text-4xl font-bold text-[#2c3e50] mb-12 text-center">
                Profile Tim Pengembang
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 hover:scale-105 group">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#2c3e50] text-center mb-2">
                        Yudi
                    </h3>
                    <p class="text-gray-500 text-sm text-center mb-6">
                        ahmad.pratama@example.com
                    </p>
                    <div class="flex justify-center gap-4 text-gray-400">
                        <a href="#" class="hover:text-blue-600 transition transform hover:scale-125">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-pink-500 transition transform hover:scale-125">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-sky-500 transition transform hover:scale-125">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 hover:scale-105 group">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#2c3e50] text-center mb-2">
                        Roland Safaldo Ardra Aswindana
                    </h3>
                    <p class="text-gray-500 text-sm text-center mb-6">
                        siti.rahmawati@example.com
                    </p>
                    <div class="flex justify-center gap-4 text-gray-400">
                        <a href="#" class="hover:text-blue-600 transition transform hover:scale-125">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-pink-500 transition transform hover:scale-125">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-sky-500 transition transform hover:scale-125">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 hover:scale-105 group">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#2c3e50] text-center mb-2">
                        Ach. Dani
                    </h3>
                    <p class="text-gray-500 text-sm text-center mb-6">
                        budi.santoso@example.com
                    </p>
                    <div class="flex justify-center gap-4 text-gray-400">
                        <a href="#" class="hover:text-blue-600 transition transform hover:scale-125">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-pink-500 transition transform hover:scale-125">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-sky-500 transition transform hover:scale-125">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 hover:scale-105 group">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-pink-400 to-red-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#2c3e50] text-center mb-2">
                        Tegar Rafid Ihsan
                    </h3>
                    <p class="text-gray-500 text-sm text-center mb-6">
                        dewi.lestari@example.com
                    </p>
                    <div class="flex justify-center gap-4 text-gray-400">
                        <a href="#" class="hover:text-blue-600 transition transform hover:scale-125">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-pink-500 transition transform hover:scale-125">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-sky-500 transition transform hover:scale-125">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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