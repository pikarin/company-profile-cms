<footer class="bg-bookmark-blue py-8">
    <x-theme1.container class="flex flex-col md:flex-row items-center">
        <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
            <img src="{{ asset('/imgs/logo-bookmark-white.png') }}" alt="Company Logo">

            <x-theme1.menu-links wrapper-class="flex text-white uppercase gap-12 text-xs" />
        </div>
        <ul class="flex gap-10 mt-12 md:mt-0">
            <li>
                <x-icon-twitter class="text-white w-6 h-6" />
            </li>
            <li>
                <x-icon-facebook class="text-white w-6 h-6" />
            </li>
        </ul>
    </x-theme1.container>
</footer>
