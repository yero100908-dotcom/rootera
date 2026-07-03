@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'ROOTERA — Jasa saluran mampet, cuci toren, dan instalasi pipa profesional. Tanpa bongkar, bergaransi. Melayani Jabodetabek, Cirebon, Semarang, Yogyakarta & Lampung.')

@section('content')

{{-- ================================================================
     HERO SECTION
     ================================================================ --}}
<section class="hero-section" aria-label="Hero ROOTERA">
    <img src="/images/almaz.jpg" alt="Teknisi ROOTERA sedang bekerja profesional" class="hero-bg" loading="eager">
    <div class="hero-overlay"></div>

    {{-- Decorative particles --}}
    <div class="hero-particles" aria-hidden="true">
        <div class="particle" style="width:80px;height:80px;top:15%;left:8%;animation-delay:0s"></div>
        <div class="particle" style="width:50px;height:50px;top:60%;left:15%;animation-delay:2s"></div>
        <div class="particle" style="width:100px;height:100px;top:25%;right:10%;animation-delay:1s"></div>
        <div class="particle" style="width:60px;height:60px;top:70%;right:20%;animation-delay:3s"></div>
    </div>

    <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="hero-badge animate-fade-up">
                    <span class="dot"></span>
                    Layanan Plumbing Profesional #1
                </div>

                <h1 class="hero-title animate-fade-up anim-delay-100">
                    Saluran Mampet?<br>
                    <span class="highlight">Selesai Tanpa</span><br>
                    Bongkar Bangunan.
                </h1>

                <p class="text-lg leading-relaxed mb-8 animate-fade-up anim-delay-200"
                   style="color:rgba(255,255,255,0.75); max-width:500px">
                    ROOTERA menggunakan teknologi mesin spiral Ridgid dan kamera inspeksi canggih untuk mengatasi semua masalah saluran Anda — cepat, bersih, dan bergaransi.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 animate-fade-up anim-delay-300">
                    <a href="https://wa.me/6281234567890?text=Halo%20ROOTERA%2C%20saya%20butuh%20bantuan%20saluran%20mampet."
                       target="_blank" rel="noopener"
                       class="btn-cta text-center text-base px-8 py-4 rounded-2xl"
                       id="hero-wa-btn">
                        <span class="flex items-center justify-center gap-2">
                            <svg width="18" height="18" fill="white" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Chat WhatsApp Sekarang
                        </span>
                    </a>
                    <a href="{{ route('layanan') }}"
                       class="text-center text-base px-8 py-4 rounded-2xl font-semibold transition-all"
                       style="border:2px solid rgba(255,255,255,0.3);color:#fff"
                       onmouseover="this.style.background='rgba(255,255,255,0.1)'"
                       onmouseout="this.style.background='transparent'"
                       id="hero-layanan-btn">
                        Lihat Layanan Kami
                    </a>
                </div>

                {{-- Trust badges --}}
                <div class="flex flex-wrap items-center gap-6 mt-10 animate-fade-up anim-delay-400">
                    @foreach(['✓ Bergaransi', '✓ Tanpa Bongkar', '✓ 24/7 Siaga', '✓ Berpengalaman'] as $badge)
                    <span class="text-sm font-semibold" style="color:rgba(255,255,255,0.7)">{{ $badge }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Stats card --}}
            <div class="hidden lg:block animate-fade-right anim-delay-200">
                <div class="glass-card p-8 max-w-sm ml-auto">
                    <p class="text-sm font-bold uppercase tracking-widest mb-6" style="color:#169F81">Pencapaian ROOTERA</p>
                    <div class="grid grid-cols-2 gap-6">
                        @foreach([['5000+','Proyek Selesai'],['98%','Kepuasan Klien'],['10+','Tahun Pengalaman'],['6','Kota Dilayani']] as $stat)
                        <div>
                            <div class="stat-number text-4xl">{{ $stat[0] }}</div>
                            <div class="text-xs mt-1" style="color:rgba(255,255,255,0.55)">{{ $stat[1] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10" aria-hidden="true">
        <div class="flex flex-col items-center gap-2" style="color:rgba(255,255,255,0.4)">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <svg class="animate-bounce" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </div>
    </div>
</section>

{{-- ================================================================
     SERVICES SECTION
     ================================================================ --}}
<section class="py-24 bg-white" id="layanan" aria-label="Layanan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="section-tag mx-auto">
                <svg width="12" height="12" fill="currentColor" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
                Layanan Profesional
            </div>
            <h2 class="section-title mb-4">Solusi Lengkap untuk <span>Masalah Anda</span></h2>
            <p class="section-subtitle mx-auto text-center">Kami menangani semua jenis masalah saluran dan instalasi pipa dengan teknologi modern dan tenaga ahli berpengalaman.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $i => $service)
            <div class="service-card animate-on-scroll" style="animation-delay:{{ $i * 0.15 }}s">
                <div class="overflow-hidden" style="height:220px">
                    <img src="{{ $service->image ?? '/images/drain_service.png' }}"
                         alt="{{ $service->title }}"
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="service-icon-wrap">
                            @if($service->icon === 'drain')
                            <svg width="26" height="26" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                            @elseif($service->icon === 'water')
                            <svg width="26" height="26" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                            @else
                            <svg width="26" height="26" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            @endif
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg leading-tight" style="color:#0A2E78">{{ $service->title }}</h3>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed mb-5" style="color:#64748b">{{ $service->description }}</p>
                    @if($service->sub_items)
                    <ul class="flex flex-col gap-2">
                        @foreach($service->sub_items as $item)
                        <li class="flex items-center gap-2 text-sm" style="color:#374151">
                            <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" fill="rgba(22,159,129,0.1)"/>
                                <path d="M5 8l2 2 4-4" stroke="#169F81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    <a href="{{ route('kontak') }}"
                       class="mt-6 inline-flex items-center gap-2 text-sm font-bold transition-colors"
                       style="color:#169F81"
                       onmouseover="this.style.color='#0A2E78'"
                       onmouseout="this.style.color='#169F81'">
                        Konsultasi Gratis
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================================================================
     STATS / WHY CHOOSE US
     ================================================================ --}}
<section class="stats-section py-20" aria-label="Statistik ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach([['5.000+','Proyek Selesai','Kepercayaan klien adalah prioritas kami'],['98%','Kepuasan Klien','Rating tertinggi dari pelanggan setia'],['24/7','Siaga Penuh','Siap melayani kapan pun Anda butuhkan'],['10+','Tahun Pengalaman','Berpengalaman di bidang plumbing profesional']] as $stat)
            <div class="animate-on-scroll">
                <div class="stat-number mb-2">{{ $stat[0] }}</div>
                <div class="text-white font-bold mb-1">{{ $stat[1] }}</div>
                <div class="text-xs" style="color:rgba(255,255,255,0.5)">{{ $stat[2] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================================================================
     COVERAGE AREA SECTION
     ================================================================ --}}
<section class="py-24" style="background:#f8fafc" aria-label="Area Layanan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="section-tag mx-auto">
                <svg width="12" height="12" fill="currentColor" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
                Jangkauan Luas
            </div>
            <h2 class="section-title mb-4">MELAYANI SELURUH <span>KOTA</span></h2>
            <p class="section-subtitle mx-auto text-center">Tim ROOTERA siap menjangkau lokasi Anda di berbagai kota besar Indonesia dengan waktu respons cepat.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-5">
            @php
            $cityIcons = ['Jabodetabek'=>'🏙️','Cirebon'=>'🦐','Semarang'=>'🕌','Yogyakarta'=>'🏯','Lampung'=>'🦏','Metro'=>'🌿'];
            @endphp
            @foreach($areas as $i => $area)
            <div class="area-card animate-on-scroll" style="animation-delay:{{ $i * 0.1 }}s">
                <div class="area-card-body">
                    <div class="text-3xl mb-3">{{ $cityIcons[$area->city] ?? '📍' }}</div>
                    <div class="area-badge mx-auto">
                        <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ $area->city }}
                    </div>
                    @if($area->province)
                    <p class="text-xs mt-2" style="color:#94a3b8">{{ $area->province }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('area-layanan') }}" class="btn-cta px-8 py-3" id="home-area-btn">
                Lihat Semua Area Layanan
            </a>
        </div>
    </div>
</section>

{{-- ================================================================
     CTA BANNER
     ================================================================ --}}
<section class="py-20" style="background:linear-gradient(135deg,#0A2E78,#1E73D8)" aria-label="CTA ROOTERA">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Siap Mengatasi Masalah Saluran Anda?</h2>
        <p class="text-lg mb-8" style="color:rgba(255,255,255,0.75)">Hubungi ROOTERA sekarang dan dapatkan konsultasi gratis. Tim ahli kami siap membantu 24/7.</p>
        <a href="https://wa.me/6281234567890?text=Halo%20ROOTERA%2C%20saya%20ingin%20konsultasi%20layanan."
           target="_blank" rel="noopener"
           class="inline-flex items-center gap-3 bg-white font-bold px-8 py-4 rounded-2xl text-lg transition-all hover:shadow-2xl hover:-translate-y-1"
           style="color:#0A2E78"
           id="cta-banner-btn">
            <svg width="22" height="22" fill="#25D366" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat WhatsApp Sekarang
        </a>
    </div>
</section>

@endsection
