@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Detail Project Category</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $project_category->name }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Total Projects -->
                <div class="flex flex-col">
                    <label for="total_projects" class="dashboard__label">Total Projects</label>
                    <input type="text" name="total_projects" id="total_projects"
                        value="{{ $project_category->projects->count() }}" class="dashboard__input" disabled>
                </div>

                <!-- Created At -->
                <div class="flex flex-col">
                    <label for="created_at" class="dashboard__label">Created At</label>
                    <input type="text" name="created_at" id="created_at" value="{{ $project_category->created_at }}"
                        class="dashboard__input" disabled>
                </div>

                <!-- Updated At -->
                <div class="flex flex-col">
                    <label for="updated_at" class="dashboard__label">Updated At</label>
                    <input type="text" name="updated_at" id="updated_at"
                        value="{{ $project_category->updated_at->diffForHumans() }}" class="dashboard__input" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
