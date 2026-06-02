<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengumuman</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <aside class="w-64 bg-[#1e293b] flex flex-col h-full shadow-2xl z-10">
            <div class="p-6 border-b border-slate-700">
                <h2 class="text-white text-xl font-bold tracking-widest text-center">LOGIN SYSTEM</h2>
            </div>

            <div class="flex-1 overflow-y-auto p-4 space-y-2">
                <p class="text-xs font-bold text-slate-400 mb-2 mt-4 ml-2 tracking-wider">MAIN MENU</p>
                <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white hover:bg-slate-800 px-4 py-2.5 rounded-lg transition-colors">
                    <i class="fa-solid fa-house w-5 text-center"></i> Beranda
                </a>
                <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white hover:bg-slate-800 px-4 py-2.5 rounded-lg transition-colors">
                    <i class="fa-solid fa-clock-rotate-left w-5 text-center"></i> Timeline Aktivitas
                </a>

                <p class="text-xs font-bold text-slate-400 mb-2 mt-6 ml-2 tracking-wider">DIVISI GRAMTI</p>
                <div class="pl-4 space-y-1">
                    <a href="/timeline" class="flex items-center gap-3 text-slate-400 hover:text-white text-sm py-2 transition-colors">
                        Timeline Divisi
                    </a>
                    <a href="/announcement" class="flex items-center gap-3 text-[#0284c7] font-bold text-sm py-2 transition-colors">
                        Announcements
                    </a>
                </div>
            </div>

            <div class="p-4 border-t border-slate-700">
                <a href="/logout" class="flex items-center gap-3 text-red-400 hover:text-red-300 px-4 py-2 rounded-lg transition-colors font-bold">
                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                </a>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto bg-gray-50/50 p-6 md:p-10 relative">

            <div class="mb-8">
                <h1 class="text-3xl font-black text-[#0f172a] uppercase tracking-wider">
                    Edit <span class="text-[#0284c7]">Pengumuman</span>
                </h1>
                <p class="text-gray-500 text-sm mt-1 font-medium">Perbarui informasi pengumuman yang sudah ada.</p>
            </div>

            <div class="bg-white border border-gray-100 shadow-xl shadow-gray-200/40 rounded-[2rem] p-6 md:p-10 max-w-4xl">
                
                <form action="/announcement/updateannouncement/{{ $announcement->id }}" method="POST">
                    @csrf 
                    @method('PUT') <div class="grid grid-cols-1 gap-6">
                        
                        <div>
                            <label for="title" class="block mb-2 text-sm font-bold text-gray-900">Judul Pengumuman</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $announcement->title) }}" 
                                   class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-[#0284c7]/20 focus:border-[#0284c7] block w-full p-3.5 outline-none transition-all" 
                                   required>
                            @error('title') <p class="mt-1 text-xs text-red-500 font-bold">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="status" class="block mb-2 text-sm font-bold text-gray-900">Kategori / Status</label>
                            <select id="status" name="status" 
                                    class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-[#0284c7]/20 focus:border-[#0284c7] block w-full p-3.5 outline-none transition-all" required>
                                
                                <option value="Biasa" {{ old('status', $announcement->status) == 'Biasa' ? 'selected' : '' }}>Info Biasa</option>
                                <option value="Penting" {{ old('status', $announcement->status) == 'Penting' ? 'selected' : '' }}>Penting / Urgent</option>
                                <option value="Kegiatan" {{ old('status', $announcement->status) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan Baru</option>
                            </select>
                            @error('status') <p class="mt-1 text-xs text-red-500 font-bold">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="description" class="block mb-2 text-sm font-bold text-gray-900">Isi Pengumuman</label>
                            <textarea id="description" name="description" rows="6" 
                                      class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-[#0284c7]/20 focus:border-[#0284c7] block w-full p-3.5 outline-none transition-all resize-y" 
                                      required>{{ old('description', $announcement->description) }}</textarea>
                            @error('description') <p class="mt-1 text-xs text-red-500 font-bold">{{ $message }}</p> @enderror
                        </div>

                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 mt-8 pt-6 border-t border-gray-100">
                        <button type="submit" class="w-full sm:w-auto bg-[#0f172a] hover:bg-[#1e293b] text-white px-8 py-3 rounded-xl font-bold text-sm shadow-lg transition-all active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                        </button>
                        
                        <a href="/announcement" class="w-full sm:w-auto bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 px-8 py-3 rounded-xl font-bold text-sm transition-all active:scale-95 flex items-center justify-center text-center">
                            Batal
                        </a>
                    </div>

                </form>
            </div>
        </main>

    </div>

</body>
</html>