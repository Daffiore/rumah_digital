<section id="timeline" class="bg-navy">
    <div class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="font-display text-3xl md:text-4xl text-paper mb-10">Timeline Activity</h2>

        <ol class="relative border-l border-paper/20 ml-3">
            @foreach ($timelines as $item)
                <li class="mb-8 ml-6 last:mb-0">
                    <span class="absolute -left-[9px] flex items-center justify-center w-4 h-4 rounded-full {{ $item['done'] ? 'bg-gold' : 'bg-teal' }} ring-4 ring-navy"></span>
                    <div class="rounded-xl {{ $item['done'] ? 'bg-paper/10' : 'bg-gold/90' }} px-5 py-4">
                        <p class="text-sm {{ $item['done'] ? 'text-paper/60' : 'text-navy/70' }}">{{ $item['start_date'] }} - {{ $item['finished_date'] }}   {{ $item['status'] }}</p>
                        <p class="mt-1 font-medium {{ $item['done'] ? 'text-paper' : 'text-navy' }}">{{ $item['title'] }}</p>
                        <p>{{$item['description'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
