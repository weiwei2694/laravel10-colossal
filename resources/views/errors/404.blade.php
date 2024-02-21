@extends('layouts.app.app')

@section('content')
    <section class="pt-[175px] pb-[87.5px] flex flex-col justify-center text-center px-10">
        <div class="flex flex-col gap-y-[25px] sm:gap-y-[40px]">
            <div class="flex flex-col gap-y-[15px] sm:gap-y-[30px]">
                <h2 class="text-[#FC165B] font-semibold text-[16px] tracking-[3px] leading-[32px]">ERROR
                </h2>
                <h1 class="text-white font-bold text-[24px] sm:text-[32px] lg:text-[36px] leading-[44px] sm:leading-[54px]">
                    The page you are
                    looking<br />
                    for is not on this
                    website,<br /> please check again</h1>
                <p
                    class="text-white/60 font-medium leading-[22px] sm:leading-[32px] text-[11px] sm:text-[14px] lg:text-[16px]">
                    The system
                    cannot find the page you are
                    looking for, maybe you<br /> have the wrong path or the page has been deleted.</p>
            </div>
            <div class="flex items-center gap-x-[30px] justify-center">
                <a href="/"
                    class="w-[200px] h-[52px] rounded-[3px] bg-white/10 hover:bg-white/5 transition text-white grid place-items-center font-semibold text-[16px]">Back
                    To Home</a>
            </div>
        </div>
    </section>
@endsection
