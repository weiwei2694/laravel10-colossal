@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Project</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">
                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" name="title" id="title" value="{{ $project->title }}" class="dashboard-input"
                        disabled>
                </div>

                <!-- Description -->
                <div class="flex flex-col">
                    <label for="description" class="font-medium">Description</label>
                    <textarea name="description" id="description" class="dashboard-input" rows="8" disabled>{{ $project->description }}</textarea>
                </div>

                <!-- Client -->
                <div class="flex flex-col">
                    <label for="client" class="font-medium">Client</label>
                    <input type="text" name="client" id="client" value="{{ $project->client }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Technology -->
                <div class="flex flex-col">
                    <label for="technology" class="font-medium">Technology</label>
                    <input type="text" name="technology" id="technology"
                        value="{{ implode(',', json_decode($project->technology)) }}" class="dashboard-input" disabled>
                </div>

                <!-- Is Desktop -->
                <div class="flex flex-col">
                    <label for="is_desktop" class="font-medium">Is Desktop</label>
                    <input type="text" name="is_desktop" id="is_desktop"
                        value="{{ $project->is_desktop ? 'Yes' : 'No' }}" class="dashboard-input" disabled>
                </div>

                <!-- Project Category Id -->
                <div class="flex flex-col">
                    <label for="project_category_id" class="font-medium">Category</label>
                    <input type="text" name="project_category_id" id="project_category_id"
                        value="{{ $project->projectCategory->name }}" class="dashboard-input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="font-medium">Category</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $project->created_at }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="font-medium">Category</label>
                    <input type="text" name="updated_at" id="updated_at"
                        value="{{ $project->updated_at->diffForHumans() }}" class="dashboard-input" disabled>
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>

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
