<section {{ $attributes->class(['pt-10 mx-auto max-w-screen-2xl bg-[#F6F9FC]']) }}>
    <div class="relative flex flex-col lg:flex-row lg:items-center lg:container mx-auto">
        <div class="text-center lg:text-left py-4 lg:px-8 lg:py-0">
            <h1 class="text-3xl font-semibold text-primary">Company Slogan or Title</h1>
            <p class="px-3 lg:px-0 mt-6 text-lg text-gray-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem!
            </p>
            <button class="mt-6 py-4 px-6 border border-primary rounded-md bg-white text-primary">Call to Action Button</button>
        </div>

        <div>
            <img class="w-full p-4" src="{{ asset('/imgs/undraw_walking_outside.svg') }}" alt="Hero image">
        </div>
    </div>
</section>
