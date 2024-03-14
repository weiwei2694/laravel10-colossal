@extends('layouts.app.app')

@section('content')
    {{-- Section - About --}}
    @include('about.partials.about')
    {{-- Section - Statistics --}}
    @include('about.partials.statistics')
    {{-- Section - Sponsors --}}
    @include('home.partials.sponsors')
    {{-- Section - Our Team --}}
    @include('about.partials.our-team')
@endsection
