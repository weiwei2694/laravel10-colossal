@extends('layouts.app.app')

@section('content')
    {{-- Section - Typography --}}
    @include('home.partials.typography')
    {{-- Section - Features --}}
    @include('home.partials.features')
    {{-- Section - Sponsors --}}
    @include('home.partials.sponsors')
@endsection
