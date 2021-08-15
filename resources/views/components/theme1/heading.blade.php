@props(['title'])

<div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
    <h2 class="text-3xl text-center text-bookmark-blue">{{ $title }}</h2>

    @isset($slot)
        <p class="text-center text-bookmark-grey mt-4">
            {{ $slot }}
        </p>
    @endisset
</div>
