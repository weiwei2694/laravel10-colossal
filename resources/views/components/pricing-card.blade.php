@props(['price', 'title', 'lists'])

<div {{ $attributes->merge(['class' => 'rounded-[15px] p-[50px] pb-[30px] flex flex-col gap-y-[40px]']) }}>
    <div class="flex justify-between gap-[10px]">
        <h5 class="text-white font-bold text-[16px]">{{ $title }}</h5>
        <div class="flex flex-col">
            <h6 class="text-white/60 font-normal text-[12px]">Starting from</h6>
            <h4 class="text-white font-bold text-[36px]">{{ $price }}$</h4>
        </div>
    </div>
    <div class="h-[1px] w-full bg-white/10"></div>
    <ul class="flex flex-col items-center text-center text-white">
        @foreach ($lists as $item)
            <li class="leading-[36px] text-white font-medium text-[16px]">{{ $item }}</li>
        @endforeach
    </ul>
    <a href="/pricing"
        class="w-full h-[52px] grid place-items-center bg-white rounded-[3px] text-[#3F2379] font-semibold text-[16px]">Detail</a>
</div>
