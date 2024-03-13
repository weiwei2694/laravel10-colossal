<?php
$lists = ['Avoid potential bugs with unit testing', 'Removing unused code will speed up the application', 'The modern design pleases the users', 'A good UX will not disappoint users'];
?>

<section class="relative max-w-[1025px] mx-auto pt-[75px] pb-[150px] px-10 lg:px-0 border-t border-t-white/10">
    <div
        class="flex justify-between items-start lg:items-center flex-col lg:flex-row gap-y-12 lg:gap-y-0 gap-x-0 lg:gap-x-12 relative z-10">
        <img src="{{ asset('/assets/development-illustration.png') }}" alt="Development Illustration" />
        <div class="flex flex-col gap-y-[25px] sm:gap-y-[40px]">
            <x-description-medium class="w-fit lg:max-w-[502px]">
                Just tell us your repetitive problem or the primitive method used today, and we will create a digital
                solution.
                <br /><br />

                We can build you a website, a mobile app and a desktop app. All types of applications have a good
                security system, are easy to maintain, and are high speed.
            </x-description-medium>
            <div class="flex flex-col gap-y-[25px]">
                @foreach ($lists as $list)
                    <div class="flex flex-row items-center gap-x-[25px]">
                        <div class="w-[8px] h-[8px] bg-white"></div>
                        <h5 class="text-white tracking-[32%] font-medium text-[14px] sm:text-[16px]">{{ $list }}
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
