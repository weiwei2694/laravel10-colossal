@extends('layouts.app.app')

@section('content')
    {{-- Section - Services --}}
    @include('services.partials.services')
    {{-- Section - Ui Design --}}
    @include('services.partials.ui-design')
    {{-- Section - Development --}}
    @include('services.partials.development')
    {{-- Section - Maintenance --}}
    @include('services.partials.maintenance')
@endsection
