@extends('layouts.app')

@section('title', 'Layanan')
@section('meta_description', 'Layanan ROOTERA: Saluran Mampet, Cuci Toren, Instalasi Pipa menggunakan Mesin Spiral Ridgid & Drain Inspection Camera. Profesional, Cepat, Bergaransi.')

@section('content')

{{-- Page Hero --}}
<div class="page-hero" aria-label="Halaman Layanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-tag" style="background:rgba(22,159,129,0.15); border-color:rgba(22,159,129,0.4)">
            <svg width="12" height="12" fill="#169F81" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
            Layanan Kami
        </div>
        <h1 class="title mt-3">Solusi Plumbing Profesional</h1>
        <p class="subtitle">Teknologi modern untuk semua masalah saluran Anda — tanpa bongkar, bergaransi.</p>
    </div>
</div>

{{-- Tools & Advantages --}}
<section class="py-24 bg-white" id="keunggulan" aria-label="Keunggulan & Alat ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="section-tag mx-auto">Teknologi & Keunggulan</div>
            <h2 class="section-title mb-4">Peralatan <span>Modern Profesional</span></h2>
            <p class="section-subtitle mx-auto text-center">ROOTERA menggunakan peralatan berteknologi tinggi untuk memastikan penanganan yang tepat sasaran dan efisien tanpa merusak properti Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($tools as $i => $tool)
            <div class="tool-card animate-on-scroll" style="animation-delay:{{ $i * 0.12 }}s">
                <div class="tool-number">{{ str_pad($i+1,'2','0',STR_PAD_LEFT) }}</div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 mt-2"
                     style="background:linear-gradient(135deg,rgba(10,46,120,0.08),rgba(22,159,129,0.08))">
                    @if($tool->icon === 'spiral')
                    <svg width="24" height="24" fill="none" stroke="#0A2E78" stroke-width="2" viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 002 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
                    @elseif($tool->icon === 'camera')
                    <svg width="24" height="24" fill="none" stroke="#0A2E78" stroke-width="2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/><circle cx="12" cy="13" r="4"/></svg>
                    @elseif($tool->icon === 'double')
                    <svg width="24" height="24" fill="none" stroke="#0A2E78" stroke-width="2" viewBox="0 0 24 24"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 014-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg>
                    @else
                    <svg width="24" height="24" fill="none" stroke="#169F81" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    @endif
                </div>
                <h3 class="font-bold text-lg mb-2" style="color:#0A2E78">{{ $tool->title }}</h3>
                <p class="text-sm leading-relaxed" style="color:#64748b">{{ $tool->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divider --}}
<div class="max-w-7xl mx-auto px-8"><hr class="gradient-divider"></div>

{{-- Detailed Services --}}
<section class="py-24" style="background:#f8fafc" aria-label="Detail Layanan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="section-tag mx-auto">Detail Layanan</div>
            <h2 class="section-title mb-4">Semua yang Anda <span>Butuhkan</span></h2>
            <p class="section-subtitle mx-auto text-center">Tiga kategori layanan utama kami mencakup seluruh kebutuhan plumbing dan sanitasi rumah maupun bisnis Anda.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @foreach($services as $i => $service)
            <div class="service-card animate-on-scroll" style="animation-delay:{{ $i * 0.15 }}s">
                <div style="height:240px; overflow:hidden">
                    <img src="{{ $service->image ?? '/images/drain_service.png' }}"
                         alt="{{ $service->title }}"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="service-icon-wrap">
                            @if($service->icon === 'drain')
                            <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                            @elseif($service->icon === 'water')
                            <svg width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                            @else
                            <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            @endif
                        </div>
                        <h3 class="font-bold text-xl" style="color:#0A2E78">{{ $service->title }}</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-6" style="color:#64748b">{{ $service->description }}</p>
                    @if($service->sub_items)
                    <div class="rounded-2xl p-4 mb-5" style="background:rgba(10,46,120,0.03); border:1px solid rgba(10,46,120,0.07)">
                        <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:#0A2E78">Cakupan Layanan:</p>
                        <ul class="flex flex-col gap-2">
                            @foreach($service->sub_items as $item)
                            <li class="flex items-center gap-2 text-sm" style="color:#374151">
                                <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8" fill="rgba(22,159,129,0.12)"/>
                                    <path d="M5 8l2 2 4-4" stroke="#169F81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <a href="{{ route('kontak') }}" class="btn-cta block text-center py-3">
                        Pesan Layanan Ini
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Process Steps --}}
<section class="py-20 bg-white" aria-label="Proses Kerja ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="section-tag mx-auto">Cara Kerja</div>
            <h2 class="section-title mb-3">Proses <span>Sederhana & Transparan</span></h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
            @foreach([['1','Hubungi Kami','Chat WhatsApp atau telepon untuk melaporkan masalah Anda.'],['2','Survei & Diagnosa','Teknisi datang, melakukan inspeksi dan memberikan estimasi biaya.'],['3','Penanganan Profesional','Proses pengerjaan menggunakan alat modern dengan cepat dan bersih.'],['4','Garansi Pekerjaan','Setiap pekerjaan disertai garansi resmi dari ROOTERA.']] as $step)
            <div class="text-center px-4 animate-on-scroll" style="animation-delay:{{ ($loop->index ?? 0) * 0.12 }}s">
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5 text-2xl font-black text-white"
                     style="background:linear-gradient(135deg,#0A2E78,#1E73D8)">
                    {{ $step[0] }}
                </div>
                <h3 class="font-bold text-lg mb-2" style="color:#0A2E78">{{ $step[1] }}</h3>
                <p class="text-sm leading-relaxed" style="color:#64748b">{{ $step[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
