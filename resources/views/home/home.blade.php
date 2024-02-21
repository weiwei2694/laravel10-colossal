@extends('layouts.app.app')

@section('styles')
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
@endsection

@section('content')
    {{-- Section - Typography --}}
    @include('home.partials.typography')
    {{-- Section - Features --}}
    @include('home.partials.features')
    {{-- Section - Sponsors --}}
    @include('home.partials.sponsors')
    {{-- Section - How We Work --}}
    @include('home.partials.how-we-work')
    {{-- Section - Our Team --}}
    @include('home.partials.our-team')
    {{-- Section - Projects --}}
    @include('home.partials.projects')
    {{-- Section - Get Started --}}
    @include('home.partials.get-started')
    {{-- Section - Testimonials --}}
    @include('home.partials.testimonials')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
