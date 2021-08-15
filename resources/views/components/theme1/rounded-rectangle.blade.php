@props(['position' => 'right'])

@php
    $isRight = $position == 'right';
    $isLeft = !$isRight;
@endphp

<div {{ $attributes->class([
        'rounded-l-full right-0' => $isRight,
        'rounded-r-full left-0' => $isLeft,
    ])
    ->merge(['class' => 'hidden absolute md:block overflow-hidden bg-bookmark-purple h-80 w-2/4'])
}}></div>
