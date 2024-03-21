@extends('layouts.app.app')

@section('content')
    {{-- Section - About --}}
    @include('about.partials.about')
    {{-- Section - Statistics --}}
    @include('about.partials.statistics')
    @if (!$sponsors->isEmpty())
        {{-- Section - Sponsors --}}
        @include('home.partials.sponsors')
    @endif
    @if (!$ourTeams->isEmpty())
        {{-- Section - Our Team --}}
        @include('about.partials.our-team')
    @endif
@endsection
