@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Sponsor</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $sponsor->name }}" class="dashboard__input"
                        disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="dashboard__label">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $sponsor->created_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="dashboard__label">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at" value="{{ $sponsor->updated_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>

                    <!-- Image Preview -->
                    @if ($sponsor->image)
                        <img src="{{ asset('/storage/' . $sponsor->image) }}" id="image-preview"
                            class="dashboard__image-preview">
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
