@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Post</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.posts.update', $post->id) }}" method="POST" class="flex flex-col gap-[20px]"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" name="title" id="title" autofocus value="{{ old('title', $post->title) }}"
                        placeholder="Title" class="@error('title') dashboard-input__error @else dashboard-input @enderror"
                        autofocus>
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Subttile -->
                <div class="flex flex-col">
                    <label for="subtitle" class="font-medium">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" autofocus
                        value="{{ old('subtitle', $post->subtitle) }}" placeholder="Subtitle"
                        class="@error('subtitle') dashboard-input__error @else dashboard-input @enderror">
                    @error('subtitle')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Reading Time -->
                <div class="flex flex-col">
                    <label for="reading_time" class="font-medium">Reading Time</label>
                    <input type="number" name="reading_time" id="reading_time" autofocus
                        value="{{ old('reading_time', $post->reading_time) }}" placeholder="reading_time"
                        class="@error('reading_time') dashboard-input__error @else dashboard-input @enderror">
                    @error('reading_time')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="flex flex-col">
                    <label for="tags" class="font-medium">Tags</label>
                    <input type="text" name="tags" id="tags" autofocus
                        value="{{ old('tags', implode(',', json_decode($post->tags))) }}" placeholder="tags"
                        class="@error('tags') dashboard-input__error @else dashboard-input @enderror">
                    @error('tags')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image" autofocus
                        value="{{ old('image') }}" placeholder="image"
                        class="@error('image') dashboard-input__error @else dashboard-input @enderror">
                    @error('image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    @if ($post->image)
                        <img src="{{ asset('/storage/' . $post->image) }}" id="image-preview"
                            class="w-fit h-fit pt-[10px]">
                    @else
                        <img id="image-preview" class="w-fit h-fit pt-[10px]">
                    @endif
                </div>

                <!-- Body -->
                <div class="flex flex-col">
                    <label for="body-textarea" class="font-medium">Body</label>
                    <div class="my-2">
                        <textarea name="body" id="body-textarea">{{ old('body', $post->body) }}</textarea>
                        @error('body')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Of Body -->

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save
                    Post</button>
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
    </script>
    <script>
        function loadFile(event) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
