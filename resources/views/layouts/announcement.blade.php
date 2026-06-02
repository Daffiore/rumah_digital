@extends('layouts.dashboard') 

@section('content')
<div class="p-6 md:p-10 bg-gray-50/50 min-h-full">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
        <div>
            <h1 class="text-3xl font-black text-[#0f172a] uppercase tracking-wider">
                Papan <span class="text-[#0284c7]">Pengumuman</span>
            </h1>
            <p class="text-gray-500 text-sm mt-1 font-medium">Informasi dan update terbaru seputar program kerja.</p>
        </div>
        
        <a href="/announcement/addannouncement" class="bg-[#0f172a] hover:bg-[#1e293b] text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-[0_10px_20px_-10px_rgba(15,23,42,0.5)] transition-all active:scale-95 flex items-center gap-2 cursor-pointer"> 
            <i class="fa-solid fa-bullhorn"></i> Buat Pengumuman
        </a>    
    </div>

    <div class="grid grid-cols-1 gap-6">
        
        @foreach ($announcements as $announcement)
        <div class="bg-white border border-gray-100 shadow-xl shadow-gray-200/40 rounded-[2rem] p-6 md:p-8 relative overflow-hidden transition-all hover:shadow-2xl">
            
            <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#0284c7]"></div>

            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4 gap-2 ml-4">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        
                        @if($announcement->status == 'Penting')
                            <span class="bg-red-100 text-red-700 text-xs font-bold px-3 py-1 rounded-full border border-red-200 flex items-center">
                                <i class="fa-solid fa-fire mr-1.5"></i> Penting
                            </span>
                        @elseif($announcement->status == 'Kegiatan')
                            <span class="bg-emerald-100 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full border border-emerald-200 flex items-center">
                                <i class="fa-solid fa-calendar-check mr-1.5"></i> Kegiatan
                            </span>
                        @else
                            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full border border-blue-200 flex items-center">
                                <i class="fa-solid fa-circle-info mr-1.5"></i> Biasa
                            </span>
                        @endif

                        <time class="text-sm font-semibold text-gray-400">
                            <i class="fa-regular fa-clock mr-1"></i> 
                            {{ \Carbon\Carbon::parse($announcement->published_at ?? $announcement->created_at)->diffForHumans() }}
                        </time>
                    </div>
                    
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900">
                        {{ $announcement->title }}
                    </h2>
                </div>

                <div class="flex gap-4 mt-2 md:mt-0">
                    <a href="/announcement/editannouncement/{{ $announcement->id }}" class="text-blue-600 hover:text-blue-800 text-xs font-bold transition-colors cursor-pointer">
                        <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                    </a>
                    
                    <form action="/announcement/deleteannouncement/{{ $announcement->id }}" method="POST" class="inline-block">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="text-red-500 hover:text-red-700 text-xs font-bold transition-colors cursor-pointer" onclick="return confirm('Hapus pengumuman ini?')">
                            <i class="fa-solid fa-trash mr-1"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>

            <div class="ml-4 text-gray-600 text-sm md:text-base leading-relaxed mb-6">
                <p>
                    {{ $announcement->description }}
                </p>
            </div>

            <div class="ml-4 flex items-center gap-3 pt-4 border-t border-gray-100">
                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-[#0f172a] font-bold text-xs border border-gray-300">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-900">Dipublikasikan oleh: <span class="text-[#0284c7]">{{ $announcement->divisi }}</span></p>
                </div>
            </div>

        </div>
        @endforeach
        </div>
</div>
@endsection