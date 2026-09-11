<section id="home" class="relative overflow-hidden bg-gradient-to-br from-gold via-gold-soft to-paper">
    <div class="max-w-6xl mx-auto px-6 pt-16 pb-24 md:pt-24 md:pb-32">
        <p class="text-navy/70 font-medium tracking-wide mb-3">Help me fais kun >_< </p>
        <h1 class="font-display text-4xl md:text-6xl leading-tight text-navy max-w-2xl">
            {{ $heroTitle ?? 'This is clearly AI bro just judge me.' }}
        </h1>
        <p class="mt-6 max-w-lg text-navy/80 text-base md:text-lg">
            {{ $heroSubtitle ?? 'I dont know what to put here.' }}
        </p>
        <div class="mt-8 flex flex-wrap gap-4">
            <a href="#about" class="inline-flex items-center px-6 py-3 rounded-full bg-navy text-paper font-medium hover:bg-navy/90 transition-colors">
                Lihat kelas kami
            </a>
            <a href="#contact" class="inline-flex items-center px-6 py-3 rounded-full border border-navy/30 text-navy font-medium hover:border-navy transition-colors">
                Hubungi kami
            </a>
        </div>
    </div>

    {{-- Subtle decorative arc, quiet enough not to compete with the headline --}}
    <svg class="absolute -right-24 top-0 h-full w-auto opacity-20 pointer-events-none" viewBox="0 0 400 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M400 0C300 100 300 400 400 500" stroke="#1B2436" stroke-width="60"/>
    </svg>
</section>
