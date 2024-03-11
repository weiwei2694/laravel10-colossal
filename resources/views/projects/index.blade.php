@extends('layouts.app.app')

@section('content')
    {{-- Section - Header --}}
    @include('projects.partials.header')
    {{-- Section - Projects --}}
    @include('projects.partials.projects')
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const selectedCategory = urlParams.get('category_id');
            const categorySelect = document.getElementById('category');

            if (selectedCategory) {
                const optionExists = Array.from(categorySelect.options).some(option => option.value ===
                    selectedCategory);

                if (optionExists) {
                    categorySelect.value = selectedCategory;
                } else {
                    window.location.href = `/projects?category_id=${categorySelect.options[0].value}`;
                }
            } else {
                window.location.href = `/projects?category_id=${categorySelect.options[0].value}`;
            }

            categorySelect.addEventListener('change', function() {
                window.location.href = `/projects?category_id=${this.value}`;
            });
        });
    </script>
@endsection
