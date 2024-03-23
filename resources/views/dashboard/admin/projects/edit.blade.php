@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Project</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="dashboard__label">Title</label>
                    <input type="text" name="title" id="title" autofocus
                        value="{{ old('title', $project->title) }}"
                        class="dashboard__input @error('title') dashboard__input-error @enderror" required>
                    @error('title')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="flex flex-col">
                    <label for="description" class="dashboard__label">Description</label>
                    <textarea name="description" id="description"
                        class="dashboard__textarea @error('description') dashboard__input-error @enderror" required rows="8">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Client -->
                <div class="flex flex-col">
                    <label for="client" class="dashboard__label">Client</label>
                    <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}"
                        class="dashboard__input @error('client') dashboard__input-error @enderror" required>
                    @error('client')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Technology -->
                <div class="flex flex-col">
                    <label for="technology" class="dashboard__label">Technology</label>
                    <input type="text" name="technology" id="technology"
                        value="{{ old('technology', implode(',', json_decode($project->technology))) }}"
                        class="dashboard__input @error('technology') dashboard__input-error @enderror" required>
                    @error('technology')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Is Desktop -->
                <div class="flex flex-col">
                    <label for="is_desktop" class="dashboard__label">Is Desktop</label>
                    <select name="is_desktop" id="is_desktop"
                        class="dashboard__input @error('is_desktop') dashboard__input-error @enderror" required>
                        <option value="1" @if ($project->is_desktop) selected @endif>Yes</option>
                        <option value="0" @if (!$project->is_desktop) selected @endif>No</option>
                    </select>

                    @error('is_desktop')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Project Category Id -->
                <div class="flex flex-col">
                    <label for="project_category_id" class="dashboard__label">Choose Category</label>
                    <select name="project_category_id" id="project_category_id"
                        class="dashboard__input @error('project_category_id') dashboard__input-error @enderror" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id === $project->project_category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('project_category_id')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}" class="@error('image') dashboard__input-error @enderror">
                    @error('image')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img src="{{ asset('/storage/' . $project->image) }}" alt="image-preview" id="image-preview"
                        class="dashboard__image-preview">
                </div>

                <!-- Submit -->
                <button class="dashboard__primary-btn">Save</button>
                <!-- End Of Submit -->
            </form>
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
