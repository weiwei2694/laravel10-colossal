<section class="relative max-w-[1025px] mx-auto pt-[150px] px-10 lg:px-0">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px]">
        @foreach ($features as $feature)
            <div class="bg-white/5 w-full h-fit p-[35px] flex flex-col gap-y-[20px]">
                <div class="bg-white/5 rounded-3 w-fit h-fit p-[15px]">
                    <img src="{{ $feature['icon'] }}" alt="{{ $feature['name'] }}">
                </div>
                <h3 class="text-[18px] text-white font-bold">{{ $feature['name'] }}</h3>
                <p class="text-white/60 font-medium text-[16px]">{{ $feature['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
