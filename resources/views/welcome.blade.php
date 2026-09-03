@extends('layouts.dashboard')

@section('content')
<!-- Header Atas (Bar Abu-abu Kosong Sesuai Gambar) -->
<div class="bg-gray-200 border-gray-300 border-b w-full h-14 shrink-0"></div>

<!-- Area Utama Konten Beranda -->
<div class="flex-1 space-y-8 p-6 md:p-8">
    
    <!-- CONTAINER SLIDER (Wadah Merah Muda Halus Sesuai Mockup) -->
    <div class="relative bg-[#fdf0f0] shadow-sm p-6 border border-red-100 rounded-3xl">
        
        <!-- Tombol Panah Kiri -->
        <button class="top-1/2 left-3 z-10 absolute flex justify-center items-center bg-white hover:bg-gray-50 shadow-md rounded-full w-8 h-8 text-gray-600 -translate-y-1/2 cursor-pointer">
            <i class="fa-chevron-left text-xs fa-solid"></i>
        </button>

        <!-- Grid Cards (Akan otomatis rapi bertumpuk responsif) -->
        <div class="items-end gap-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 px-8">
            
            <!-- Card 1 (Kiri) -->
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-[#d9d9d9] shadow-sm rounded-2xl w-full aspect-3/4"></div>
                <div class="bg-[#9da3b4] shadow-sm rounded-full w-full h-8"></div>
            </div>

            <!-- Card 2 (Tengah - Lebih Besar Sesuai Gambar) -->
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-[#d9d9d9] shadow-md border-2 border-white/40 rounded-2xl w-full aspect-3/4 scale-105"></div>
                <div class="flex justify-center items-center bg-[#9da3b4] shadow-md px-4 rounded-full w-full h-9 font-bold text-white text-xs tracking-wide">
                    PSDM-Akademik
                </div>
            </div>

            <!-- Card 3 (Kanan) -->
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-[#d9d9d9] shadow-sm rounded-2xl w-full aspect-3/4"></div>
                <div class="flex justify-center items-center bg-[#9da3b4] shadow-sm px-3 rounded-full w-full h-8 font-medium text-[11px] text-white/90 truncate">
                    PSDM-Non Akademik
                </div>
            </div>

        </div>

        <!-- Tombol Panah Kanan -->
        <button class="top-1/2 right-3 z-10 absolute flex justify-center items-center bg-white hover:bg-gray-50 shadow-md rounded-full w-8 h-8 text-gray-600 -translate-y-1/2 cursor-pointer">
            <i class="fa-chevron-right text-xs fa-solid"></i>
        </button>
        
    </div>

</div>
@endsection