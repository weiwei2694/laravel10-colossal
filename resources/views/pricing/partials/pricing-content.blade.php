<section
    class="relative max-w-[1025px] mx-auto pt-[75px] pb-[150px] px-10 lg:px-0 border-t border-t-white/10 flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px]">
        @foreach ($pricing as $item)
            <div class='rounded-[10px] p-[50px] pb-[30px] flex flex-col gap-y-[40px] bg-white/5'>
                <div class="flex justify-between gap-[10px]">
                    <h5 class="text-white font-bold text-[16px]">{{ $item['title'] }}</h5>
                    <div class="flex flex-col">
                        <h6 class="text-white/60 font-normal text-[12px]">Starting from</h6>
                        <h4 class="text-white font-bold text-[36px]">{{ $item['price'] }}$</h4>
                    </div>
                </div>
                <div class="h-[1px] w-full bg-white/10"></div>
                <ul class="flex flex-col items-center text-center text-white">
                    @foreach ($item['lists'] as $list)
                        <li class="leading-[36px] text-white font-medium text-[16px]">{{ $list }}</li>
                    @endforeach
                </ul>
                <a href="/"
                    class="w-full h-[52px] grid place-items-center bg-white hover:bg-primary rounded-[3px] text-[#3F2379] hover:text-white font-semibold text-[16px]">Detail</a>
            </div>
        @endforeach
    </div>
</section>
