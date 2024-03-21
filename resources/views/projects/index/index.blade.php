@extends('layouts.app.app')

@section('content')
    {{-- Section - Header --}}
    @include('projects.index.partials.header')
    @if (!$projects->isEmpty())
        {{-- Section - Projects --}}
        @include('projects.index.partials.projects')
    @endif
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const selectedCategory = urlParams.get('category_id');
            const categorySelect = $('#category');

            if (selectedCategory) {
                const optionExists = Array.from(categorySelect[0].options).some(option => option.value ===
                    selectedCategory);

                if (optionExists) {
                    categorySelect.val(selectedCategory);
                } else {
                    window.location.href = `/projects?category_id=${categorySelect[0].options[0].value}`;
                }
            } else {
                window.location.href = `/projects?category_id=${categorySelect[0].options[0].value}`;
            }

            categorySelect.change(function() {
                window.location.href = `/projects?category_id=${this.value}`;
            });

            const ENDPOINT = "{{ route('projects.index') }}";
            let page = 1;

            $('#load-more').click(function() {
                page++;
                LoadMore(page);
            });

            function LoadMore(page) {
                $.ajax({
                        url: `${ENDPOINT}?page=${page}&category_id=${selectedCategory}`,
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
        });
    </script>
@endsection
