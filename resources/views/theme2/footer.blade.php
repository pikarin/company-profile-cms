<footer {{ $attributes->class(['bg-grey']) }}>
    <x-theme2.container class="pt-5 lg:pt-12 pb-14 space-y-8 lg:space-y-0 lg:flex justify-between">
        <div>
            <img src="{{ asset('/imgs/the-logo.png') }}" alt="Company Logo"
                class="w-40 mx-auto"
            >
        </div>

        <div class="grid grid-cols-2 lg:flex lg:flex-1 gap-6 px-4 lg:px-0 lg:mx-24 lg:justify-around">
            <x-theme2.footer-link-list heading="Company">
                <a href="#">About</a>
                <a href="#">Contact</a>
            </x-theme2.footer-link-list>

            <x-theme2.footer-link-list heading="Social">
                <a href="#">Twitter</a></li>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
            </x-theme2.footer-link-list>

            <x-theme2.footer-link-list heading="Kebijakan">
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Kebijakan Privasi</a>
            </x-theme2.footer-link-list>
        </div>

        <p class="text-center text-gray-400 lg:grid lg:place-content-center">
            {{ now()->format('Y') }} Company
        </p>
    </x-theme2.container>
</footer>
