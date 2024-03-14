@extends('layouts.app.app')

@section('content')
    {{-- Section - Faq --}}
    @include('faq.partials.faq')
    @if (!empty($categories->toArray()))
        {{-- Section - Faq Content --}}
        @include('faq.partials.faq-content')
    @endif
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.accordion-header').click(function() {
                $(this).toggleClass('active');
                $(this).next('.accordion-content').slideToggle();
            });
        });
    </script>
@endsection
