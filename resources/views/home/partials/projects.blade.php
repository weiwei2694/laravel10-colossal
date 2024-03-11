<section class="relative max-w-[1025px] mx-auto pt-[150px] border-t border-t-white/10 px-10 lg:px-0">
    <div
        class="w-3/4 h-[424px] bg-transparent border-t-[70px] border-r-[70px] border-b-[70px] opacity-[3%] absolute -left-[50%] z-0">
    </div>
    <div
        class="w-[46.94px] h-[46.94px] bg-gradient-to-br from-[#FF81A6] to-[#FC165B] rounded-full blur-sm absolute left-[40px] top-[200px]">
    </div>
    <div
        class="w-[55.09px] h-[55.09px] bg-gradient-to-br from-[#66FFA3] to-[#009C3E] rounded-full blur-sm absolute right-[120px] top-[120px]">
    </div>
    <div
        class="w-[29.85px] h-[29.85px] bg-[#6016FC] rounded-full blur-sm absolute right-[30px] lg:-right-[30px] top-[300px]">
    </div>

    <div class="relative z-10 flex flex-col gap-[60px]">
        <div class="flex text-center items-center flex-col gap-y-[16px]">
            <x-green-title title="PROJECTS" />
            <x-description-bold>
                We have completed many<br /> amazing projects that you will<br /> not believe
            </x-description-bold>
        </div>
        <div class="grid place-items-center grid-cols-1 md:grid-cols-2 gap-[60px] md:gap-[20px]">
            @include('components.cards-project')
        </div>
    </div>
</section>
