<div {{ $attributes->merge(['class' => 'relative w-[90%] mx-auto']) }}>

    {{-- <input placeholder="Search" {{ $inputAttributes->merge(['class' => 'py-2 px-5 border-1 border-color3/30 bg-color1 rounded-2xl w-[90%] mx-auto border-2']) }}/> --}}
    <input type="text" placeholder="Search" class="{{ $inputClass }} py-2 px-5 border-2 border-color3/30 shadow-xs focus:outline-none focus:border-color3/50 bg-color1 rounded-2xl w-full">
    <i class="bi bi-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>

</div>