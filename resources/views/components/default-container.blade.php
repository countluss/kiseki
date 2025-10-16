{{-- The default container only shrinks on sm and md using sm:px-4 and md:px-6 --}}

<div id="defaultWrapper" class="text-center remHeightPos w-full px-2 sm:px-4 md:px-6
    {{-- Assume pt-2 bcuz of margin --}}
    pb-1.5 sm:pb-3 sm:pt-1 md:pt-2 md:pb-4 lg:pt-2 lg:pb-4
    {{ $addClass }}">

    {{ $slot }}


</div>