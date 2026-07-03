@extends('layouts.app')

@section('title', 'Pengetahuan & Tips Plumbing')
@section('meta_description', 'Baca artikel edukatif dan tips plumbing dari ROOTERA. Cara mengatasi saluran mampet, penyebab pipa tersumbat, dan panduan cuci toren.')

@section('content')

{{-- Page Hero --}}
<div class="page-hero" aria-label="Blog Pengetahuan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-tag" style="background:rgba(22,159,129,0.15); border-color:rgba(22,159,129,0.4)">
            <svg width="12" height="12" fill="#169F81" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
            Pengetahuan
        </div>
        <h1 class="page-hero title mt-2 mb-3">Tips & Edukasi Plumbing</h1>
        <p class="page-hero subtitle">Artikel informatif untuk membantu Anda memahami dan mencegah masalah saluran di rumah.</p>
    </div>
</div>

{{-- Blog Grid --}}
<section class="py-24" style="background:#f8fafc" aria-label="Daftar Artikel">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($posts->isEmpty())
        <div class="text-center py-20">
            <div class="text-6xl mb-4">📰</div>
            <h3 class="text-xl font-bold mb-2" style="color:#0A2E78">Belum Ada Artikel</h3>
            <p style="color:#64748b">Artikel akan segera hadir. Pantau terus!</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $i => $post)
            <article class="blog-card animate-on-scroll" style="animation-delay:{{ ($i % 3) * 0.12 }}s">
                <div style="overflow:hidden; height:220px">
                    <img src="{{ $post->thumbnail ?? '/images/blog_wastafel.png' }}"
                         alt="{{ $post->title }}"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="blog-category">{{ $post->category }}</span>
                        <time class="text-xs" style="color:#94a3b8" datetime="{{ $post->published_at?->format('Y-m-d') }}">
                            {{ $post->published_at?->format('d M Y') }}
                        </time>
                    </div>
                    <h2 class="font-bold text-lg leading-snug mb-3" style="color:#0A2E78">
                        <a href="{{ route('pengetahuan.show', $post->slug) }}"
                           class="hover:text-green-600 transition-colors"
                           style="text-decoration:none; color:inherit">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="text-sm leading-relaxed mb-5" style="color:#64748b">
                        {{ Str::limit($post->excerpt, 120) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#0A2E78,#1E73D8)">
                                <svg width="14" height="14" fill="white" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <span class="text-xs font-medium" style="color:#64748b">{{ $post->author }}</span>
                        </div>
                        <a href="{{ route('pengetahuan.show', $post->slug) }}"
                           class="flex items-center gap-1 text-sm font-bold transition-colors"
                           style="color:#169F81; text-decoration:none"
                           onmouseover="this.style.color='#0A2E78'"
                           onmouseout="this.style.color='#169F81'">
                            Baca Selengkapnya
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($posts->hasPages())
        <div class="flex justify-center mt-12">
            <div class="pagination flex items-center gap-2">
                {{ $posts->links() }}
            </div>
        </div>
        @endif
        @endif
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-white" aria-label="CTA Pengetahuan">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-3" style="color:#0A2E78">Masalah Saluran Tidak Bisa Ditangani Sendiri?</h2>
        <p class="mb-6" style="color:#64748b">Hubungi tim ROOTERA untuk penanganan profesional yang cepat dan bergaransi.</p>
        <a href="{{ route('kontak') }}" class="btn-cta px-8 py-3 inline-block" id="blog-cta-btn">
            Konsultasi Gratis Sekarang
        </a>
    </div>
</section>

@endsection
