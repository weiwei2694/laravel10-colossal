@extends('layouts.app.app')

@section('content')
    {{-- Section - Pricing --}}
    @include('pricing.partials.pricing')
    {{-- Section - Pricing Content --}}
    @include('pricing.partials.pricing-content')
@endsection
