<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pratistha Adhikara')</title>

    {{-- If you're using Laravel Mix/Vite, swap this for @vite(['resources/css/app.css']) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#1B2436',
                        gold: '#E8A33D',
                        'gold-soft': '#F4C86B',
                        paper: '#FBF6EA',
                        teal: '#2F8F82',
                        slate: '#5B6472',
                    },
                    fontFamily: {
                        display: ['Fraunces', 'serif'],
                        body: ['"IBM Plex Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'IBM Plex Sans', sans-serif; background-color: #FBF6EA; }
        .font-display { font-family: 'Fraunces', serif; }
        .scroll-snap-x { scroll-snap-type: x mandatory; }
        .scroll-snap-item { scroll-snap-align: start; }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
        }
        a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible {
            outline: 2px solid #2F8F82;
            outline-offset: 2px;
        }
    </style>
    @stack('styles')
</head>
<body class="text-navy antialiased">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
