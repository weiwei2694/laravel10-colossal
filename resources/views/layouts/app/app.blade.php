<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body class="bg-card-dark">
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

    @yield('scripts')
</body>

</html>
