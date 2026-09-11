@php
    // Replace with data passed from the controller, e.g. return view('welcome', ['classes' => $classes]);
    $classes = $classes ?? [
        ['code' => '1D31', 'photo' => null],
        ['code' => '1D32', 'photo' => null],
        ['code' => '1ST1', 'photo' => null],
        ['code' => '1ST2', 'photo' => null],
        ['code' => '1ST3', 'photo' => null],
        ['code' => '1ST4', 'photo' => null],
    ];
@endphp

<section id="about" class="max-w-6xl mx-auto px-6 py-20">
    <h2 class="font-display text-3xl md:text-4xl text-navy mb-2">About Us</h2>
    <p class="text-slate max-w-xl mb-10">Perwakilan setiap kelas yang tergabung dalam kepanitiaan Paradoks.</p>

    <div class="relative">
        <div class="flex gap-5 overflow-x-auto scroll-snap-x pb-4 -mx-6 px-6 md:mx-0 md:px-0">
            @foreach ($classes as $class)
                <div class="scroll-snap-item shrink-0 w-36">
                    <div class="aspect-[3/4] rounded-2xl bg-white border border-navy/10 shadow-sm overflow-hidden flex items-center justify-center">
                        @if (!empty($class['photo']))
                            <img src="{{ $class['photo'] }}" alt="Kelas {{ $class['code'] }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-slate/40 text-sm">Foto</span>
                        @endif
                    </div>
                    <p class="mt-3 text-center font-medium text-navy">{{ $class['code'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Scroll hint arrow, visible only when content overflows on desktop --}}
        <div class="hidden md:flex absolute right-0 top-1/3 -translate-y-1/2 items-center justify-center w-9 h-9 rounded-full bg-white border border-navy/10 shadow-sm text-navy/60">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6"/>
            </svg>
        </div>
    </div>
</section>
