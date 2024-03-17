@extends('layouts.app.app')

@section('content')
    {{-- Section - Page --}}
    @include('blogs.show.partials.page')
    {{-- Section - Other Blogs --}}
    @include('blogs.show.partials.other-blogs')
@endsection
