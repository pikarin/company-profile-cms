@props(['heading'])

<div {{ $attributes }}>
    <h5 class="uppercase text-gray-500 font-bold">{{ $heading }}</h5>
    <div class="mt-4 flex flex-col gap-2 text-gray-500">
        {{ $slot }}
    </div>
</div>
