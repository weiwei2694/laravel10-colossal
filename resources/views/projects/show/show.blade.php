@extends('layouts.app.app')

@section('content')
    {{-- Section - Header --}}
    @include('projects.show.partials.header')
    {{-- Section - Detail Project --}}
    @include('projects.show.partials.detail-project')
@endsection
