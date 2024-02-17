<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-card-dark">
    {{-- Header --}}
    <header class="relative w-[1025px] mx-auto">
        {{-- Highlights --}}
        <div
            class="bg-green w-[784.29px] h-[770.18px] rotate-[14.13deg] absolute z-0 left-[210.15px] top-[63.65px] rounded-full opacity-[5%] blur-3xl">
        </div>
        <div
            class="bg-[#FCA016] w-[784.29px] h-[770.18px] rotate-[14.13deg] absolute z-0 -left-[327px] top-[198.9px] rounded-full opacity-[5%] blur-3xl">
        </div>
        <div
            class="bg-[#FC165B] w-[784.29px] h-[770.18px] rotate-[14.13deg] absolute z-0 left-[532.44px] -top-[17.5px] rounded-full opacity-[5%] blur-3xl">
        </div>

        {{-- Nav --}}
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
                {{-- Contact --}}
                <a class="rounded-[3px] text-white font-medium text-[14px] bg-white/10 shadow w-[112px] h-[39px] grid place-items-center"
                    href="/">Contact</a>
            </div>
        </nav>

        {{-- Section - Typography --}}
        <section class="relative z-10 pt-[175px] flex flex-col justify-center text-center">
            <div class="flex flex-col gap-y-[40px]">
                <div class="flex flex-col gap-y-[30px]">
                    <h2 class="text-green font-semibold text-[16px] tracking-[3px] leading-[32px]">CLIENT-DEVELOPMENT
                        DRIVEN
                    </h2>
                    <h1 class="text-white font-bold text-[36px] leading-[54px]">We Design. We Develop. We Ship.<br /> In
                        The
                        Same Day.</h1>
                    <p class="text-white/60 font-medium leading-[32px] text-[16px]">We are committed to not making
                        clients
                        wait.
                        We
                        will deliver the work<br /> as quickly
                        as possible. Even
                        on the same day. Even so, we do not<br /> reduce the quality of our work.</p>
                </div>
                <div class="flex items-center gap-x-[30px] justify-center">
                    <a href="/"
                        class="w-[202px] h-[52px] rounded-[3px] bg-primary hover:bg-primary/90 transition text-white grid place-items-center font-semibold text-[16px]">Send
                        Quote</a>
                    <a href="/"
                        class="w-[200px] h-[52px] rounded-[3px] bg-white/10 hover:bg-white/5 transition text-white grid place-items-center font-semibold text-[16px]">Learn
                        More</a>
                </div>
            </div>
        </section>

        {{-- Section - Features --}}
        <section class="pt-[150px]">
            <div class="grid grid-cols-3 gap-x-[25px]">
                @foreach ($features as $feature)
                    <div class="bg-white/5 w-full h-fit p-[35px] flex flex-col gap-y-[20px]">
                        <div class="bg-white/5 rounded-3 w-fit h-fit p-[15px]">
                            <img src="{{ $feature['icon'] }}" alt="{{ $feature['name'] }}">
                        </div>
                        <h3 class="text-[18px] text-white font-bold">{{ $feature['name'] }}</h3>
                        <p class="text-white/60 font-medium text-[16px]">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </header>
</body>

</html>
