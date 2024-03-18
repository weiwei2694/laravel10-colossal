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

    <script>
        const ENDPOINT = "{{ route('blogs.show', $post->id) }}";
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
