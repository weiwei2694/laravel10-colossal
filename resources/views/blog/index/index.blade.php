@extends('layouts.app.app')

@section('content')
    {{-- Section - Blog --}}
    @include('blog.index.partials.blog')
    {{-- Section - Blog - Content --}}
    @include('blog.index.partials.blog-content')
@endsection

@section('scripts')
    <script>
        const ENDPOINT = "{{ route('blog.index') }}";
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
