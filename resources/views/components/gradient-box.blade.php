{{-- Gradient box does not shrink by default (Shrink means increase padding) --}}

<div class="{{ $wClass }} {{ $hClass }} {{ $radiusClass }} {{ $addClass }} border-2 border-color3/30 
bg-linear-to-bl from-grad1/20 to-grad2/20
firefox-gradient
"

{{-- bg-linear-to-bl from-grad1/10 to-grad2/40 --}}

{{-- style="background-image: url( '{{ asset('storage/images/gradient225.svg') }}' );
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center; " --}}

>
    {{ $slot }}
</div>