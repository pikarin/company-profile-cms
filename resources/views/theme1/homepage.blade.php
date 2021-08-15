<x-theme1-layout body-class="overflow-x-hidden" title="Home">
    <x-theme1.header />

    <x-theme1.hero />

    <x-theme1.highlights />

    {{-- Download --}}
    <section class="py-20 mt-20">
        <x-theme1.heading title="Download the extension">
            We’ve got more browsers in the pipeline.
            Please do let us know if you’ve got a favourite you’d like us to prioritize.
        </x-theme1.heading>

        {{-- Cards --}}
        <x-theme1.container class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
            {{-- Card 1 --}}
            <x-theme1.card class="lg:mb-16" img-src="{{ asset('/imgs/logo-chrome.svg') }}">
                <x-slot name="title">Add to Chrome</x-slot>
                <x-slot name="description">Minimum version 62</x-slot>

                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </x-theme1.card>

            {{-- Card 2 --}}
            <x-theme1.card class="lg:my-8" img-src="{{ asset('/imgs/logo-firefox.svg') }}">
                <x-slot name="title">Add to Firefox</x-slot>
                <x-slot name="description">Minimum version 62</x-slot>

                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </x-theme1.card>

            {{-- Card 3 --}}
            <x-theme1.card class="lg:mt-16" img-src="{{ asset('/imgs/logo-opera.svg') }}">
                <x-slot name="title">Add to Opera</x-slot>
                <x-slot name="description">Minimum version 62</x-slot>

                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </x-theme1.card>
        </x-theme1.container>
    </section>

    <x-theme1.frequently-asked-questions />

    <x-theme1.contact-us />

    <x-theme1.footer />
</x-theme1-layout>
