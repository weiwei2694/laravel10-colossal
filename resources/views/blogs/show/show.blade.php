@extends('layouts.app.app')

@section('content')
    {{-- Section - Page --}}
    @include('blogs.show.partials.page')
    {{-- Section - Other Blogs --}}
    @include('blogs.show.partials.other-blogs')
    {{-- Section - Responses --}}
    @include('blogs.show.partials.responses')
@endsection

@section('scripts')
    @if (session('success'))
        <script>
            const successMessage = {!! json_encode(session('success')) !!};
            Swal.fire({
                title: successMessage,
                icon: "success"
            });
        </script>
    @endif
@endsection
