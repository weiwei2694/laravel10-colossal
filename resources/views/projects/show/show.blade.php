@extends('layouts.app.app')

@section('content')
    {{-- Section - Header --}}
    @include('projects.show.partials.header')
    {{-- Section - Detail Project --}}
    @include('projects.show.partials.detail-project')

    @if (!empty($projects->toArray()))
        {{-- Section - Other Projects --}}
        @include('projects.show.partials.other-projects')
    @endif
@endsection
