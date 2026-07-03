@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('meta_description', 'Kenali ROOTERA lebih dekat — visi, misi, dan keunggulan kami sebagai penyedia layanan plumbing profesional terpercaya di Indonesia.')

@section('content')

{{-- Page Hero --}}
<div class="page-hero" aria-label="Tentang ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-tag" style="background:rgba(22,159,129,0.15); border-color:rgba(22,159,129,0.4)">
            <svg width="12" height="12" fill="#169F81" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
            Tentang Kami
        </div>
        <h1 class="page-hero title mt-2 mb-3">Mengenal ROOTERA</h1>
        <p class="page-hero subtitle">Profesional, terpercaya, dan berpengalaman dalam dunia plumbing & cleaning service.</p>
    </div>
</div>

{{-- Company Profile --}}
<section class="py-24 bg-white" aria-label="Profil Perusahaan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="section-tag">Profil Perusahaan</div>
                <h2 class="section-title mt-3 mb-5">Solusi Terpercaya untuk <span>Masalah Plumbing</span> Anda</h2>
                <p class="leading-relaxed mb-5" style="color:#64748b">
                    ROOTERA adalah perusahaan jasa plumbing dan cleaning service profesional yang telah berdiri lebih dari satu dekade. Kami hadir sebagai solusi terpercaya untuk semua masalah saluran tersumbat, instalasi pipa, dan pembersihan tangki air di rumah, apartemen, maupun gedung komersial.
                </p>
                <p class="leading-relaxed mb-8" style="color:#64748b">
                    Dengan menggunakan peralatan berteknologi tinggi seperti Mesin Spiral Ridgid dan Drain Inspection Camera, tim teknisi kami yang berpengalaman mampu menyelesaikan setiap pekerjaan secara efisien tanpa perlu membongkar struktur bangunan Anda.
                </p>
                {{-- Advantages badges --}}
                <div class="flex flex-wrap gap-3">
                    @foreach([['Profesional','#0A2E78'],['Cepat & Tepat','#169F81'],['Bergaransi','#1E73D8'],['Ramah Lingkungan','#169F81']] as $adv)
                    <span class="inline-flex items-center gap-2 font-semibold text-sm px-4 py-2 rounded-xl"
                          style="background:{{ $adv[1] }}15; color:{{ $adv[1] }}; border:1px solid {{ $adv[1] }}30">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $adv[0] }}
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="/images/about_team.png" alt="Tim Profesional ROOTERA" class="w-full object-cover" style="height:460px" loading="lazy">
                </div>
                {{-- Floating card --}}
                <div class="absolute -bottom-6 -left-6 rounded-2xl p-5 shadow-xl" style="background:#fff; border:1px solid rgba(10,46,120,0.1)">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background:linear-gradient(135deg,#169F81,#0e7a63)">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div>
                            <div class="font-bold text-lg" style="color:#0A2E78">50+ Teknisi</div>
                            <div class="text-xs" style="color:#64748b">Bersertifikat & Berpengalaman</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Vision & Mission --}}
<section class="py-24" style="background:#f8fafc" aria-label="Visi dan Misi ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="section-tag mx-auto">Komitmen Kami</div>
            <h2 class="section-title mb-3">Visi & <span>Misi</span></h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="rounded-3xl p-8" style="background:linear-gradient(135deg,#0A2E78,#1E73D8)">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-white/10">
                    <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Visi Kami</h3>
                <p class="leading-relaxed" style="color:rgba(255,255,255,0.8)">
                    Menjadi perusahaan jasa plumbing dan cleaning service terdepan di Indonesia yang dikenal atas profesionalisme, inovasi teknologi, dan komitmen terhadap kepuasan pelanggan.
                </p>
            </div>
            <div class="rounded-3xl p-8 bg-white border" style="border-color:rgba(10,46,120,0.1); box-shadow:0 8px 40px rgba(10,46,120,0.08)">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background:rgba(22,159,129,0.1)">
                    <svg width="24" height="24" fill="none" stroke="#169F81" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4" style="color:#0A2E78">Misi Kami</h3>
                <ul class="flex flex-col gap-3">
                    @foreach(['Memberikan layanan plumbing berkualitas tinggi dengan teknologi terkini.','Memastikan setiap pekerjaan diselesaikan dengan cepat, bersih, dan bergaransi.','Membangun kepercayaan melalui transparansi harga dan hasil kerja yang terukur.','Memperluas jangkauan layanan ke seluruh kota-kota besar Indonesia.'] as $item)
                    <li class="flex items-start gap-3 text-sm" style="color:#374151">
                        <svg class="mt-0.5 flex-shrink-0" width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" fill="rgba(22,159,129,0.1)"/>
                            <path d="M5 8l2 2 4-4" stroke="#169F81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Service Sectors --}}
<section class="py-24 bg-white" aria-label="Sektor Layanan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="section-tag mx-auto">Jangkauan Sektor</div>
            <h2 class="section-title mb-3">Sektor Wilayah <span>Pelayanan Kami</span></h2>
            <p class="section-subtitle mx-auto text-center">ROOTERA melayani berbagai segmen properti dari hunian pribadi hingga kawasan industri berskala besar.</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-5">
            @php
            $sectorIcons = [
                'Hunian Rumah'  => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
                'Apartemen'     => '<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22V12h6v10M8 7h.01M16 7h.01M8 12h.01M16 12h.01"/>',
                'Ruko Bisnis'   => '<path d="M3 9l9-7 9 7v11H3z"/><rect x="9" y="14" width="6" height="7"/>',
                'Gedung Kantor' => '<rect x="2" y="3" width="20" height="18" rx="2"/><path d="M8 7h.01M12 7h.01M16 7h.01M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01"/>',
                'Area Industri' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>',
                'Resto & Cafe'  => '<path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>',
            ];
            @endphp
            @foreach($sectors as $i => $sector)
            <div class="sector-card animate-on-scroll" style="animation-delay:{{ $i * 0.1 }}s">
                <div class="sector-icon-wrap">
                    <svg width="24" height="24" fill="none" stroke="#0A2E78" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        {!! $sectorIcons[$sector->name] ?? '<circle cx="12" cy="12" r="10"/>' !!}
                    </svg>
                </div>
                <div class="sector-name">{{ $sector->name }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
