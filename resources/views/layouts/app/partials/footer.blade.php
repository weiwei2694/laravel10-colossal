<?php
$lists = [
    [
        'name' => 'Services',
        'childrens' => [
            [
                'name' => 'Web Development',
                'url' => '/',
            ],
            [
                'name' => 'App Development',
                'url' => '/',
            ],
            [
                'name' => 'UI Design',
                'url' => '/',
            ],
            [
                'name' => 'Consultation',
                'url' => '/',
            ],
            [
                'name' => 'Maintenance',
                'url' => '/',
            ],
        ],
    ],
    [
        'name' => 'Company',
        'childrens' => [
            [
                'name' => 'About',
                'url' => '/',
            ],
            [
                'name' => 'Contact',
                'url' => '/',
            ],
            [
                'name' => 'Send Quote',
                'url' => '/',
            ],
            [
                'name' => 'Privacy Policy',
                'url' => '/',
            ],
            [
                'name' => 'Term of Service',
                'url' => '/',
            ],
            [
                'name' => 'Jobs',
                'url' => '/',
            ],
        ],
    ],
    [
        'name' => 'Resources',
        'childrens' => [
            [
                'name' => 'Support',
                'url' => '/',
            ],
            [
                'name' => 'Documentation',
                'url' => '/',
            ],
            [
                'name' => 'License',
                'url' => '/',
            ],
            [
                'name' => 'Sitemap',
                'url' => '/',
            ],
        ],
    ],
];
?>

<footer class="grid grid-cols-4 pt-[80px]">
    <div class="flex flex-col gap-y-[20px]">
        <img src="{{ asset('/assets/logov2.svg') }}" alt="Colossal Logo" class="w-[142px] h-[31px]">
        <ul class="flex flex-col">
            <li class="text-[16px] font-medium leading-[32px] text-white/60">Copyright © 2021</li>
            <li class="text-[16px] font-medium leading-[32px] text-white/60">Design By Collosal LLC</li>
        </ul>
    </div>
    @foreach ($lists as $list)
        <div class="flex flex-col gap-y-[20px]">
            <h3 class="text-white font-medium text-[14px] tracking-widest uppercase">{{ $list['name'] }}</h3>
            <ul class="flex flex-col gap-y-[10px]">
                @foreach ($list['childrens'] as $children)
                    <li class="text-[16px] font-medium leading-[28px] text-white/60">
                        <a href="{{ $children['url'] }}">{{ $children['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</footer>
