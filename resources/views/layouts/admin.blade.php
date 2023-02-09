<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="_token" content="{{ csrf_token() }}"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/png">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    @yield('choicecss')
    @stack('mapboxScripts')
    <!-- Styles -->
    @livewireStyles
    <style>

            /* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
            [x-cloak] { display: none !important; }

    </style>

</head>

<body>
    @yield('mapbox-gl-geocoder')

    <div id="app">
        <div id="main" class="layout-horizontal">
            <livewire:admin.header />
            {{ $slot }}
            <livewire:admin.footer />
        </div>
    </div>


    @livewireScripts
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/pages/horizontal-layout.js')}}"></script>

    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- @yield('choicejs') --}}
    @stack('scripts')

</body>

</html>
