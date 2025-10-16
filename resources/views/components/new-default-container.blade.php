<div {{ $attributes->merge(['class' => 'text-center remHeight w-full px-2 sm:px-4 md:px-6
    {{-- Using remHeight here unlike old-default-container which uses remHeightPos --}}
    {{-- Assume pt-2 bcuz of margin --}}
    pb-1.5 sm:pb-3 sm:pt-1 md:pt-2 md:pb-4 lg:pt-2 lg:pb-4']) }}>
    
    {{ $slot }}
</div>