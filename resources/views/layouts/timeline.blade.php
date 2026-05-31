@extends('layouts.dashboard') 

@section('content')
<div class="p-6 md:p-10 bg-gray-50/50 min-h-full">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
        <div>
            <h1 class="text-3xl font-black text-[#0f172a] uppercase tracking-wider">
                Timeline <span class="text-[#0284c7]">{{ auth()->user()->divisi }}</span>
            </h1>
            <p class="text-gray-500 text-sm mt-1 font-medium">Pantau dan kelola jadwal program kerja divisimu di sini.</p>
        </div>
        
        <a href="/timeline/addtimeline" class="bg-[#0f172a] hover:bg-[#1e293b] text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-[0_10px_20px_-10px_rgba(15,23,42,0.5)] transition-all active:scale-95 flex items-center gap-2 cursor-pointer"> 
            <i class="fa-solid fa-plus"></i> Tambah Kegiatan
        </a>    
    </div>

    <div class="bg-white border border-gray-100 shadow-xl shadow-gray-200/40 rounded-[2rem] p-6 md:p-10">
        
        <ol class="relative border-l-2 border-gray-200 ml-3 md:ml-4">
            
            @foreach ($timelines as $timeline)
            
            <li class="mb-10 ml-8">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-emerald-500 rounded-full -left-4 ring-8 ring-white text-white shadow-sm">
                    <i class="fa-solid fa-check text-xs"></i>
                </span>
                
                <div class="bg-gray-50/80 border border-gray-100 p-5 rounded-2xl hover:shadow-md hover:border-emerald-200 transition-all">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-2">
                        <h3 class="flex items-center text-lg font-bold text-gray-900">
                            {{ $timeline->title }}
                            
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-0.5 rounded-full ml-3 border border-emerald-200">
                                {{ $timeline->status }}
                            </span>
                        </h3>
                        
                        <time class="text-sm font-semibold text-gray-400">
                            <i class="fa-regular fa-calendar mr-1"></i> 
                            {{ \Carbon\Carbon::parse($timeline->start_date)->translatedFormat('d F Y') }} - 
                            {{ \Carbon\Carbon::parse($timeline->end_date)->translatedFormat('d F Y') }}
                        </time>
                    </div>
                    
                    <p class="mb-4 text-sm font-medium text-gray-500 leading-relaxed">
                        {{ $timeline->description }}
                    </p>
                    
                    <div class="flex gap-4 pt-3 border-t border-gray-200/60">
                        <a href='/timeline/edittimeline/{{$timeline->id}}' class="text-blue-600 hover:text-blue-800 text-xs font-bold transition-colors cursor-pointer"><i class="fa-solid fa-pen-to-square mr-1"></i> Edit</a>
                        <form action="/timeline/deletetimeline/{{ $timeline->id }}" method="POST" class="inline-block">
                            @csrf 
                            @method('DELETE') 
                             <button type="submit" class="text-red-500 hover:text-red-700 text-xs font-bold transition-colors cursor-pointer" onclick="return confirm('Apakah anda yakin ingin menghapus kegiatan ini?')">
                            <i class="fa-solid fa-trash mr-1"></i> Hapus
                        </button>
                        </form>
                    </div>
                </div>
            </li>
            
            @endforeach

        </ol>
    </div>
</div>
@endsection