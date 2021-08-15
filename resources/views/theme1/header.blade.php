<header>
    <x-theme1.container el="nav" class="flex items-center py-4 mt-4 sm:mt-12">
            <div class="py-1">
                <img src="{{ asset('/imgs/logo-bookmark.svg') }}" alt="Company Logo">
            </div>

            <x-theme1.menu-links wrapper-class="
                hidden
                sm:flex flex-1 items-center justify-end gap-12
                text-bookmark-blue uppercase text-xs
            "/>

            {{-- Burger menu --}}
            <div class="flex sm:hidden flex-1 justify-end">
                <button>
                    <x-icon-menu class="h-6 w-6" />
                </button>
            </div>
        </x-theme1.container>
</header>
