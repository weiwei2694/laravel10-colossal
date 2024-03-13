@extends('layouts.app.app')

@section('content')
    {{-- Section - Services --}}
    @include('services.index.partials.services')
    {{-- Section - Ui Design --}}
    @include('services.index.partials.ui-design')
    {{-- Section - Development --}}
    @include('services.index.partials.development')
    {{-- Section - Maintenance --}}
    @include('services.index.partials.maintenance')
@endsection
