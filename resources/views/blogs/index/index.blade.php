@extends('layouts.app.app')

@section('content')
    {{-- Section - Blog --}}
    @include('blogs.index.partials.blog')
    @if (!$blogs->isEmpty())
        {{-- Section - Blog - Content --}}
        @include('blogs.index.partials.blog-content')
    @endif
@endsection

@section('scripts')
    <script>
        const ENDPOINT = "{{ route('blogs.index') }}";
        let page = 1;

        $('#load-more').click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                    url: `${ENDPOINT}?page=${page}`,
                    datatype: "html",
                    type: "get",
                })
                .done(function(response) {
                    if (response.html == '') {
                        $('#load-more').hide();
                        $('#container-load-more').hide();
                    } else {
                        $("#data-wrapper").append(response.html);
                    }
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.error('Server internal error.');
                });
        }
    </script>
@endsection
