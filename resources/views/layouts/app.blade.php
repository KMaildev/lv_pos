<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HUD | Dashboard</title>

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @livewireStyles
</head>

<body style="background-color: #a2c6eb !important">

    <div id="app" class="app">
        @include('layouts.shared.top')

        @php
            $department_id = auth()->user()->department_id ?? 0;
        @endphp
        @if ($department_id == 1)
            @include('layouts.shared.menu')
        @else
            @include('layouts.shared.waiter_menu')
        @endif

        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled">
        </button>

        <div id="content" class="app-content">
            {{ $slot }}

        </div>
    </div>

    @livewireScripts
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>


    <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.min.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-content/world-mill.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/pos-menu-stock.demo.html') }}" type="d1c37820e0c12094c32f624e-text/javascript"></script>

    {{-- <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/dashboard.demo.js') }}" type="ceb4422f9821046177ad8e21-text/javascript"></script> --}}

    <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="ceb4422f9821046177ad8e21-|49" defer="">
    </script>

    <script>
        function closeDesktopNav() {
            var element = document.getElementById("app");
            element.classList.toggle("app-sidebar-collapsed");
        }

        function closeMobileNav() {
            var element = document.getElementById("app");
            element.classList.toggle("app-sidebar-mobile-toggled");
        }
    </script>

</body>

</html>
