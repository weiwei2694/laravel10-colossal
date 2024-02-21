@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Testimonial</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" value="{{ $testimonial->name }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Company Name -->
                <div class="flex flex-col">
                    <label for="company_name" class="font-medium">Company Name</label>
                    <input type="text" name="company_name" id="company_name" value="{{ $testimonial->company_name }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Content -->
                <div class="flex flex-col">
                    <label for="content" class="font-medium">Content</label>
                    <textarea name="content" id="content" class="dashboard-input" rows="8" disabled>{{ $testimonial->content }}</textarea>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="font-medium">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $testimonial->created_at }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="font-medium">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at" value="{{ $testimonial->updated_at }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>

                    <!-- Image Preview -->
                    <img src="{{ asset('/storage/' . $testimonial->image) }}" alt="image-preview" id="image-preview"
                        class="w-fit h-fit my-2">
                </div>
            </div>
        </div>
    </section>
@endsection
