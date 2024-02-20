@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Project</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST"
                class="flex flex-col gap-[20px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" name="title" id="title" autofocus
                        value="{{ old('title', $project->title) }}" placeholder="Title"
                        class="@error('title') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="flex flex-col">
                    <label for="description" class="font-medium">Description</label>
                    <textarea name="description" id="description" placeholder="Description"
                        class="@error('description') dashboard-input__error @else dashboard-input @enderror" required rows="8">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Client -->
                <div class="flex flex-col">
                    <label for="client" class="font-medium">Client</label>
                    <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}"
                        placeholder="Client" class="@error('client') dashboard-input__error @else dashboard-input @enderror"
                        required>
                    @error('client')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Technology -->
                <div class="flex flex-col">
                    <label for="technology" class="font-medium">Technology</label>
                    <input type="text" name="technology" id="technology"
                        value="{{ old('technology', implode(',', json_decode($project->technology))) }}"
                        placeholder="Technology"
                        class="@error('technology') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('technology')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Is Desktop -->
                <div class="flex flex-col">
                    <label for="is_desktop" class="font-medium">Is Desktop</label>
                    <select name="is_desktop" id="is_desktop"
                        class="@error('is_desktop') dashboard-input__error @else dashboard-input @enderror" required>
                        <option value="1" @if ($project->is_desktop) selected @endif>Yes</option>
                        <option value="0" @if (!$project->is_desktop) selected @endif>No</option>
                    </select>

                    @error('is_desktop')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Project Category Id -->
                <div class="flex flex-col">
                    <label for="project_category_id" class="font-medium">Choose Category</label>
                    <select name="project_category_id" id="project_category_id"
                        class="@error('project_category_id') dashboard-input__error @else dashboard-input @enderror"
                        required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id === $project->project_category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('project_category_id')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}" placeholder="image"
                        class="@error('image') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img src="{{ asset('/storage/' . $project->image) }}" alt="image-preview" id="image-preview"
                        class="w-fit h-fit">
                </div>

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save</button>
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
