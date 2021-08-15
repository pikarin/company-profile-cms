<x-theme1-layout bodyClass="overflow-x-hidden" title="Home">
    <header>
        <x-theme1.container el="nav" class="flex items-center py-4 mt-4 sm:mt-12">
            <div class="py-1">
                <img src="{{ asset('/imgs/logo-bookmark.svg') }}" alt="">
            </div>
            <ul class="hidden sm:flex flex-1 items-center justify-end gap-12 text-bookmark-blue uppercase text-xs">
                <li class="cursor-pointer">Features</li>
                <li class="cursor-pointer">Pricing</li>
                <li class="cursor-pointer">Contact</li>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </x-theme1.container>
    </header>

    {{-- Hero --}}
    <section class="relative">
        <x-theme1.container class="flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            {{-- Content --}}
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                    A Simple Bookmark Manager
                </h2>
                <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                    A clean and simple interface to organize your favourite websites. Open a new browser tab and see your site load instantly. Try it for free.
                </p>
                <div class="flex justify-center flex-wrap gap-6">
                    <x-theme1.button class="bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Get it on Chrome
                    </x-theme1.button>
                    <x-theme1.button class="bg-bookmark-white hover:bg-bookmark-purple hover:text-white">
                        Get it on Firefox
                    </x-theme1.button>
                </div>
            </div>

            {{-- Image --}}
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('/imgs/hero-bg.png') }}" alt="">
            </div>
        </x-theme1.container>

        {{-- Rounded Rectangle --}}
        <div class="hidden absolute md:block overflow-hidden bg-bookmark-purple rounded-l-full h-80 w-2/4 top-32 right-0 lg:-bottom-28 lg:-right-36"></div>
    </section>

    {{-- Features --}}
    <section class="bg-bookmark-white py-20 mt-20 lg:mt-60">
        {{-- Heading --}}
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Features</h1>
            <p class="text-center text-bookmark-grey mt-4">
                Our aim is to make it quick and easy for you to access your favourite websites.
                Your bookmarks sync between your devices so you can access them on the go.
            </p>
        </div>

        {{-- Feature #1 --}}
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
            <div class="hidden absolute lg:block overflow-hidden bg-bookmark-purple rounded-r-full h-80 w-1/2 -bottom-24 -left-36"></div>
        </div>

        {{-- Feature #2 --}}
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
            <div class="hidden absolute lg:block overflow-hidden bg-bookmark-purple rounded-l-full h-80 w-1/2 -bottom-24 -right-36"></div>
        </div>

        {{-- Feature #3 --}}
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
            <div class="hidden absolute lg:block overflow-hidden bg-bookmark-purple rounded-r-full h-80 w-1/2 -bottom-24 -left-36"></div>
        </div>
    </section>

    {{-- Download --}}
    <section class="py-20 mt-20">
        {{-- Heading --}}
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Download the extension</h1>
            <p class="text-center text-bookmark-grey mt-4">
                We’ve got more browsers in the pipeline.
                Please do let us know if you’ve got a favourite you’d like us to prioritize.
            </p>
        </div>

        {{-- Cards --}}
        <x-theme1.container class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
            {{-- Card 1 --}}
            <div class="flex flex-col rounded-md shadow-md lg:mb-16">
                <div class="p-6 flex flex-col items-center">
                    <img src="{{ asset('/imgs/logo-chrome.svg') }}" alt="">
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Chrome</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Minimum version 62</p>
                </div>
                <hr class="border-b border-bookmark-white">
                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="flex flex-col rounded-md shadow-md lg:my-8">
                <div class="p-6 flex flex-col items-center">
                    <img src="{{ asset('/imgs/logo-firefox.svg') }}" alt="">
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Firefox</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Minimum version 62</p>
                </div>
                <hr class="border-b border-bookmark-white">
                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="flex flex-col rounded-md shadow-md lg:mt-16">
                <div class="p-6 flex flex-col items-center">
                    <img src="{{ asset('/imgs/logo-opera.svg') }}" alt="">
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Opera</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Minimum version 62</p>
                </div>
                <hr class="border-b border-bookmark-white">
                <div class="flex p-6">
                    <x-theme1.button class="flex-1 bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                        Add & Install Extension
                    </x-theme1.button>
                </div>
            </div>
        </x-theme1.container>
    </section>

    {{-- FAQ --}}
    <section class="bg-bookmark-white py-20">
        <x-theme1.container>
            {{-- Heading --}}
            <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
                <h1 class="text-3xl text-center text-bookmark-blue">Frequently Asked Questions</h1>
                <p class="text-center text-bookmark-grey mt-4">
                    Here are some of our FAQs.
                    If you have any other questions you’d like answered please feel free to email us.
                </p>
            </div>

            {{-- FAQ Items --}}
            <div class="flex flex-col sm:w-3/4 lg:w-5/12 mt-12 mx-auto">
                <div class="flex items-center border-b py-4">
                    <span class="flex-1">What is a Bookmark?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bookmark-purple" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="flex items-center border-b py-4">
                    <span class="flex-1">How can I request a new browser?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bookmark-purple" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="flex items-center border-b py-4">
                    <span class="flex-1">Is there a mobile app?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bookmark-purple" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="flex items-center border-b py-4">
                    <span class="flex-1">What about other Chromium browsers?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bookmark-purple" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <x-theme1.button class="mt-12 flex self-center bg-bookmark-purple text-white hover:bg-bookmark-white hover:text-black">
                    More Info
                </x-theme1.button>
            </div>
        </x-theme1.container>
    </section>

    {{-- Contact Us --}}
    <section class="bg-bookmark-purple text-white py-20">
        <x-theme1.container>
            <div class="sm:w-3/4 lg:w-2/4 mx-auto">
                <p class="font-light uppercase text-center mb-8">35,000+ Already Joined</p>
                <h1 class="text-3xl text-center">Stay up-to-date with what we're doing</h1>
                <div class="flex flex-col sm:flex-row gap-6 mt-8">
                    <input type="text" placeholder="Enter your email address" class="flex-1 px-2 py-3 rounded-md text-black">
                    <x-theme1.button class="flex self-center bg-bookmark-red text-white hover:bg-bookmark-white hover:text-black">
                        Contact Us
                    </x-theme1.button>
                </div>
            </div>
        </x-theme1.container>
    </section>

    {{-- Footer --}}
    <footer class="bg-bookmark-blue py-8">
        <x-theme1.container class="flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                <img src="{{ asset('/imgs/logo-bookmark-white.png') }}" alt="">
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer">Features</li>
                    <li class="cursor-pointer">Pricing</li>
                    <li class="cursor-pointer">Contact</li>
                </ul>
            </div>
            <ul class="flex gap-10 mt-12 md:mt-0">
                <li>
                    <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                </li>
                <li>
                    <svg aria-hidden="true" data-prefix="fab" data-icon="facebook-square" class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 000 80v352a48 48 0 0048 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0048-48V80a48 48 0 00-48-48z"/></svg>
                </li>
            </ul>
        </x-theme1.container>
    </footer>
</x-theme1-layout>
