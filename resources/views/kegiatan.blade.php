@extends('layouts.public')

@section('title', 'Kegiatan & Event - PIK-R SKAKMATT')

@section('content')
<!-- Page Hero Header -->
<section class="relative py-24 border-b border-emerald-500/10">
    <div class="absolute inset-0 bg-pikr-dark overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-pikr-primary/15 blur-[120px] rounded-full translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-600/10 blur-[100px] rounded-full -translate-x-1/3 translate-y-1/3"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center justify-center px-4 py-1.5 mb-6 rounded-full bg-white/5 border border-pikr-accent/20 backdrop-blur-md">
            <span class="text-xs font-bold text-pikr-accent uppercase tracking-widest">Jadwal & Agenda</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight drop-shadow-sm">
            Kegiatan PIK-R
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed font-light">
            Jadwal kegiatan rutin, forum diskusi, pelatihan konselor, dan event tahunan SKAKMATT.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 pb-32">
    
    <div class="flex justify-between items-end mb-10 border-b border-gray-100 pb-4">
        <h2 class="text-2xl font-bold text-pikr-dark tracking-tight">Event Mendatang</h2>
        <a href="#" class="text-pikr-primary text-sm font-semibold hover:text-pikr-emerald transition-colors">Lihat Kalender &rarr;</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
        
        <!-- Event Card -->
        <div class="group bg-white rounded-3xl p-6 shadow-xl shadow-emerald-950/5 border border-gray-100 flex flex-col sm:flex-row gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
            <div class="w-full sm:w-32 h-32 shrink-0 bg-pikr-light rounded-2xl border border-pikr-primary/10 flex flex-col items-center justify-center text-pikr-primary overflow-hidden relative">
                <div class="absolute inset-0 bg-pikr-primary/5 group-hover:bg-pikr-primary/10 transition-colors duration-300"></div>
                <span class="text-sm font-bold uppercase tracking-widest relative z-10">Okt</span>
                <span class="text-4xl font-black leading-none relative z-10">12</span>
            </div>
            <div class="flex flex-col flex-grow justify-center">
                <div class="flex items-center gap-2 mb-2">
                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Terbuka Umum</span>
                    <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Pendaftaran H-5</span>
                </div>
                <h3 class="text-xl font-bold text-pikr-dark mb-2 leading-tight group-hover:text-pikr-primary transition-colors">
                    SKAKMATT FEST 2026
                </h3>
                <div class="text-sm text-gray-500 space-y-1 mb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        08.00 - Selesai WIB
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Lapangan Indoor SMK N 1 PWT
                    </div>
                </div>
                <div class="mt-auto flex">
                    <a href="#" class="bg-pikr-dark hover:bg-pikr-primary text-white text-sm font-semibold px-5 py-2 rounded-xl transition-colors w-full sm:w-auto text-center">
                        Detail Event
                    </a>
                </div>
            </div>
        </div>

        <!-- Event Card -->
        <div class="group bg-white rounded-3xl p-6 shadow-xl shadow-emerald-950/5 border border-gray-100 flex flex-col sm:flex-row gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
            <div class="w-full sm:w-32 h-32 shrink-0 bg-pikr-light rounded-2xl border border-pikr-primary/10 flex flex-col items-center justify-center text-pikr-primary overflow-hidden relative">
                <div class="absolute inset-0 bg-pikr-primary/5 group-hover:bg-pikr-primary/10 transition-colors duration-300"></div>
                <span class="text-sm font-bold uppercase tracking-widest relative z-10">Okt</span>
                <span class="text-4xl font-black leading-none relative z-10">24</span>
            </div>
            <div class="flex flex-col flex-grow justify-center">
                <div class="flex items-center gap-2 mb-2">
                    <span class="bg-blue-100 text-blue-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Internal Pengurus</span>
                </div>
                <h3 class="text-xl font-bold text-pikr-dark mb-2 leading-tight group-hover:text-pikr-primary transition-colors">
                    SKAKMATT Discussion Time #2
                </h3>
                <div class="text-sm text-gray-500 space-y-1 mb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        15.30 - 17.00 WIB
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Ruang Multimedia
                    </div>
                </div>
                <div class="mt-auto flex">
                    <a href="#" class="bg-gray-100 hover:bg-gray-200 text-pikr-dark text-sm font-semibold px-5 py-2 rounded-xl transition-colors w-full sm:w-auto text-center">
                        Detail Event
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
