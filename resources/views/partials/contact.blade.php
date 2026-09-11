<section id="contact" class="max-w-6xl mx-auto px-6 py-20">
    <h2 class="font-display text-3xl md:text-4xl text-navy mb-8">Send Us Messages</h2>

    <div class="max-w-xl">
        @if (session('status'))
            <div class="mb-6 rounded-lg bg-teal/10 border border-teal/30 text-teal px-4 py-3 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') ?? '#' }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="sr-only">Your Name</label>
                <input
                    type="text" id="name" name="name" placeholder="Your Name"
                    value="{{ old('name') }}"
                    class="w-full border-0 border-b border-navy/20 bg-transparent py-2 placeholder:text-slate/60 focus:border-teal focus:ring-0"
                >
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="sr-only">Phone Number</label>
                <input
                    type="tel" id="phone" name="phone" placeholder="Phone Number"
                    value="{{ old('phone') }}"
                    class="w-full border-0 border-b border-navy/20 bg-transparent py-2 placeholder:text-slate/60 focus:border-teal focus:ring-0"
                >
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="sr-only">Message</label>
                <textarea
                    id="message" name="message" rows="5" placeholder="Message"
                    class="w-full rounded-lg border border-navy/20 bg-white/60 p-3 placeholder:text-slate/60 focus:border-teal focus:ring-0"
                >{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="inline-flex items-center px-6 py-3 rounded-full bg-teal text-paper font-medium hover:bg-teal/90 transition-colors"
            >
                Submit
            </button>
        </form>
    </div>
</section>
