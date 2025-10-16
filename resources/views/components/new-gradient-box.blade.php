<div {{ $attributes->merge(['class' => 'border-2 border-color3/30 rounded-(--gradientBoxRadius)
bg-linear-to-bl from-grad1/20 to-grad2/20
firefox-gradient']) }}>
    {{ $slot }}
</div>