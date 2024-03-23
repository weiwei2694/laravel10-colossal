@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">New Post</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.posts.store') }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="dashboard__label">Title</label>
                    <input type="text" name="title" id="title" autofocus value="{{ old('title') }}"
                        class="dashboard__input @error('title') dashboard__input-error @enderror" required>
                    @error('title')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Subttile -->
                <div class="flex flex-col">
                    <label for="subtitle" class="dashboard__label">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}"
                        class="dashboard__input @error('subtitle') dashboard__input-error @enderror" required>
                    @error('subtitle')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Reading Time -->
                <div class="flex flex-col">
                    <label for="reading_time" class="dashboard__label">Reading Time</label>
                    <input type="number" name="reading_time" id="reading_time" value="{{ old('reading_time') }}"
                        class="dashboard__input @error('reading_time') dashboard__input-error @enderror" required>
                    @error('reading_time')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="flex flex-col">
                    <label for="tags" class="dashboard__label">Tags</label>
                    <input type="text" name="tags" id="tags" value="{{ old('tags') }}"
                        class="dashboard__input @error('tags') dashboard__input-error @enderror" required>
                    @error('tags')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}"
                        class="dashboard__input @error('image') dashboard__input-error @enderror" required>
                    @error('image')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img id="image-preview" class="dashboard__image-preview">
                </div>

                <!-- Body -->
                <div class="flex flex-col">
                    <label for="body-textarea" class="dashboard__label">Body</label>
                    <div class="my-2">
                        <textarea name="body" id="body-textarea">{{ old('body') }}</textarea>
                        @error('body')
                            <span class="dashboard__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Of Body -->

                <!-- Submit -->
                <button class="dashboard__primary-btn">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body-textarea'))
            .catch(error => {
                console.error(error);
            });

        function loadFile(event) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
