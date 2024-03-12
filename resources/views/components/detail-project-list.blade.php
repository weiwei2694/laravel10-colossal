@props(['title', 'value'])

<div class="flex flex-col gap-y-[4px]">
    <h5 class="text-[10px] sm:text-[12px] lg:text-[14px] font-semibold text-white/60 tracking-[10%] uppercase">
        {{ $title }}</h5>
    <h4 class="text-[12px] sm:text-[14px] lg:text-[16px] font-semibold text-white">{{ $value }}</h4>
</div>
