<div {{ $attributes->merge(['class' => 'p-2 text-center border-2 border-color3/30 bg-color3/5 rounded-2xl w-[90%] mx-auto']) }}>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    {{-- <p>{{$slot}}</p> --}}

    {{ $slot }}


</div>