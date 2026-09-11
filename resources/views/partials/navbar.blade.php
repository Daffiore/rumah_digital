<header class="sticky top-0 z-50 bg-paper/95 backdrop-blur border-b border-navy/10">
    <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="font-display text-xl text-navy">Pratistha Adhikara</a>

        {{-- Desktop links --}}
        <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-slate">
            <li><a href="#home" class="hover:text-navy transition-colors">Home</a></li>
            <li><a href="#about" class="hover:text-navy transition-colors">About Us</a></li>
            <li><a href="#timeline" class="hover:text-navy transition-colors">Timeline</a></li>
            <li><a href="#contact" class="hover:text-navy transition-colors">Contact Us</a></li>
            @if(auth()->check() && auth()->user()->role == 'superadmin')
                <li><a href="/dashboard" class="hover:text-navy transition-colors">Admin Page</a></li>
            @endif
        </ul>

        <div class="flex items-center gap-4">
            @auth
                <a
                    class="w-9 h-9 rounded-full border border-navy/20 flex items-center justify-center text-navy hover:border-gold transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
                    </svg>
                </a>
            @else
                <a h
                    class="w-9 h-9 rounded-full border border-navy/20 flex items-center justify-center text-navy hover:border-gold transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
                    </svg>
                </a>
            @endauth

            {{-- Mobile menu button --}}
            <button type="button" class="md:hidden text-navy" aria-label="Open menu"
                onclick="document.getElementById('mobile-nav').classList.toggle('hidden')">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div id="mobile-nav" class="hidden md:hidden border-t border-navy/10 bg-paper">
        <ul class="flex flex-col px-6 py-4 gap-4 text-sm font-medium text-slate">
            <li><a href="#home" class="block hover:text-navy">Home</a></li>
            <li><a href="#about" class="block hover:text-navy">About Us</a></li>
            <li><a href="#timeline" class="block hover:text-navy">Timeline</a></li>
            <li><a href="#contact" class="block hover:text-navy">Contact Us</a></li>
        </ul>
    </div>
</header>