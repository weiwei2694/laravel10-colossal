@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Post</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">
                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" name="title" id="title" autofocus value="{{ old('title', $post->title) }}"
                        placeholder="Title" class="@error('title') dashboard-input__error @else dashboard-input @enderror"
                        autofocus disabled>
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Subtitle -->
                <div class="flex flex-col">
                    <label for="subtitle" class="font-medium">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" autofocus
                        value="{{ old('subtitle', $post->subtitle) }}" placeholder="Subtitle"
                        class="@error('subtitle') dashboard-input__error @else dashboard-input @enderror" disabled>
                    @error('subtitle')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Reading Time -->
                <div class="flex flex-col">
                    <label for="reading_time" class="font-medium">Reading Time</label>
                    <input type="number" name="reading_time" id="reading_time" autofocus
                        value="{{ old('reading_time', $post->reading_time) }}" placeholder="reading_time"
                        class="@error('reading_time') dashboard-input__error @else dashboard-input @enderror" disabled>
                    @error('reading_time')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="flex flex-col">
                    <label for="tags" class="font-medium">Tags</label>
                    <input type="text" name="tags" id="tags" autofocus
                        value="{{ old('tags', implode(',', json_decode($post->tags))) }}" placeholder="tags"
                        class="@error('tags') dashboard-input__error @else dashboard-input @enderror" disabled>
                    @error('tags')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="font-medium">Created At</label>
                    <input type="text" name="created_at" id="created_at" autofocus
                        value="{{ old('created_at', $post->created_at) }}" placeholder="created_at"
                        class="@error('created_at') dashboard-input__error @else dashboard-input @enderror" disabled>
                    @error('created_at')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="font-medium">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at" autofocus
                        value="{{ old('updated_at', $post->updated_at) }}" placeholder="updated_at"
                        class="@error('updated_at') dashboard-input__error @else dashboard-input @enderror" disabled>
                    @error('updated_at')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>

                    <!-- Image Preview -->
                    @if ($post->image)
                        <img src="{{ asset('/storage/' . $post->image) }}" id="image-preview" class="w-fit h-fit my-2">
                    @endif
                </div>

                <!-- Body -->
                <div class="flex flex-col">
                    <label for="body-textarea" class="font-medium">Body</label>
                    <div class="my-2">
                        {!! $post->body !!}
                    </div>
                </div>
                <!-- End Of Body -->
            </div>
        </div>
    </section>
@endsection
