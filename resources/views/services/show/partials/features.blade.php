<?php
$lists = [
    [
        'icon' => 'figma.png',
        'alt' => 'Figma',
        'title' => 'Design Files',
        'content' => 'Projects are well designed using Figma. You will get the design file.',
    ],
    [
        'icon' => 'clock.png',
        'alt' => 'Clock',
        'title' => 'Same Day',
        'content' => "We don't want you to wait long. Everything will be finished on the same day.",
    ],
    [
        'icon' => 'code.png',
        'alt' => 'Code',
        'title' => 'Quality Code',
        'content' => 'Code written according to good practice is highly maintainable.',
    ],
    [
        'icon' => 'trending-up.png',
        'alt' => 'Trending Up',
        'title' => 'SEO',
        'content' => 'The website will appear on the first page of the search engine.',
    ],
    [
        'icon' => 'layout-50.png',
        'alt' => 'Layout 50',
        'title' => 'Responsive Design',
        'content' => "Access the website on any device, don't limit your visitors.",
    ],
    [
        'icon' => 'zap.png',
        'alt' => 'Zap',
        'title' => 'Blazing Fast',
        'content' => 'A high speed website will not disappoint prospective customers.',
    ],
];
?>

<section class="relative max-w-[1025px] mx-auto pt-[75px] pb-[75px] px-10 lg:px-0">
    <div class="flex flex-col gap-y-[75px] lg:gap-y-[100px]">
        <div class="grid place-items-center text-center">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="FEATURES" />
                <x-description-bold class="max-w-fit md:max-w-[507px]">
                    Here's what you will get when purchasing this service
                </x-description-bold>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] relative">
            <div
                class="bg-[#6016FC] w-[532.11px] h-[522.54px] rotate-[14.13deg] absolute z-0 right-[65px] -top-[20px] rounded-full opacity-[10%] blur-3xl">
            </div>
            <div
                class="bg-[#FC165B] w-[432.31px] h-[424.53px] rotate-[14.13deg] absolute z-0 left-[130px] bottom-[50px] rounded-full opacity-[10%] blur-3xl">
            </div>

            @foreach ($lists as $list)
                <div
                    class="rounded-[3px] bg-white/5 py-[30px] sm:py-[40px] px-[40px] sm:px-[50px] flex flex-col gap-y-[20px] w-full">
                    <div class="relative">
                        <img src="{{ asset('/assets/' . $list['icon']) }}" alt="{{ $list['alt'] }}" width="50"
                            height="50">
                    </div>
                    <h5 class="text-white font-bold text-[16px] lg:text-[18px]">{{ $list['title'] }}</h5>
                    <p class="text-white/60 text-[14px] lg:text-[16px] font-medium tracking-[32%]">
                        {{ $list['content'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
