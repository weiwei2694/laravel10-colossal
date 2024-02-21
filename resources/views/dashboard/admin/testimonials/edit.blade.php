@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Testimonial</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.testimonials.update', $testimonial->id) }}" method="POST"
                class="flex flex-col gap-[20px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" autofocus
                        value="{{ old('name', $testimonial->name) }}" placeholder="name"
                        class="@error('name') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Company Name -->
                <div class="flex flex-col">
                    <label for="company_name" class="font-medium">Company Name</label>
                    <input type="text" name="company_name" id="company_name"
                        value="{{ old('company_name', $testimonial->company_name) }}" placeholder="company_name"
                        class="@error('company_name') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('company_name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Content -->
                <div class="flex flex-col">
                    <label for="content" class="font-medium">Content</label>
                    <textarea name="content" id="content" placeholder="content"
                        class="@error('content') dashboard-input__error @else dashboard-input @enderror" required rows="8">{{ old('content', $testimonial->content) }}</textarea>
                    @error('content')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}" placeholder="image"
                        class="@error('image') dashboard-input__error @else dashboard-input @enderror">
                    @error('image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img src="{{ asset('/storage/' . $testimonial->image) }}" alt="image-preview" id="image-preview"
                        class="w-fit h-fit">
                </div>

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save
                    Testimonial</button>
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