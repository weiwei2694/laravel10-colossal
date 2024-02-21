<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')
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

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
