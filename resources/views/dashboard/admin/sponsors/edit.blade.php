@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Sponsor</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.sponsors.update', $sponsor->id) }}" method="POST"
                class="flex flex-col gap-[20px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name', $sponsor->name) }}"
                        class="dashboard__input @error('name') dashboard__input-error @enderror" required>
                    @error('name')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}" class="placeholder="image"
                        @error('image') dashboard__input-error @enderror">
                    @error('image')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img src="{{ asset('/storage/' . $sponsor->image) }}" alt="image-preview" id="image-preview"
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
        }
    </script>
@endsection
