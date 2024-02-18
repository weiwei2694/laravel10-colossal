<?php
$lists = [
    [
        'name' => 'Services',
        'url' => '/services',
    ],
    [
        'name' => 'How We Work',
        'url' => '/how-we-work',
    ],
    [
        'name' => 'Projects',
        'url' => '/project',
    ],
    [
        'name' => 'About',
        'url' => '/about',
    ],
];
?>

<nav class="relative z-10">
    <div class="pt-[50px] flex items-center justify-between">
        {{-- Logo --}}
        <img src="/assets/logo.svg" alt="Colossal Logo" class="w-[138.25px] h-[31px]">
        {{-- Lists --}}
        <ul class="flex items-center gap-x-[50px]">
            @foreach ($lists as $list)
                <li class="text-white/80 font-normal text-[16px]">
                    <a href="{{ $list['url'] }}">{{ $list['name'] }}</a>
                </li>
            @endforeach
        </ul>
        {{-- Login --}}
        <a class="rounded-[3px] text-white font-medium text-[14px] bg-white/10 shadow w-[112px] h-[39px] grid place-items-center"
            href="/auth/login">Login</a>
    </div>
</nav>
