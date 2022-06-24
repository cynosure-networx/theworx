<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('theworx.website-name', 'theWORX') }} - @yield('page-title')</title>

    <!-- Fonts -->
    @yield('page-fonts')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    @yield('page-styles')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('header-scripts')

</head>

<body>
    <div class="">

        @include('layouts.includes.nav-bar')

        <!-- Page Heading -->
        @if (isset($header))
            <header>
                <div>
                    @yield('page-header')
                </div>
            </header>
        @endif


        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>

        @include('layouts.includes.footer')

    </div>

    @stack('modals')

    @livewireScripts
    @stack('body-scripts')
</body>

</html>
