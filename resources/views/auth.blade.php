<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN SYSTEM</title>
    
    <!-- help sistemku gak boleh masukin vite jadi aku pake link -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center bg-linear-to-br from-[#111e2e] via-[#2a3c50] to-[#cfc4b6] p-4 sm:p-6 min-h-full antialiased">

    <div class="flex flex-col items-center w-full max-w-md md:max-w-4xl">
        
        <h1 class="drop-shadow-sm mb-6 md:mb-8 font-black text-[#0f172a] text-3xl md:text-5xl uppercase tracking-widest">
            LOGIN
        </h1>

        <!-- kartu kontainer -->
        <div class="items-stretch gap-6 grid grid-cols-1 md:grid-cols-2 bg-[#cbd5e1]/40 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.4)] backdrop-blur-md p-6 md:p-8 border border-white/20 rounded-4xl md:rounded-[2.5rem] w-full">
            
            <!-- LOGIN aku roam -->
            <div class="flex flex-col justify-center md:px-4 py-2">
                
                @if(session('error'))
                    <div class="bg-red-500/20 backdrop-blur-sm mb-4 p-3 border border-red-500/40 rounded-xl font-semibold text-red-900 text-xs">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="/logincik" method="POST" class="space-y-5 md:space-y-6">
                    @csrf
                    <!-- Input Email -->
                    <div class="relative pb-2 border-gray-400/60 focus-within:border-[#0284c7] border-b-2 transition-all duration-300">
                        <label for="email" class="block mb-1.5 font-bold text-gray-700 text-xs uppercase tracking-wider">Email</label>
                        <input id="email" type="text" name="email" placeholder="TojiGanteng@stis.ac.id" required autocomplete="email" 
                            class="bg-transparent p-0 border-none focus:outline-none focus:ring-0 w-full font-medium text-white placeholder:text-white/40 md:text-sm text-base">
                    </div>

                    <!-- Input Password -->
                    <div class="relative pb-2 border-gray-400/60 focus-within:border-[#0284c7] border-b-2 transition-all duration-300">
                        <label for="password" class="block mb-1.5 font-bold text-gray-700 text-xs uppercase tracking-wider">Password</label>
                        <input id="password" type="password" name="password" placeholder="mabar123" required autocomplete="current-password" 
                            class="bg-transparent p-0 border-none focus:outline-none focus:ring-0 w-full font-medium text-white placeholder:text-white/40 md:text-sm text-base">
                    </div>
                    <!-- Tombol Login Kapsul -->
                    <div class="pt-2 text-left">
                        <button type="submit" class="bg-amber-500 hover:bg-amber-400 shadow-[0_4px_14px_rgba(245,158,11,0.4)] px-10 py-3 md:py-2 rounded-full w-full md:w-auto font-bold text-gray-900 text-sm active:scale-98 transition-all duration-200 cursor-pointer">
                            Login
                        </button>
                    </div>
                </form>

                <!-- Navigasi Bawah -->
                <div class="flex flex-col gap-2 mt-8 pt-4 border-gray-400/30 border-t font-semibold text-[#1e3a8a] text-xs">
                    <a href="/signup" class="inline-block py-1 w-max hover:text-[#0284c7] text-left transition-colors">Create Account</a>[cite: 1]
                    <a href="#" class="inline-block py-1 w-max hover:text-[#0284c7] text-left transition-colors">Forget Password</a>[cite: 1]
                </div>
            </div>

            <!-- KOLOM KANAN: VISUAL BOX -->
            <!-- Perbaikan 3 & 4: bg-gradient-to-br -> bg-linear-to-br, rounded-[2rem] -> rounded-4xl, dan min-h-[350px] -> min-h-87.5 -->
            <div class="hidden md:block relative bg-linear-to-br from-[#3b82f6] to-[#1d4ed8] shadow-inner border border-white/10 rounded-4xl min-h-87.5 overflow-hidden">
                <div class="-top-10 -right-10 absolute bg-white/10 blur-2xl rounded-full w-40 h-40"></div>
                <div class="-bottom-10 -left-10 absolute bg-black/10 blur-xl rounded-full w-40 h-40"></div>
            </div>

        </div>
    </div>

</body>
</html>