@extends('layouts.app')

@section('title', 'Area Layanan')
@section('meta_description', 'ROOTERA melayani Jabodetabek, Cirebon, Semarang, Yogyakarta, Lampung, dan Metro. Lihat area jangkauan lengkap kami.')

@section('content')

{{-- Page Hero --}}
<div class="page-hero" aria-label="Area Layanan ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-tag" style="background:rgba(22,159,129,0.15); border-color:rgba(22,159,129,0.4)">
            <svg width="12" height="12" fill="#169F81" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
            Jangkauan Wilayah
        </div>
        <h1 class="page-hero title mt-2 mb-3">Area Layanan ROOTERA</h1>
        <p class="page-hero subtitle">Kami hadir di kota-kota besar Indonesia dengan waktu respons cepat.</p>
    </div>
</div>

{{-- Areas Grid --}}
<section class="py-24" style="background:#f8fafc" aria-label="Daftar Kota Layanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="section-tag mx-auto">Kota yang Kami Layani</div>
            <h2 class="section-title mb-3">Melayani <span>Seluruh Kota</span></h2>
            <p class="section-subtitle mx-auto text-center">Temukan area layanan ROOTERA terdekat dari lokasi Anda dan hubungi kami untuk penanganan segera.</p>
        </div>

        @php
        $cityEmojis = ['Jabodetabek'=>'🏙️','Cirebon'=>'🦐','Semarang'=>'🕌','Yogyakarta'=>'🏯','Lampung'=>'🦏','Metro'=>'🌿'];
        $cityDescs  = [
            'Jabodetabek' => 'Jakarta, Bogor, Depok, Tangerang & Bekasi',
            'Cirebon'     => 'Kota & Kabupaten Cirebon',
            'Semarang'    => 'Kota Semarang & sekitarnya',
            'Yogyakarta'  => 'DIY & Sleman, Bantul, Gunung Kidul',
            'Lampung'     => 'Bandar Lampung & seluruh Provinsi Lampung',
            'Metro'       => 'Kota Metro, Lampung Tengah',
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($areas as $i => $area)
            <div class="bg-white rounded-2xl p-6 border flex items-start gap-5 animate-on-scroll transition-all hover:-translate-y-1 hover:shadow-lg"
                 style="border-color:rgba(10,46,120,0.08); animation-delay:{{ $i * 0.1 }}s; box-shadow:0 4px 20px rgba(10,46,120,0.06)">
                <div class="text-4xl flex-shrink-0">{{ $cityEmojis[$area->city] ?? '📍' }}</div>
                <div>
                    <h3 class="font-bold text-lg mb-1" style="color:#0A2E78">{{ $area->city }}</h3>
                    <p class="text-sm mb-3" style="color:#64748b">{{ $cityDescs[$area->city] ?? $area->province }}</p>
                    <a href="https://wa.me/6281234567890?text=Halo%20ROOTERA%2C%20saya%20di%20area%20{{ urlencode($area->city) }}%20butuh%20layanan."
                       target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 text-xs font-bold py-1.5 px-3 rounded-lg transition-all"
                       style="background:rgba(37,211,102,0.1); color:#25D366; border:1px solid rgba(37,211,102,0.25)"
                       onmouseover="this.style.background='#25D366'; this.style.color='white'"
                       onmouseout="this.style.background='rgba(37,211,102,0.1)'; this.style.color='#25D366'">
                        <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat untuk area ini
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Google Maps --}}
<section class="py-16 bg-white" aria-label="Peta Lokasi ROOTERA">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <div class="section-tag mx-auto">Lokasi Kantor</div>
            <h2 class="section-title mb-3">Temukan <span>Lokasi Kami</span></h2>
        </div>
        <div class="map-embed">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126921.84628568938!2d106.6894571!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                width="100%"
                height="420"
                style="border:0; display:block"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Lokasi Kantor ROOTERA">
            </iframe>
        </div>
        <div class="text-center mt-8">
            <p class="font-semibold mb-1" style="color:#0A2E78">
                <svg width="16" height="16" fill="none" stroke="#169F81" stroke-width="2" viewBox="0 0 24 24" style="display:inline-block; vertical-align:middle; margin-right:4px"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Jakarta Selatan, DKI Jakarta, Indonesia
            </p>
            <p style="color:#64748b; font-size:0.875rem">Kami beroperasi di seluruh area yang tertera — hubungi kami untuk konfirmasi jangkauan.</p>
        </div>
    </div>
</section>

@endsection
