<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body class="text-gray-800 font-inter">
    @include('layouts.dashboard.partials.sidebar')

    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.dashboard.partials.header')
        @include('layouts.dashboard.partials.content')
    </main>
    <!-- end: Main -->

    <!-- Script -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
