<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Dashboard</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/admin-lte.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/admin-lte.js') }}" defer></script>

        @stack('css')
        @yield('css')
    </head>
    <body class="@yield('classes_body')" @yield('body_data')>
        <div class="wrapper">
            {{-- Top Navbar Here --}}
            <x-adminlte.top-navbar />

            {{-- Left Main Sidebar --}}
            <x-adminlte.left-sidebar />

            <main class="content-wrapper">
                {{-- Content Header --}}
                @isset($contentHeader)
                    <div class="content-header">
                        <div class="container-fluid">
                            {{ $contentHeader }}
                        </div>
                    </div>
                @endisset

                <div class="content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
            </main>

            {{-- Footer --}}
            <x-adminlte.footer />

            {{-- Right Control Sidebar --}}
        </div>

        {{-- Custom Scripts --}}
        @stack('js')
        @yield('js')
    </body>
</html>
