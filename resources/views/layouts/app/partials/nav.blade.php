<?php
$lists = [
    [
        'name' => 'Services',
        'url' => '/services',
        'named' => 'services.*',
    ],
    [
        'name' => 'How We Work',
        'url' => '/how-we-work',
        'named' => 'how-we-work.*',
    ],
    [
        'name' => 'Projects',
        'url' => '/projects',
        'named' => 'projects.*',
    ],
    [
        'name' => 'About',
        'url' => '/about',
        'named' => 'about.*',
    ],
];
?>

<nav class="relative max-w-[1025px] mx-auto z-10 px-10 lg:px-0">
    <div class="flex items-center justify-between">
        {{-- Logo --}}
        <a href="/" class="sm:hidden lg:block">
            <img src="/assets/logo.svg" alt="Colossal Logo" class="w-[138.25px] h-[31px]">
        </a>
        {{-- Lists - Desktop --}}
        <ul class="hidden sm:flex items-center gap-x-[30px] lg:gap-x-[50px]">
            @foreach ($lists as $list)
                <li
                    class="text-[16px]
                    {{ request()->routeIs($list['named']) ? 'text-white font-bold' : 'font-normal text-white/80' }}">
                    <a href="{{ $list['url'] }}">{{ $list['name'] }}</a>
                </li>
            @endforeach
        </ul>
        {{-- Login --}}
        <a class="hidden rounded-[3px] text-white font-medium text-[14px] bg-white/10 shadow w-[112px] h-[39px] sm:grid place-items-center"
            href="/auth/login">Login</a>
        {{-- Hamburger Menu --}}
        <button class="block sm:hidden py-1 px-2 rounded-lg hover:bg-white/5 transition" id="hamburger-menu">
            <i class="ri-menu-line text-lg text-white"></i>
        </button>
        {{-- Lists - Mobile --}}
        <ul id="lists-mobile"
            class="navbar__list animate-[showMenu_0.5s_ease-in-out_forwards] hidden flex-col p-5 absolute top-[50px] left-0 right-0 shadow-[0px_19px_14px_1px_rgba(0, 0, 0, 0.1)] mx-10 bg-white rounded-xl gap-y-5">
            @foreach ($lists as $list)
                <li class="font-medium text-card-dark hover:text-card-dark/90 transition">
                    <a href="{{ $list['url'] }}">{{ $list['name'] }}</a>
                </li>
            @endforeach
            <li>
                <a class="rounded-xl text-white font-medium text-[14px] bg-card-dark hover:bg-card-dark/90 transition w-full py-3 grid place-items-center"
                    href="/auth/login">Login</a>
            </li>
        </ul>
    </div>
</nav>
