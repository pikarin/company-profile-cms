@props(['imgSrc'])

<div {{ $attributes->merge(['class' => 'flex flex-col rounded-md shadow-md']) }}>
    <div class="p-6 flex flex-col items-center">
        <img src="{{ $imgSrc }}" alt="">
        <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">{{ $title }}</h3>
        <p class="mb-2 text-bookmark-grey font-light">{{ $description }}</p>
    </div>
    <hr class="border-b border-bookmark-white">
    <div class="flex p-6">
        <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
            Add & Install Extension
        </x-theme1.button>
    </div>
</div>
