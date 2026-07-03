@extends('layouts.app')

@section('title', 'Kontak Kami')
@section('meta_description', 'Hubungi ROOTERA untuk konsultasi gratis. Tersedia via WhatsApp, email, dan form kontak online. Respons cepat 24/7.')

@section('content')

{{-- Page Hero --}}
<div class="page-hero" aria-label="Halaman Kontak ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-tag" style="background:rgba(22,159,129,0.15); border-color:rgba(22,159,129,0.4)">
            <svg width="12" height="12" fill="#169F81" viewBox="0 0 12 12"><circle cx="6" cy="6" r="6"/></svg>
            Hubungi Kami
        </div>
        <h1 class="page-hero title mt-2 mb-3">Siap Membantu Anda</h1>
        <p class="page-hero subtitle">Konsultasi gratis, respons cepat. Kami siaga 24 jam untuk Anda.</p>
    </div>
</div>

<section class="py-24" style="background:#f8fafc" aria-label="Form Kontak ROOTERA">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

            {{-- Contact Info --}}
            <div class="lg:col-span-2">
                <div class="section-tag">Informasi Kontak</div>
                <h2 class="section-title mt-3 mb-5" style="font-size:1.75rem">Mari Bicara<br>dengan <span>Tim Kami</span></h2>
                <p class="mb-8 leading-relaxed" style="color:#64748b">
                    Jangan biarkan masalah saluran mengganggu aktivitas Anda. Tim ROOTERA siap memberikan solusi terbaik dengan respons cepat.
                </p>

                <div class="flex flex-col gap-5">
                    @foreach([
                        ['WhatsApp','https://wa.me/6281234567890','+62 812-3456-7890','Hubungi langsung via WhatsApp','M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z','#25D366'],
                        ['Email','mailto:info@rootera.id','info@rootera.id','Kirim email ke kami','M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z M22,6 12,13 2,6','#1E73D8'],
                        ['Alamat','#','Jakarta Selatan, DKI Jakarta','Kantor pusat ROOTERA','M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z M12 10 m-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0-6 0','#169F81'],
                    ] as $info)
                    <a href="{{ $info[1] }}"
                       class="flex items-start gap-4 p-4 bg-white rounded-2xl border transition-all hover:-translate-y-0.5 hover:shadow-md"
                       style="border-color:rgba(10,46,120,0.08); text-decoration:none; box-shadow:0 2px 12px rgba(10,46,120,0.05)"
                       {{ $info[1] !== '#' ? 'target="_blank" rel="noopener"' : '' }}>
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background:{{ $info[6] ?? $info[5] }}18">
                            <svg width="20" height="20" fill="{{ $info[6] ?? $info[5] }}" viewBox="0 0 24 24">
                                <path d="{{ $info[4] }}"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold uppercase tracking-wider mb-0.5" style="color:#94a3b8">{{ $info[0] }}</div>
                            <div class="font-semibold" style="color:#0A2E78">{{ $info[2] }}</div>
                            <div class="text-xs mt-0.5" style="color:#94a3b8">{{ $info[3] }}</div>
                        </div>
                    </a>
                    @endforeach
                </div>

                {{-- Social links --}}
                <div class="mt-8">
                    <p class="text-sm font-bold mb-4" style="color:#0A2E78">Ikuti Kami</p>
                    <div class="flex gap-3">
                        @foreach([['Instagram','#'],['Facebook','#'],['TikTok','#']] as $social)
                        <a href="{{ $social[1] }}"
                           class="px-4 py-2 rounded-xl text-sm font-semibold border transition-all hover:-translate-y-0.5"
                           style="border-color:rgba(10,46,120,0.15); color:#0A2E78; text-decoration:none"
                           onmouseover="this.style.background='#0A2E78'; this.style.color='#fff'"
                           onmouseout="this.style.background='transparent'; this.style.color='#0A2E78'">
                            {{ $social[0] }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3">
                <div class="bg-white rounded-3xl p-8 shadow-sm" style="border:1px solid rgba(10,46,120,0.08); box-shadow:0 8px 40px rgba(10,46,120,0.08)">
                    <h3 class="text-xl font-bold mb-2" style="color:#0A2E78">Kirim Pesan</h3>
                    <p class="text-sm mb-6" style="color:#64748b">Isi formulir di bawah dan kami akan membalas dalam 1x24 jam.</p>

                    @if(session('success'))
                    <div class="alert-success">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('kontak.store') }}" method="POST" id="contact-form" novalidate>
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label for="name" class="form-label">Nama Lengkap <span style="color:#ef4444">*</span></label>
                                <input type="text" id="name" name="name" class="form-input @error('name') border-red-400 @enderror"
                                       placeholder="Budi Santoso" value="{{ old('name') }}" required>
                                @error('name')<p class="text-xs mt-1" style="color:#ef4444">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="email" class="form-label">Email <span style="color:#ef4444">*</span></label>
                                <input type="email" id="email" name="email" class="form-input @error('email') border-red-400 @enderror"
                                       placeholder="budi@email.com" value="{{ old('email') }}" required>
                                @error('email')<p class="text-xs mt-1" style="color:#ef4444">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label for="phone" class="form-label">No. HP / WhatsApp</label>
                                <input type="tel" id="phone" name="phone" class="form-input"
                                       placeholder="081234567890" value="{{ old('phone') }}">
                            </div>
                            <div>
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" id="subject" name="subject" class="form-input"
                                       placeholder="Saluran mampet" value="{{ old('subject') }}">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="form-label">Pesan <span style="color:#ef4444">*</span></label>
                            <textarea id="message" name="message" rows="5"
                                      class="form-input @error('message') border-red-400 @enderror"
                                      placeholder="Ceritakan masalah Anda secara singkat..." required>{{ old('message') }}</textarea>
                            @error('message')<p class="text-xs mt-1" style="color:#ef4444">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" class="btn-submit" id="submit-contact-btn">
                            Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
