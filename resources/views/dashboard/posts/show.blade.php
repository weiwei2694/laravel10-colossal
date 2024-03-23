@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Post</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="dashboard__label">Title</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" class="dashboard__input"
                        disabled>
                </div>

                <!-- Subtitle -->
                <div class="flex flex-col">
                    <label for="subtitle" class="dashboard__label">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ $post->subtitle }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Reading Time -->
                <div class="flex flex-col">
                    <label for="reading_time" class="dashboard__label">Reading Time</label>
                    <input type="text" name="reading_time" id="reading_time" value="{{ $post->reading_time }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Tags -->
                <div class="flex flex-col">
                    <label for="tags" class="dashboard__label">Tags</label>
                    <input type="text" name="tags" id="tags" value="{{ implode(',', json_decode($post->tags)) }}"
                        placeholder="tags" class="dashboard__input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="dashboard__label">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $post->created_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="dashboard__label">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at" value="{{ $post->updated_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>

                    <!-- Image Preview -->
                    @if ($post->image)
                        <img src="{{ asset('/storage/' . $post->image) }}" id="image-preview"
                            class="dashboard__image-preview">
                    @endif
                </div>

                <!-- Body -->
                <div class="flex flex-col">
                    <label for="body-textarea" class="dashboard__label">Body</label>
                    <div class="my-2">
                        {!! $post->body !!}
                    </div>
                </div>
                <!-- End Of Body -->
            </div>
        </div>
    </section>
@endsection
