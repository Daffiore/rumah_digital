<!DOCTYPE html>
<html lang="id" class="bg-white h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - LOGIN SYSTEM</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="flex h-full overflow-hidden text-gray-900 antialiased">

    <aside class="flex flex-col justify-between bg-[#333745] border-gray-700 border-r w-64 h-full text-gray-300 shrink-0">
        <div class="flex-1 px-4 py-6 overflow-y-auto">
            <div class="mb-6 pb-2 border-gray-600 border-b h-8">
                <span class="font-bold text-gray-400 text-xs uppercase tracking-wider">Main Menu</span>
            </div>
            
            <nav class="space-y-2">
                <a href="/dashboard/beranda" class="flex items-center gap-3 hover:bg-gray-700/50 px-3 py-2 rounded-xl font-semibold hover:text-white text-sm transition-colors">
                    <i class="w-4 text-center fa-solid fa-house"></i> Beranda
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-gray-700/50 px-3 py-2 rounded-xl font-semibold hover:text-white text-sm transition-colors">
                    <i class="w-4 text-center fa-solid fa-clock-rotate-left"></i> Timeline Aktivitas
                </a>
                
                

                <div class="pt-2">
                    <button class="group flex justify-between items-center hover:bg-gray-700/50 px-3 py-2 rounded-xl w-full font-semibold hover:text-white text-sm transition-colors">
                        <span class="flex items-center gap-3">
                            <i class="w-4 text-center fa-solid fa-graduation-cap"></i> Divisi Akademik
                        </span>
                        <i class="text-xs fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="space-y-1 mt-1 ml-4 pl-3 border-gray-600 border-l-2">
                        <a href="/timeline" class="block hover:bg-gray-700/50 px-3 py-1.5 rounded-lg font-medium hover:text-white text-xs transition-colors">
                            Timeline Divisi
                        </a>
                        <a href="#" class="block hover:bg-gray-700/50 px-3 py-1.5 rounded-lg font-medium hover:text-white text-xs transition-colors">
                            Contact SuperAdmin
                        </a>
                        <a href="#" class="block hover:bg-gray-700/50 px-3 py-1.5 rounded-lg font-medium hover:text-white text-xs transition-colors">
                            Buat Pengumuman
                        </a>
                    </div>
                </div>
                <div class="pt-4 border-gray-600/50 border-t">
                    <span class="block mb-2 px-3 font-bold text-[10px] text-gray-500 uppercase tracking-widest">Laporan</span>
                    <div class="px-3">
                        <div class="bg-white shadow-inner rounded-full w-full h-7"></div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="space-y-4 bg-[#2b2e3a] p-4 border-gray-700 border-t">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="flex items-center gap-3 hover:bg-red-500/10 px-3 py-2 rounded-xl w-full font-bold text-red-400 text-sm text-left transition-colors cursor-pointer">
                    <i class="fa-right-from-bracket w-4 text-center fa-solid"></i> Log Out
                </button>
            </form>

            <div class="flex justify-between items-center px-2 pt-2 text-gray-400">
                <a href="#" class="hover:text-white transition-colors"><i class="text-lg fa-brands fa-facebook"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="text-lg fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="text-lg fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="text-lg fa-brands fa-youtube"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="text-lg fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </aside>

    <main class="flex flex-col flex-1 bg-white h-full overflow-y-auto">
        @yield('content')
    </main>

</body>
</html>