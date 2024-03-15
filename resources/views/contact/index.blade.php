@extends('layouts.app.app')

@section('content')
    {{-- Section - Contact --}}
    @include('contact.partials.contact')
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
