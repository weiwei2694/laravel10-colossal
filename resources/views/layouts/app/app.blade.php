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
    <main class="relative w-[1025px] mx-auto">
        {{-- Highlights --}}
        @include('layouts.app.partials.highlights')
        {{-- Nav --}}
        @include('layouts.app.partials.nav')

        @yield('content')
    </main>
</body>

</html>
