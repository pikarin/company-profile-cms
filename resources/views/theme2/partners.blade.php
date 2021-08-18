<section {{ $attributes->merge(['class' => 'bg-grey -mx-4 px-4 py-6']) }}>
    <h2 class="text-xl font-semibold text-center uppercase">Our Partners</h2>
    <div class="grid grid-cols-3 gap-2 mt-4">
        @foreach(range(1, 6) as $index)
        <div><img class="w-full" src="{{ asset("imgs/partner$index.svg") }}" alt="Partner"></div>
        @endforeach
    </div>
</section>
