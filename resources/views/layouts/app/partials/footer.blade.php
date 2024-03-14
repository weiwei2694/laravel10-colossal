<?php
$lists = [
    [
        'name' => 'Services',
        'childrens' => [
            [
                'name' => 'Web Development',
                'url' => '/pricing',
            ],
            [
                'name' => 'App Development',
                'url' => '/pricing',
            ],
            [
                'name' => 'UI Design',
                'url' => '/pricing',
            ],
            [
                'name' => 'Consultation',
                'url' => '/pricing',
            ],
            [
                'name' => 'Maintenance',
                'url' => '/pricing',
            ],
        ],
    ],
    [
        'name' => 'Company',
        'childrens' => [
            [
                'name' => 'About',
                'url' => '/about',
            ],
            [
                'name' => 'Contact',
                'url' => '/contact',
            ],
            [
                'name' => 'Send Quote',
                'url' => '/quote',
            ],
            [
                'name' => 'Privacy Policy',
                'url' => '/',
            ],
            [
                'name' => 'Term of Service',
                'url' => '/term-of-service',
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
                'url' => '/term-of-service',
            ],
            [
                'name' => 'Sitemap',
                'url' => '/',
            ],
        ],
    ],
];
?>

<footer class="relative max-w-[1025px] mx-auto pt-[80px]">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 px-10 lg:px-0">
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
                        <li class="text-[16px] font-medium leading-[28px] text-white/60 hover:text-white transition">
                            <a href="{{ $children['url'] }}">{{ $children['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</footer>
