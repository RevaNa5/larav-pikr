@extends('layouts.public')

@section('title', 'Informasi - PIK-R SKAKMATT')

@section('content')
<!-- Page Hero Header -->
<section class="relative py-24 border-b border-emerald-500/10">
    <div class="absolute inset-0 bg-pikr-dark overflow-hidden pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-pikr-primary/20 blur-[100px] rounded-full"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center justify-center px-4 py-1.5 mb-6 rounded-full bg-white/5 border border-pikr-accent/20 backdrop-blur-md">
            <span class="text-xs font-bold text-pikr-accent uppercase tracking-widest">Edukasi & Publikasi</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight drop-shadow-sm">
            Pusat Informasi
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed font-light">
            Sumber edukasi remaja, info kesehatan reproduksi, dan pengumuman resmi PIK-R SKAKMATT.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 pb-32">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Dummy Article Card 1 -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-emerald-950/5 border border-gray-100 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
            <div class="relative h-56 overflow-hidden bg-gray-100">
                <div class="absolute inset-0 bg-gradient-to-tr from-pikr-emerald/80 to-pikr-primary/60 mix-blend-multiply group-hover:scale-105 transition-transform duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2070&auto=format&fit=crop" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-pikr-dark text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Kesehatan Reproduksi</span>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <div class="text-xs text-pikr-muted mb-3 font-medium flex items-center gap-2">
                    <span>24 Sep 2026</span>
                    <span>•</span>
                    <span>Oleh: Humas</span>
                </div>
                <h3 class="text-xl font-bold text-pikr-dark mb-3 leading-snug group-hover:text-pikr-primary transition-colors">
                    Memahami Triad KRR: Panduan Dasar untuk Remaja
                </h3>
                <p class="text-gray-500 mb-6 line-clamp-3 leading-relaxed text-sm">
                    Triad KRR mencakup tiga risiko utama yang dihadapi remaja yaitu seksualitas, HIV/AIDS, dan NAPZA. Mari kita pelajari bagaimana cara menghindarinya dengan bijak.
                </p>
                <div class="mt-auto pt-4 border-t border-gray-50">
                    <a href="#" class="text-pikr-primary font-semibold flex items-center gap-2 group-hover:gap-3 transition-all duration-300 text-sm">
                        Baca Artikel <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dummy Article Card 2 -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-emerald-950/5 border border-gray-100 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
            <div class="relative h-56 overflow-hidden bg-gray-100 flex items-center justify-center">
                <div class="absolute inset-0 bg-gradient-to-tr from-pikr-emerald/80 to-pikr-primary/60 mix-blend-multiply group-hover:scale-105 transition-transform duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?q=80&w=2070&auto=format&fit=crop" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-pikr-dark text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Pengumuman</span>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <div class="text-xs text-pikr-muted mb-3 font-medium flex items-center gap-2">
                    <span>15 Sep 2026</span>
                    <span>•</span>
                    <span>Oleh: Ketua</span>
                </div>
                <h3 class="text-xl font-bold text-pikr-dark mb-3 leading-snug group-hover:text-pikr-primary transition-colors">
                    Pendaftaran Pengurus Baru PIK-R SKAKMATT Dibuka
                </h3>
                <p class="text-gray-500 mb-6 line-clamp-3 leading-relaxed text-sm">
                    Kesempatan emas untuk bergabung menjadi pengurus inti maupun anggota divisi di kepengurusan periode 2026/2027. Simak syarat dan ketentuannya di sini.
                </p>
                <div class="mt-auto pt-4 border-t border-gray-50">
                    <a href="#" class="text-pikr-primary font-semibold flex items-center gap-2 group-hover:gap-3 transition-all duration-300 text-sm">
                        Baca Artikel <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dummy Article Card 3 -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-emerald-950/5 border border-gray-100 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
            <div class="relative h-56 overflow-hidden bg-gray-100 flex items-center justify-center text-pikr-muted">
                <div class="absolute inset-0 bg-pikr-light/50 group-hover:bg-pikr-light transition-colors duration-500 z-0"></div>
                <svg class="w-16 h-16 relative z-10 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"></path></svg>
                <div class="absolute top-4 left-4 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-pikr-dark text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Life Skills</span>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <div class="text-xs text-pikr-muted mb-3 font-medium flex items-center gap-2">
                    <span>10 Sep 2026</span>
                    <span>•</span>
                    <span>Oleh: Konselor Sebaya</span>
                </div>
                <h3 class="text-xl font-bold text-pikr-dark mb-3 leading-snug group-hover:text-pikr-primary transition-colors">
                    Pentingnya Kecakapan Hidup (Life Skills) di Era Digital
                </h3>
                <p class="text-gray-500 mb-6 line-clamp-3 leading-relaxed text-sm">
                    Mengelola stres, berpikir kritis, dan kemampuan berkomunikasi adalah senjata utama remaja modern untuk menghadapi tantangan.
                </p>
                <div class="mt-auto pt-4 border-t border-gray-50">
                    <a href="#" class="text-pikr-primary font-semibold flex items-center gap-2 group-hover:gap-3 transition-all duration-300 text-sm">
                        Baca Artikel <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
