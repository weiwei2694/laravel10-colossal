@extends('layouts.app.app')

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
@endsection
