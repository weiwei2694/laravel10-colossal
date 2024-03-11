<section class="relative max-w-[1025px] mx-auto pt-[75px] border-t border-t-white/10 px-10 lg:px-0">
    <div class="grid place-items-center grid-cols-1 md:grid-cols-2 gap-x-[60px] md:gap-x-[20px] gap-y-[70px]">
        @foreach ($projects as $project)
            <div class="flex flex-col w-full items-center gap-y-[16px] md:gap-y-[32px]">
                <div class="relative">
                    <div class="inset-0 absolute top-0 left-0 bg-card-dark/40 z-10"></div>
                    <img src="{{ asset('/storage/' . $project->image) }}" alt="{{ $project->title }}"
                        class="w-full h-[300px] md:h-[441px] object-cover rounnded relative z-0" />
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

    {{-- TODO: Infinite Scrolling --}}
</section>
