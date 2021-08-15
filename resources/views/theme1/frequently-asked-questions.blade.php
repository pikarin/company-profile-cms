<section class="bg-bookmark-white py-20">
    <x-theme1.container>
        <x-theme1.heading title="Frequently Asked Questions">
            Here are some of our FAQs.
            If you have any other questions you’d like answered please feel free to email us.
        </x-theme1.heading>

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
