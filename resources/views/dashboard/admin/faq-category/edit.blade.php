@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Faq Category</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.faq-categories.update', $faq_category->id) }}" method="POST"
                class="flex flex-col gap-[20px]">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" autofocus
                        value="{{ old('name', $faq_category->name) }}" placeholder="Name"
                        class="@error('name') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection
