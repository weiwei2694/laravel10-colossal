@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit Faq</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.faqs.update', $faq->id) }}" method="POST" class="flex flex-col gap-[20px]">
                @csrf
                @method('PUT')

                <!-- Question -->
                <div class="flex flex-col">
                    <label for="question" class="font-medium">Question</label>
                    <input type="text" name="question" id="question" autofocus
                        value="{{ old('question', $faq->question) }}" placeholder="Question"
                        class="@error('question') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('question')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Answer -->
                <div class="flex flex-col">
                    <label for="answer" class="font-medium">Answer</label>
                    <textarea name="answer" id="answer" placeholder="Answer"
                        class="@error('answer') dashboard-input__error @else dashboard-input @enderror" required rows="8">{{ old('answer', $faq->answer) }}</textarea>
                    @error('answer')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Faq Category Id -->
                <div class="flex flex-col">
                    <label for="faq_category_id" class="font-medium">Choose Category</label>
                    <select name="faq_category_id" id="faq_category_id"
                        class="@error('faq_category_id') dashboard-input__error @else dashboard-input @enderror" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id === $faq->faq_category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('faq_category_id')
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
