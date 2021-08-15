@props(['el' => 'div'])

<{{ $el }} {{ $attributes->merge(['class' => 'container mx-auto px-4 max-w-[1124px]']) }}>
    {{ $slot }}
</{{ $el }}>
