@extends('layouts.app.app')

@section('content')
    {{-- Section - Development --}}
    @include('services.show.partials.development')
    {{-- Section - Development - Content --}}
    @include('services.show.partials.development-content')
    {{-- Section - Features --}}
    @include('services.show.partials.features')
    {{-- Section - Faqs --}}
    @include('services.show.partials.faqs')
@endsection
