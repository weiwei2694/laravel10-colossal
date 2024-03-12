<section class="relative max-w-[1025px] mx-auto pt-[150px] border-t border-t-white/10 px-10 lg:px-0">
    <div class="flex flex-col gap-y-[75px]">
        <div class="flex items-center flex-col gap-y-[12px] text-center">
            <x-green-title title="PROJECTS" />
            <x-description-bold>Other Amazing Projects</x-description-bold>
        </div>
        <div class="grid place-items-center grid-cols-1 md:grid-cols-2 gap-x-[60px] md:gap-x-[20px] gap-y-[70px]">
            @include('components.cards-project')
        </div>
    </div>
</section>
