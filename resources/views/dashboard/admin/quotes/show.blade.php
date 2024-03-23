@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Quote</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px]">
                <!-- Id -->
                <div class="flex flex-col">
                    <label for="id" class="dashboard__label">Id</label>
                    <input type="text" name="id" id="id" value="{{ $quote->id }}" class="dashboard__input"
                        disabled>
                </div>

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $quote->name }}" class="dashboard__input"
                        disabled>
                </div>

                <!-- Company -->
                <div class="flex flex-col">
                    <label for="company" class="dashboard__label">Company</label>
                    <input type="text" name="company" id="company" value="{{ $quote->company }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Company Size -->
                <div class="flex flex-col">
                    <label for="company_size" class="dashboard__label">Company Size</label>
                    <input type="text" name="company_size" id="company_size" value="{{ $quote->company_size }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Problem -->
                <div class="flex flex-col">
                    <label for="problem" class="dashboard__label">Problem</label>
                    <textarea name="problem" id="problem" class="dashboard__textarea" rows="8" disabled>{{ $quote->problem }}</textarea>
                </div>

                <!-- Is Read -->
                <div class="flex flex-col">
                    <label for="is_read" class="dashboard__label">Is Read</label>
                    <input type="text" name="is_read" id="is_read" value="{{ $quote->is_read }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="dashboard__label">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $quote->created_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="dashboard__label">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at"
                        value="{{ $quote->updated_at->diffForHumans() }}" class="dashboard__input" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
