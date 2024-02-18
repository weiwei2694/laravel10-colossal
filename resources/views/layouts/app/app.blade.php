<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-card-dark">
    {{-- Main --}}
    <main class="relative w-[1025px] mx-auto py-[50px]">
        {{-- Highlights --}}
        @include('layouts.app.partials.highlights')

        {{-- Nav --}}
        @include('layouts.app.partials.nav')

        {{-- Content --}}
        <div class="relative z-10">
            @yield('content')
        </div>

        {{-- Send Quote Cta --}}
        @include('layouts.app.partials.sendquotecta')
        {{-- Footer --}}
        @include('layouts.app.partials.footer')
    </main>
</body>

</html>
