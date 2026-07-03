@extends('layouts.app')

@section('title', $post->title)
@section('meta_description', Str::limit($post->excerpt, 160))

@section('content')

<div class="page-hero" style="padding-bottom:3rem" aria-label="Detail Artikel">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="blog-category mb-4 inline-block">{{ $post->category }}</span>
        <h1 class="page-hero title mt-2 mb-4" style="font-size:clamp(1.6rem,3vw,2.2rem)">{{ $post->title }}</h1>
        <div class="flex items-center gap-4" style="color:rgba(255,255,255,0.6); font-size:0.85rem">
            <span>{{ $post->author }}</span>
            <span>&bull;</span>
            <time datetime="{{ $post->published_at?->format('Y-m-d') }}">
                {{ $post->published_at?->format('d F Y') }}
            </time>
        </div>
    </div>
</div>

<section class="py-16" style="background:#f8fafc">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Thumbnail --}}
        @if($post->thumbnail)
        <div class="rounded-2xl overflow-hidden mb-10 shadow-lg">
            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full object-cover" style="max-height:420px" loading="eager">
        </div>
        @endif

        {{-- Content --}}
        <div class="bg-white rounded-3xl p-8 shadow-sm" style="border:1px solid rgba(10,46,120,0.07)">
            <div class="prose prose-lg max-w-none" style="color:#374151; line-height:1.85">
                {!! $post->content !!}
            </div>
        </div>

        {{-- Share & Back --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-8">
            <a href="{{ route('pengetahuan') }}"
               class="flex items-center gap-2 font-semibold text-sm transition-colors"
               style="color:#0A2E78; text-decoration:none"
               onmouseover="this.style.color='#169F81'"
               onmouseout="this.style.color='#0A2E78'">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                Kembali ke Pengetahuan
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20ROOTERA%2C%20saya%20baca%20artikel:%20{{ urlencode($post->title) }}"
               target="_blank" rel="noopener"
               class="btn-cta py-2 px-5 text-sm" id="article-wa-btn">
                Konsultasi via WhatsApp
            </a>
        </div>

        {{-- Related Posts --}}
        @if($relatedPosts->isNotEmpty())
        <div class="mt-14">
            <h2 class="text-xl font-bold mb-6" style="color:#0A2E78">Artikel Terkait</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                @foreach($relatedPosts as $related)
                <a href="{{ route('pengetahuan.show', $related->slug) }}"
                   class="blog-card block" style="text-decoration:none">
                    <div style="height:140px; overflow:hidden">
                        <img src="{{ $related->thumbnail ?? '/images/blog_wastafel.png' }}"
                             alt="{{ $related->title }}"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                    <div class="p-4">
                        <span class="blog-category text-xs">{{ $related->category }}</span>
                        <h3 class="font-bold text-sm mt-2 leading-snug" style="color:#0A2E78">{{ Str::limit($related->title, 60) }}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
