<header x-data="{ open: false }" {{ $attributes->merge(['class' => 'bg-white shadow-lg']) }}>
    <div class="container mx-auto px-4 lg:px-0 py-4 relative">
        <div class="grid grid-cols-3 gap-x-2 justify-items-center lg:flex lg:items-center lg:justify-between">
            <a href="{{ url('/') }}" class="col-start-2 lg:col-start-1 inline-block max-w-[180px]">
                <img src="{{ asset('/imgs/the-logo.png') }}" alt="Company Logo"
                    class="max-w-full"
                >
            </a>

            <x-theme2.menu-links
                class="hidden lg:flex gap-4"
                item-class="tracking-wide"
            />

            <button type="button" class="ml-auto lg:hidden" x-on:click="open = !open">
                <x-icon-menu class="w-8 h-8" />
            </button>
        </div>

        <nav class="block lg:hidden relative overflow-hidden transition-all max-h-0 duration-300"
            x-ref="nav"
            style=""
            x-bind:style="open ? `max-height:${$refs.nav.scrollHeight}px` : ''"
        >
            <x-theme2.menu-links item-class="block px-4 py-3 tracking-wide" />
            <div class="flex gap-x-8 px-4 pt-3">
                <a href="#"><x-icon-facebook class="w-8 h-8 text-gray-700" /></a>
                <a href="#"><x-icon-twitter class="w-8 h-8 text-gray-700" /></a>
            </div>
        </nav>
    </div>
</header>
