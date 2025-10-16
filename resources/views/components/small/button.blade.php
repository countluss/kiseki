<button {{ 
    $attributes->merge(['class' => 'bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md']) 
}}>

{{$slot}}

</button>