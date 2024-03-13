@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Faq</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">
                <!-- Question -->
                <div class="flex flex-col">
                    <label for="question" class="font-medium">Question</label>
                    <input type="text" name="question" id="question" value="{{ $faq->question }}" class="dashboard-input"
                        disabled>
                </div>

                <!-- Answer -->
                <div class="flex flex-col">
                    <label for="answer" class="font-medium">Answer</label>
                    <textarea name="answer" id="answer" class="dashboard-input" rows="8" disabled>{{ $faq->answer }}</textarea>
                </div>

                <!-- Faq Category Id -->
                <div class="flex flex-col">
                    <label for="faq_category_id" class="font-medium">Category</label>
                    <input type="text" name="faq_category_id" id="faq_category_id" value="{{ $faq->faqCategory->name }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="font-medium">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $faq->created_at }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="font-medium">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at" value="{{ $faq->updated_at->diffForHumans() }}"
                        class="dashboard-input" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
