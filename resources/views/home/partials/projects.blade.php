<section class="relative w-[1025px] mx-auto pt-[150px] border-t border-t-white/10">
    <div
        class="w-3/4 h-[424px] bg-transparent border-t-[70px] border-r-[70px] border-b-[70px] opacity-[3%] absolute -left-[50%] z-0">
    </div>
    <div
        class="w-[46.94px] h-[46.94px] bg-gradient-to-br from-[#FF81A6] to-[#FC165B] rounded-full blur-sm absolute left-[40px] top-[200px]">
    </div>
    <div
        class="w-[55.09px] h-[55.09px] bg-gradient-to-br from-[#66FFA3] to-[#009C3E] rounded-full blur-sm absolute right-[120px] top-[120px]">
    </div>
    <div class="w-[29.85px] h-[29.85px] bg-[#6016FC] rounded-full blur-sm absolute -right-[30px] top-[300px]">
    </div>

    <div class="relative z-10 flex flex-col gap-[60px]">
        <div class="flex text-center items-center flex-col gap-y-[16px]">
            <x-green-title title="PROJECTS" />
            <x-description-bold>
                We have completed many<br /> amazing projects that you will<br /> not believe
            </x-description-bold>
        </div>
        <div class="grid grid-cols-2 gap-[20px]">
            @foreach ($projects as $project)
                <div class="flex flex-col w-full items-center gap-y-[32px]">
                    <div class="relative">
                        <div class="inset-0 absolute top-0 left-0 bg-card-dark/40 z-10"></div>
                        <img src="{{ asset('/storage/' . $project->image) }}" alt="{{ $project->title }}"
                            class="w-full h-[441px] object-cover rounnded relative z-0" />
                    </div>
                    <div class="flex flex-col gap-y-[6px] text-center">
                        <h3 class="text-white font-bold leading-[34px] text-[20px] text-center">{{ $project->title }}
                        </h3>
                        <p class="leading-[34px] font-normal text-[16px] text-white/60">
                            {{ $project->is_desktop ? 'Desktop App' : 'Mobile App' }}</p>
                    </div>
                    {{-- TODO: redirect to detail project --}}
                    <a href="/"
                        class="w-[100px] h-[39px] grid place-items-center border border-white rounded-full text-white">Detail</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
