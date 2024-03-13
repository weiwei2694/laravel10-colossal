<?php
$lists = [
    [
        'icon' => 'flag.png',
        'alt' => 'Flag',
        'title' => 'COUNTRIES',
        'value' => '8',
    ],
    [
        'icon' => 'user.png',
        'alt' => 'User',
        'title' => 'CLIENTS',
        'value' => '193',
    ],
    [
        'icon' => 'dollar-sign.png',
        'alt' => 'Dollar Sign',
        'title' => 'EARNING',
        'value' => '$100k',
    ],
];
?>

<section class="relative max-w-[1025px] mx-auto pt-[75px] border-t border-t-white/10">
    <div class="flex flex-col gap-y-[75px]">
        <div class="grid place-items-center text-center px-10 lg:px-0">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="STATISTICS" />
                <x-description-bold class="max-w-fit md:max-w-[507px]"
                    title="We are here to help solve your company's problems">
                    In 3 years we reached 8 countries, 193 clients and earning $100k USD
                </x-description-bold>
            </div>
        </div>
        <div
            class="bg-white/5 rounded-[3px] w-full h-full lg:h-[157px] flex flex-wrap justify-between lg:justify-evenly items-center px-10 py-5 lg:py-0 gap-10">
            @foreach ($lists as $list)
                <div class="flex flex-row gap-x-[32px] items-center">
                    <div class="bg-white/5 rounded-[3px] grid place-items-center w-[70px] h-[70px]">
                        <img src="{{ asset('/assets/' . $list['icon']) }}" alt="{{ $list['alt'] }}" width="30"
                            height="30">
                    </div>
                    <div class="flex flex-col gap-y-[2px]">
                        <h2 class="font-bold text-white text-[36px]">{{ $list['value'] }}</h1>
                            <h4 class="text-white/60 font-bold text-[16px] tracking-[10%]">{{ $list['title'] }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
