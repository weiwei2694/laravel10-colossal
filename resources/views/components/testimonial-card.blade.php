@props(['image', 'name', 'companyname', 'content'])

<div
    {{ $attributes->merge(['class' => 'w-[415px] rounded bg-white/5 py-[60px] px-[50px] flex flex-col items-center text-center gap-[50px]']) }}>
    <div class="flex flex-col items-center text-center gap-[20px]">
        <div class="relative h-[90px] w-[90px]">
            <img src="{{ asset('/storage/' . $image) }}" alt="{{ $name }}"
                class="h-[90px] w-[90px] object-cover rounded-full" />
            <div class="absolute bottom-0 right-0">
                <img src={{ asset('/assets/quote-badge.png') }} alt="Quote Badge" />
            </div>
        </div>
        <div class="flex flex-col items-center text-center gap-[7px]">
            <h5 class="font-bold text-[18px] text-white">{{ $name }}</h5>
            <h6 class="font-medium text-[14px] text-white/60">{{ $companyname }}</h6>
        </div>
    </div>
    <p class="leading-[32px] text-[16px] text-white font-medium">"{{ $content }}"</p>
</div>
