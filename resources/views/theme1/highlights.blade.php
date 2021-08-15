<section class="bg-bookmark-white py-20 mt-20 lg:mt-60">
    <x-theme1.heading title="Features">
        Our aim is to make it quick and easy for you to access your favourite websites.
        Your bookmarks sync between your devices so you can access them on the go.
    </x-theme1.heading>

    {{-- Highlight #1 --}}
    <div class="relative mt-20 lg:mt-24">
        <x-theme1.container class="flex flex-col lg:flex-row items-center justify-center gap-x-24">
            <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('/imgs/illustration-features-tab-1.png') }}" alt="">
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h1 class="text-3xl text-bookmark-blue">Bookmark in one click</h1>
                <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Organize your bookmarks however you like.
                    Our simple drag-and-drop interface gives you complete control over how you manage your favourite sites.
                </p>
                <x-theme1.button class="bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                    More Info
                </x-theme1.button>
            </div>
        </x-theme1.container>

        <x-theme1.rounded-rectangle position="left" class="-bottom-24 -left-36" />
    </div>

    {{-- Highlight #2 --}}
    <div class="relative mt-20 lg:mt-52">
        <x-theme1.container class="flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
            <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('/imgs/illustration-features-tab-2.png') }}" alt="">
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h1 class="text-3xl text-bookmark-blue">Intelligent search</h1>
                <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Our powerful search feature will help you find saved sites in no time at all. No need to crawl through all of your bookmarks.
                </p>
                <x-theme1.button class="bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                    More Info
                </x-theme1.button>
            </div>
        </x-theme1.container>

        <x-theme1.rounded-rectangle position="right" class="-bottom-24 -right-36" />
    </div>

    {{-- Highlight #3 --}}
    <div class="relative mt-20 lg:mt-52">
        <x-theme1.container class="flex flex-col lg:flex-row items-center justify-center gap-x-24">
            <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('/imgs/illustration-features-tab-3.png') }}" alt="">
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h1 class="text-3xl text-bookmark-blue">Share your bookmarks</h1>
                <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Easily share your bookmarks and collections with others.
                    Create a shareable link that you can send at the click of a button.
                </p>
                <x-theme1.button class="bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                    More Info
                </x-theme1.button>
            </div>
        </x-theme1.container>

        <x-theme1.rounded-rectangle position="left" class="-bottom-24 -left-36" />
    </div>
</section>
