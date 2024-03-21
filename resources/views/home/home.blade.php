@extends('layouts.app.app')

@section('content')
    {{-- Section - Typography --}}
    @include('home.partials.typography')
    {{-- Section - Features --}}
    @include('home.partials.features')
    @if (!$sponsors->isEmpty())
        {{-- Section - Sponsors --}}
        @include('home.partials.sponsors')
    @endif
    {{-- Section - How We Work --}}
    @include('home.partials.how-we-work')
    {{-- Section - Our Team --}}
    @include('home.partials.our-team')
    @if (!$projects->isEmpty())
        {{-- Section - Projects --}}
        @include('home.partials.projects')
    @endif
    {{-- Section - Get Started --}}
    @include('home.partials.get-started')
    {{-- Section - Testimonials --}}
    @if (!$testimonials->isEmpty())
        @include('home.partials.testimonials')
    @endif
@endsection
