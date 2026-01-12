<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Sistem Automation Report K3 - LHPP</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Alpine JS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-green: #27ae60;
            --dark-navy: #2c3e50;
            --white: #ffffff;
        }

        [x-cloak] {
            display: none !important;
        }

        .dropdown-content-smooth {
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 1px;
            background-color: var(--white);
            min-width: 100%;
            border-radius: 14px;
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.18);
            z-index: 100;
            border: 1px solid #eee;
            overflow: hidden;
        }

        .dropdown-content-smooth a {
            display: block;
            padding: 15px 22px;
            color: var(--dark-navy);
            border-bottom: 1px solid #f1f1f1;
            transition: all 0.25s ease;
        }

        .dropdown-content-smooth a:hover {
            background-color: #f1fcf4;
            color: var(--primary-green);
            padding-left: 28px;
        }
    </style>

    <style>
        /* icon menu */
        .menu-icon {
            font-size: 1.25rem;
            width: 1.75rem;
            height: 1.75rem;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            transition: color 0.25s ease;
            color: #4b5563;
            /* gray-600 */
        }

        /* hover effect */
        .dropdown-btn:hover .menu-icon {
            color: #27ae60;
            /* hijau utama */
        }
    </style>

</head>

<body class="bg-gray-50 font-[Inter] m-0 p-0">

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

    <!-- Konten Utama: Hubungi Kami -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h1>
                <p class="text-lg text-gray-600">Jika Anda mengalami kendala dalam menggunakan sistem LHPP K3, silakan hubungi tim support kami. Kami siap membantu Anda dengan cepat dan efisien.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Kontak Support -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Kontak Support Sistem</h2>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <i class="fas fa-user text-green-600 text-xl"></i>
                            <div>
                                <p class="font-medium text-gray-800">Yudi</p>
                                <p class="text-gray-600">IT Support Specialist</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="fas fa-envelope text-green-600 text-xl"></i>
                            <div>
                                <p class="font-medium text-gray-800">yudislebew@gmail.com</p>
                                <p class="text-gray-600">Email untuk kendala sistem</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="fas fa-phone text-green-600 text-xl"></i>
                            <div>
                                <p class="font-medium text-gray-800">+62 812-3456-7890</p>
                                <p class="text-gray-600">Telepon/WhatsApp</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="fas fa-clock text-green-600 text-xl"></i>
                            <div>
                                <p class="font-medium text-gray-800">Jam Operasional</p>
                                <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Kirim Pesan</h2>
                    <form action="#" method="post">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Masukkan email Anda" required>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Masukkan subjek pesan" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Jelaskan kendala yang Anda alami" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white pt-14 pb-6 mt-0">

        <div class="container mx-auto px-4">

            <div class="flex flex-col items-center mb-10 text-center">
                <img src="../img/logo-cakra.png" alt="Logo Perusahaan" class="h-24 md:h-20 lg:h-28 w-auto mb-4">
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