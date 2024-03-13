@extends('layouts.app.app')

@section('content')
    {{-- Section - How We Work --}}
    @include('how-we-work.partials.how-we-work')
    {{-- Section - Step 01 --}}
    @include('how-we-work.partials.step-01')
    {{-- Section - Step 02 --}}
    @include('how-we-work.partials.step-02')
    {{-- Section - Step 03 --}}
    @include('how-we-work.partials.step-03')
@endsection
