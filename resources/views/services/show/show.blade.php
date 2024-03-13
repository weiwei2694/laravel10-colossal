@extends('layouts.app.app')

@section('content')
    {{-- Section - Development --}}
    @include('services.show.partials.development')
    {{-- Section - Development - Content --}}
    @include('services.show.partials.development-content')
@endsection
