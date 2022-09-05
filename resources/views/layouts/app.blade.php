<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS</title>
    <link rel="stylesheet" href="{{ asset('assets/main/css/vendors_css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/skin_color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        @include('layouts.shared.top')
        @php
            $department_id = auth()->user()->department_id ?? 0;
        @endphp
        @if ($department_id == 1)
            @include('layouts.shared.menu')
        @else
            @include('layouts.shared.waiter_menu')
        @endif

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                {{ $slot }}
                <!-- Main content -->
            </div>
        </div>
    </div>

    @livewireScripts
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>

    {{-- <script src="{{ asset('assets/main/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/assets/cdn.amcharts.com/lib/4/core.js') }}"></script>
    <script src="{{ asset('assets/assets/cdn.amcharts.com/lib/4/maps.js') }}"></script>
    <script src="{{ asset('assets/assets/cdn.amcharts.com/lib/4/geodata/worldLow.js') }}"></script>
    <script src="{{ asset('assets/assets/cdn.amcharts.com/lib/4/themes/kelly.js') }}"></script>
    <script src="{{ asset('assets/assets/cdn.amcharts.com/lib/4/themes/animated.js') }}"></script> --}}
    <!-- Riday Admin App -->
    <script src="{{ asset('assets/main/js/template.js') }}"></script>
    {{-- <script src="{{ asset('assets/main/js/pages/dashboard.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>
