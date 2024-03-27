<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>{{ isset($headTitle) ? $headTitle : env('APP_NAME') }}</title>

    <!-- Styles -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
        rel="stylesheet"
    >
    @vite('resources/css/app.css')
    <link
        href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    "
        rel="stylesheet"
    >
    @yield('styles')
</head>

<body class="bg-card-dark overflow-x-hidden">
    {{-- Main --}}
    <main class="py-[50px]">
        {{-- Highlights --}}
        @include('layouts.app.partials.highlights')

        {{-- Nav --}}
        @include('layouts.app.partials.nav')

        {{-- Content --}}
        @yield('content')

        {{-- Send Quote Cta --}}
        @include('layouts.app.partials.sendquotecta')
        {{-- Footer --}}
        @include('layouts.app.partials.footer')
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    @yield('scripts')
</body>

</html>
