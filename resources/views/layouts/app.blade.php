<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'ROOTERA - Jasa Sedot WC, Saluran Mampet, Cuci Toren & Instalasi Pipa Profesional di Jabodetabek, Cirebon, Semarang, Yogyakarta dan Lampung.')">
    <meta name="keywords" content="@yield('meta_keywords', 'jasa sedot wc, saluran mampet, cuci toren, instalasi pipa, plumbing profesional, rootera')">
    <meta property="og:title" content="@yield('title', 'ROOTERA') - Jasa Plumbing & Cleaning Profesional">
    <meta property="og:description" content="@yield('meta_description', 'ROOTERA - Jasa Sedot WC, Saluran Mampet, Cuci Toren & Instalasi Pipa Profesional.')">
    <meta property="og:type" content="website">
    <title>@yield('title', 'ROOTERA') — Jasa Plumbing & Cleaning Profesional</title>

    <!-- Inter Font from Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body>

    {{-- =====================================================================
         NAVBAR (Fixed, transparent → scrolled dark blue)
         ===================================================================== --}}
    <nav id="navbar" class="navbar navbar-transparent" aria-label="Navigasi Utama">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center no-underline">
                    <img src="images/logo.png"
                         alt="ROOTERA Plumbing Logo"
                         class="navbar-logo">
                </a>

                <!-- Desktop Nav Links -->
                <div class="hidden lg:flex items-center gap-7">
                    <a href="{{ route('home') }}"
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                    <a href="{{ route('layanan') }}"
                       class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
                    <a href="{{ route('tentang-kami') }}"
                       class="nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }}">Tentang Kami</a>
                    <a href="{{ route('pengetahuan') }}"
                       class="nav-link {{ request()->routeIs('pengetahuan*') ? 'active' : '' }}">Pengetahuan</a>
                    <a href="{{ route('area-layanan') }}"
                       class="nav-link {{ request()->routeIs('area-layanan') ? 'active' : '' }}">Area Layanan</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center gap-4">
                    <a href="{{ route('kontak') }}" class="btn-cta" id="nav-cta-btn">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Hamburger -->
                <button id="mobile-toggle" class="lg:hidden text-white p-2 rounded-lg focus:outline-none"
                        aria-label="Buka Menu">
                    <svg id="icon-open" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="icon-close" class="hidden" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    {{-- =====================================================================
         MOBILE MENU OVERLAY
         ===================================================================== --}}
    <div id="mobile-menu" class="mobile-menu" role="dialog" aria-label="Menu Mobile">
        <img src="/images/rootera2.jpg" alt="ROOTERA Plumbing" class="w-auto object-contain mb-4" style="height:110px">
        <a href="{{ route('home') }}"
           class="text-white text-2xl font-bold hover:text-green-400 transition-colors">Beranda</a>
        <a href="{{ route('layanan') }}"
           class="text-white text-2xl font-bold hover:text-green-400 transition-colors">Layanan</a>
        <a href="{{ route('tentang-kami') }}"
           class="text-white text-2xl font-bold hover:text-green-400 transition-colors">Tentang Kami</a>
        <a href="{{ route('pengetahuan') }}"
           class="text-white text-2xl font-bold hover:text-green-400 transition-colors">Pengetahuan</a>
        <a href="{{ route('area-layanan') }}"
           class="text-white text-2xl font-bold hover:text-green-400 transition-colors">Area Layanan</a>
        <a href="{{ route('kontak') }}" class="btn-cta text-lg mt-4">Hubungi Kami</a>
    </div>

    {{-- =====================================================================
         MAIN PAGE CONTENT
         ===================================================================== --}}
    <main>
        @yield('content')
    </main>

    {{-- =====================================================================
         FOOTER
         ===================================================================== --}}
    <footer class="footer">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Brand Column -->
                <div class="lg:col-span-1">
                    <div class="mb-5">
                        <img src="/images/rootera2.jpg" alt="ROOTERA Plumbing" class="w-auto object-contain" style="height:72px">
                    </div>
                    <p class="text-sm leading-relaxed mb-6" style="color:rgba(255,255,255,0.55)">
                        Solusi profesional untuk masalah saluran mampet, air bersih & instalasi pipa. Bergaransi. Tanpa bongkar.
                    </p>
                    <!-- Social Media -->
                    <div class="flex items-center gap-3">
                        <a href="#" class="social-link" aria-label="Instagram ROOTERA" title="Instagram">
                            <svg width="18" height="18" fill="none" stroke="white" stroke-width="1.75" viewBox="0 0 24 24">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8" fill="white" stroke="none"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook ROOTERA" title="Facebook">
                            <svg width="18" height="18" fill="white" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="TikTok ROOTERA" title="TikTok">
                            <svg width="18" height="18" fill="white" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.32 6.32 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.89a8.18 8.18 0 004.78 1.52V7.01a4.85 4.85 0 01-1.01-.32z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/6281234567890" class="social-link" aria-label="WhatsApp ROOTERA" title="WhatsApp" style="background:rgba(37,211,102,0.15); border-color:rgba(37,211,102,0.3)">
                            <svg width="18" height="18" fill="#25D366" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Navigation Column -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Navigasi</h3>
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('home') }}" class="footer-link">Beranda</a>
                        <a href="{{ route('layanan') }}" class="footer-link">Layanan</a>
                        <a href="{{ route('tentang-kami') }}" class="footer-link">Tentang Kami</a>
                        <a href="{{ route('pengetahuan') }}" class="footer-link">Pengetahuan</a>
                        <a href="{{ route('area-layanan') }}" class="footer-link">Area Layanan</a>
                        <a href="{{ route('kontak') }}" class="footer-link">Kontak</a>
                    </div>
                </div>

                <!-- Services Column -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Layanan Kami</h3>
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('layanan') }}" class="footer-link">Saluran Pembuangan Mampet</a>
                        <a href="{{ route('layanan') }}" class="footer-link">Air Bersih & Cuci Toren</a>
                        <a href="{{ route('layanan') }}" class="footer-link">Instalasi Sanitary & Pipa</a>
                        <a href="{{ route('layanan') }}" class="footer-link">Drain Inspection Camera</a>
                        <a href="{{ route('layanan') }}" class="footer-link">Mesin Spiral Ridgid</a>
                    </div>
                </div>

                <!-- Contact Column -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Hubungi Kami</h3>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 flex-shrink-0" style="color:#169F81">
                                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.63a19.79 19.79 0 01-3.07-8.67A2 2 0 012 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 9.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>
                            <a href="https://wa.me/6281234567890" class="footer-link" style="padding:0">
                                +62 812-3456-7890
                            </a>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 flex-shrink-0" style="color:#169F81">
                                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <a href="mailto:info@rootera.id" class="footer-link" style="padding:0">
                                info@rootera.id
                            </a>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 flex-shrink-0" style="color:#169F81">
                                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <span class="text-sm" style="color:rgba(255,255,255,0.55); line-height:1.6">
                                Jakarta Selatan, DKI Jakarta<br>Indonesia
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs" style="color:rgba(255,255,255,0.4)">
                    &copy; {{ date('Y') }} ROOTERA. Hak cipta dilindungi undang-undang.
                </p>
                <p class="text-xs" style="color:rgba(255,255,255,0.4)">
                    Profesional &bull; Cepat &bull; Bergaransi
                </p>
            </div>
        </div>
    </footer>

    {{-- =====================================================================
         FLOATING WHATSAPP BUTTON — appears on EVERY page via global layout
         ===================================================================== --}}
    <a href="https://wa.me/6281234567890?text=Halo%20ROOTERA%2C%20saya%20ingin%20konsultasi%20layanan%20plumbing."
       class="whatsapp-float"
       target="_blank"
       rel="noopener noreferrer"
       id="wa-float-btn"
       aria-label="Chat WhatsApp ROOTERA"
       title="Chat via WhatsApp">
        <svg width="30" height="30" fill="white" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    {{-- =====================================================================
         GLOBAL JAVASCRIPT
         ===================================================================== --}}
    <script>
        // ---- Navbar scroll behavior ----
        const navbar = document.getElementById('navbar');
        function handleScroll() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
                navbar.classList.remove('navbar-transparent');
            } else {
                navbar.classList.remove('scrolled');
                navbar.classList.add('navbar-transparent');
            }
        }
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // run once on load

        // ---- Mobile menu toggle ----
        const toggle   = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen   = document.getElementById('icon-open');
        const iconClose  = document.getElementById('icon-close');

        toggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('open');
            iconOpen.classList.toggle('hidden', isOpen);
            iconClose.classList.toggle('hidden', !isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close mobile menu when any link is clicked
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
                document.body.style.overflow = '';
            });
        });

        // ---- Intersection Observer for scroll animations ----
        const animEls = document.querySelectorAll('.animate-on-scroll');
        if (animEls.length) {
            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-up');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            animEls.forEach(el => io.observe(el));
        }
    </script>

    @stack('scripts')
</body>
</html>
