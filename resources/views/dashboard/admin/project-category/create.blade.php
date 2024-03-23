@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">New Project Category</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.project-categories.store') }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                @csrf

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name') }}"
                        class="dashboard__input @error('name') dashboard__input-error @enderror" required>
                    @error('name')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button class="dashboard__primary-btn">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection
