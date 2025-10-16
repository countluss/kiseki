<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        
        @include('helper')

        <style>
            [x-cloak] { display: none !important; }

            /* Svg gradient only for firefox to fix banding */
            @supports (-moz-appearance:none) {
                .firefox-gradient {
                    background-image: url( '{{ asset('storage/images/gradient225.svg') }}' );
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            }

        </style>
        
        
    </head>
    <body class="bg-color1 font-albert h-screen h-dvh! text-color3 scrollable">

        {{-- @persist('navbar')
            <x-navbar/>
        @endpersist --}}

        @php
            $authed = Auth::check(); // Check if user is authenticated, ONCE every request
        @endphp

        <livewire:navbar :authed="$authed"/>

        {{ $slot }}
    
        <script data-navigate-once>

            let navbar = document.getElementById('navbarWrapper');
            let first = document.getElementById('defaultWrapper') ?? document.getElementById('homeWrapper') ?? null;
            let pos;

            if (first != null) {
                pos = first.offsetTop - 63;
            } else {
                pos = 1;
            }

            document.addEventListener('livewire:navigated', () => {
                navbar = document.getElementById('navbarWrapper');
                first = document.getElementById('defaultWrapper') ?? document.getElementById('homeWrapper') ?? null;

                if (first != null) {
                    pos = first.offsetTop - 63;
                } else {
                    pos = 1;
                }
            });

            document.addEventListener("scroll", () => {

                if (window.scrollY >= pos) {
                    navbar.classList.add("shadow-md");
                } else if (window.scrollY <= pos) {
                    navbar.classList.remove("shadow-md");
                }

            });

        </script>

    </body>
</html>
