@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">New Faq</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.faqs.store') }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                @csrf

                <!-- Question -->
                <div class="flex flex-col">
                    <label for="question" class="dashboard__label">Question</label>
                    <input type="text" name="question" id="question" autofocus value="{{ old('question') }}"
                        class="dashboard__input @error('question') dashboard__input-error @enderror" required>
                    @error('question')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Answer -->
                <div class="flex flex-col">
                    <label for="answer" class="dashboard__label">Answer</label>
                    <textarea name="answer" id="answer" class="dashboard__textarea @error('answer') dashboard__input-error @enderror"
                        required rows="8">{{ old('answer') }}</textarea>
                    @error('answer')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Faq Category Id -->
                <div class="flex flex-col">
                    <label for="faq_category_id" class="dashboard__label">Choose Category</label>
                    <select name="faq_category_id" id="faq_category_id"
                        class="dashboard__input @error('faq_category_id') dashboard__input-error @enderror" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('faq_category_id')
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
