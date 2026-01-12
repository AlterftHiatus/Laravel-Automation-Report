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

    <link rel="stylesheet" href="{{ asset('css/profil_perusahaan.css') }}">
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

    <!-- Main Content -->
    <main class="container mx-auto max-w-6xl px-4 py-16" x-data="{ visible: false }" x-init="setTimeout(() => visible = true, 100)">
        <!-- Tentang Perusahaan -->
        <section class="mb-16" x-show="visible" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="bg-gradient-to-r from-green-50 to-white rounded-3xl p-8 md:p-12 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl md:text-4xl font-bold text-[#2c3e50] mb-6 flex items-center gap-3">
                    <i class="fas fa-building text-green-600"></i>
                    Tentang Perusahaan
                </h2>
                <p class="text-gray-700 leading-relaxed text-justify text-lg">
                    <strong>PT. Cakra Teknika Solusi</strong> merupakan perusahaan jasa Keselamatan dan
                    Kesehatan Kerja (PJK3) yang bergerak di bidang pemeriksaan dan pengujian
                    (riksa uji) serta sertifikasi kelayakan peralatan K3.
                    <br><br>
                    Didukung oleh tenaga ahli dan inspector yang kompeten serta berpengalaman,
                    PT. Cakra Teknika Solusi berkomitmen memberikan layanan profesional sesuai
                    dengan peraturan dan standar yang ditetapkan oleh
                    <strong>Kementerian Ketenagakerjaan Republik Indonesia</strong>.
                </p>
            </div>
        </section>

        <!-- Legalitas -->
        <section class="mb-16" x-show="visible" x-transition:enter="transition ease-out duration-500 delay-200" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-green-500">
                <h2 class="text-2xl md:text-3xl font-bold text-[#2c3e50] mb-6 flex items-center gap-3">
                    <i class="fas fa-certificate text-green-600"></i>
                    Legalitas Perusahaan
                </h2>
                <ul class="space-y-4 text-gray-700 text-lg">
                    <li class="flex items-start gap-3 hover:bg-green-50 p-3 rounded-lg transition-colors">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Nomor Pokok Wajib Pajak (NPWP): <strong class="text-green-700">62.258.653.5-503.000</strong></span>
                    </li>
                    <li class="flex items-start gap-3 hover:bg-green-50 p-3 rounded-lg transition-colors">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Nomor Induk Berusaha (NIB): <strong class="text-green-700">0201230017066</strong></span>
                    </li>
                    <li class="flex items-start gap-3 hover:bg-green-50 p-3 rounded-lg transition-colors">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Memiliki Surat Keputusan Penunjukan Ahli K3 dari Kementerian Ketenagakerjaan RI</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="grid md:grid-cols-2 gap-8 md:gap-12 mb-16" x-show="visible" x-transition:enter="transition ease-out duration-500 delay-400" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-green-100 to-white p-8 md:p-10 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-200">
                <h3 class="text-2xl font-bold text-[#27ae60] mb-4 flex items-center gap-3">
                    <i class="fas fa-eye"></i>
                    Visi
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Menjadi perusahaan penyedia jasa PJK3 yang profesional,
                    terpercaya, dan terkemuka di Indonesia dalam mendukung
                    keselamatan dan kesehatan kerja yang berkualitas.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-gradient-to-br from-blue-100 to-white p-8 md:p-10 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-200">
                <h3 class="text-2xl font-bold text-[#27ae60] mb-4 flex items-center gap-3">
                    <i class="fas fa-target"></i>
                    Misi
                </h3>
                <ul class="space-y-3 text-gray-700 text-lg">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-dot-circle text-blue-500 mt-1"></i>
                        <span>Memberikan layanan K3 yang profesional dan sesuai regulasi</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-dot-circle text-blue-500 mt-1"></i>
                        <span>Meningkatkan kesadaran keselamatan kerja di lingkungan industri</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-dot-circle text-blue-500 mt-1"></i>
                        <span>Mengembangkan inovasi berkelanjutan dalam pelayanan K3</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-dot-circle text-blue-500 mt-1"></i>
                        <span>Membangun kemitraan strategis jangka panjang dengan klien</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Komitmen -->
        <section class="mb-16" x-show="visible" x-transition:enter="transition ease-out duration-500 delay-600" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="bg-gradient-to-r from-slate-50 to-green-50 rounded-3xl p-8 md:p-12 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl md:text-3xl font-bold text-[#2c3e50] mb-6 flex items-center gap-3">
                    <i class="fas fa-handshake text-green-600"></i>
                    Komitmen Kami
                </h2>
                <p class="text-gray-700 leading-relaxed text-justify text-lg">
                    PT. Cakra Teknika Solusi berkomitmen untuk senantiasa
                    mengedepankan standar keselamatan dan kesehatan kerja
                    yang tinggi demi terciptanya lingkungan kerja yang aman,
                    sehat, dan produktif di berbagai sektor industri.
                </p>
            </div>
        </section>

        <!-- Penutup -->
        <section class="bg-gradient-to-r from-green-500 to-green-600 rounded-3xl p-8 md:p-12 text-center text-white shadow-lg hover:shadow-xl transition-shadow duration-300" x-show="visible" x-transition:enter="transition ease-out duration-500 delay-800" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <i class="fas fa-quote-left text-4xl mb-4 opacity-75"></i>
            <p class="text-xl md:text-2xl font-medium leading-relaxed">
                "Keselamatan dan Kesehatan Kerja bukan hanya kewajiban,
                tetapi investasi jangka panjang bagi keberlangsungan usaha."
            </p>
            <i class="fas fa-quote-right text-4xl mt-4 opacity-75"></i>
        </section>
    </main>

    <footer class="bg-gray-800 text-white pt-14 pb-6 mt-20">
        <div class="container mx-auto px-4">

            <!-- Logo Tengah -->
            <div class="flex flex-col items-center mb-10 text-center">
                <img src="../img/logo-cakra.png" alt="Logo Perusahaan" class="h-24 md:h-20 lg:h-28 w-auto mb-4">
                <p class="text-gray-400 text-sm italic">
                    "Keselamatan dan Kesehatan Kerja adalah Prioritas Utama"
                </p>
            </div>

            <!-- Konten Bawah -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10">

                <!-- Kontak Kami -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">
                        Kontak Kami
                    </h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>Jl. Bukit Wato-Wato VII
                                Blok B2A/14, Permata Puri,
                                Beringin, Ngaliyan,
                                Kota Semarang</span>
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

                <!-- Ikuti Kami -->
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

            <!-- Copyright -->
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