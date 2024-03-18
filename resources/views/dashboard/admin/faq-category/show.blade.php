@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Faq Category</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" value="{{ $faq_category->name }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Total Faqs -->
                <div class="flex flex-col">
                    <label for="total_faqs" class="font-medium">Total Faqs</label>
                    <input type="text" name="total_faqs" id="total_faqs" value="{{ $faq_category->faqs->count() }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="font-medium">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $faq_category->created_at }}"
                        class="dashboard-input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="font-medium">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at"
                        value="{{ $faq_category->updated_at->diffForHumans() }}" class="dashboard-input" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
