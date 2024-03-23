@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Project</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="dashboard__label">Title</label>
                    <input type="text" name="title" id="title" value="{{ $project->title }}" class="dashboard__input"
                        disabled>
                </div>

                <!-- Description -->
                <div class="flex flex-col">
                    <label for="description" class="dashboard__label">Description</label>
                    <textarea name="description" id="description" class="dashboard__textarea" rows="8" disabled>{{ $project->description }}</textarea>
                </div>

                <!-- Client -->
                <div class="flex flex-col">
                    <label for="client" class="dashboard__label">Client</label>
                    <input type="text" name="client" id="client" value="{{ $project->client }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Technology -->
                <div class="flex flex-col">
                    <label for="technology" class="dashboard__label">Technology</label>
                    <input type="text" name="technology" id="technology"
                        value="{{ implode(',', json_decode($project->technology)) }}" class="dashboard__input" disabled>
                </div>

                <!-- Is Desktop -->
                <div class="flex flex-col">
                    <label for="is_desktop" class="dashboard__label">Is Desktop</label>
                    <input type="text" name="is_desktop" id="is_desktop"
                        value="{{ $project->is_desktop ? 'Yes' : 'No' }}" class="dashboard__input" disabled>
                </div>

                <!-- Project Category Id -->
                <div class="flex flex-col">
                    <label for="project_category_id" class="dashboard__label">Category</label>
                    <input type="text" name="project_category_id" id="project_category_id"
                        value="{{ $project->projectCategory->name }}" class="dashboard__input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="dashboard__label">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $project->created_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="dashboard__label">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at"
                        value="{{ $project->updated_at->diffForHumans() }}" class="dashboard__input" disabled>
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>

                    <!-- Image Preview -->
                    <div class="my-2">
                        <img src="{{ asset('/storage/' . $project->image) }}" alt="image-preview" id="image-preview"
                            class="w-fit h-fit">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function loadFile(event) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.alt = 'image-preview';
        }
    </script>
@endsection
