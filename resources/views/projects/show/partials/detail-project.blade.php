<section
    class="relative max-w-[1025px] mx-auto pt-[75px] @if (!empty($projects->toArray())) pb-[150px] @endif border-t border-t-white/10 px-10 lg:px-0">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[32px]">
        <div>
            <img src="{{ asset('/storage/' . $project->image) }}" />
        </div>
        <div class="flex flex-col gap-y-[16px] justify-between">
            <x-description-medium>
                {{ $project->description }}
            </x-description-medium>
            <x-detail-project-list title="CATEGORY" value="{{ $project->projectCategory->name }}" />
            <x-detail-project-list title="CLIENT" value="{{ $project->client }}" />
            <x-detail-project-list title="TECHNOLOGY" value="{{ implode(',', json_decode($project->technology)) }}" />
        </div>
    </div>
</section>
