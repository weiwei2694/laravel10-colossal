@extends('layouts.app.app')

@section('content')
    {{-- Section - About --}}
    @include('about.partials.about')
    {{-- Section - Statistics --}}
    @include('about.partials.statistics')
@endsection
