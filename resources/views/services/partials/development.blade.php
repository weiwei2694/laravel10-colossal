<section class="relative max-w-[1025px] mx-auto pt-[75px] pb-[150px] px-10 lg:px-0">
    <div
        class="flex justify-between items-start lg:items-center flex-col-reverse lg:flex-row-reverse gap-y-12 lg:gap-y-0 gap-x-0 lg:gap-x-12 relative z-10">
        <div class="relative">
            <div
                class="bg-[#6016FC] w-[356.61px] h-[350.19px] rotate-[14.13deg] absolute z-0 -right-[100px] -top-[150px] rounded-full opacity-[10%] sm:opacity-[15%] blur-3xl">
            </div>
            <div
                class="bg-[#FC165B] w-[438.93px] h-[431.03px] rotate-[14.13deg] absolute z-0 -left-[100px] bottom-[20px] rounded-full opacity-[8%] sm:opacity-[15%] blur-3xl">
            </div>

            <img src="{{ asset('/assets/development-illustration.png') }}" alt="Development Illustration"
                class="relative z-10" />
        </div>
        <div class="flex flex-col gap-y-[25px] sm:gap-y-[40px]">
            <div class="flex flex-col gap-y-[6px]">
                <x-green-title title="DEVELOPMENT" />
                <x-description-bold class="w-fit lg:max-w-[476px]">
                    Create solutions to repetitive problems, design applications and access anywhere!
                </x-description-bold>
            </div>
            <x-description-medium class="w-fit lg:max-w-[502px]">
                Just tell us your repetitive problem or the primitive method used today, and we will create a digital
                solution.
            </x-description-medium>
            <div class="flex flex-col gap-y-[16px]">
                <div class="rounded-[3px] bg-white/5 border-[1px] border-white/10 py-[20px] px-[30px] w-full">
                    <div class="flex flex-row gap-x-[20px] items-center">
                        <img src="{{ asset('/assets/smartphone.png') }}" alt="Smartphone" width="30"
                            height="30" />
                        <h4 class="font-semibold text-[14px] sm:text-[16px] text-white">Mobile App Development</h4>
                    </div>
                </div>
                <div class="rounded-[3px] bg-white/5 border-[1px] border-white/10 py-[20px] px-[30px] w-full">
                    <div class="flex flex-row gap-x-[20px] items-center">
                        <img src="{{ asset('/assets/monitor.png') }}" alt="Monitor" width="30" height="30" />
                        <h4 class="font-semibold text-[14px] sm:text-[16px] text-white">Desktop App Development</h4>
                    </div>
                </div>
                <div class="rounded-[3px] bg-white/5 border-[1px] border-white/10 py-[20px] px-[30px] w-full">
                    <div class="flex flex-row gap-x-[20px] items-center">
                        <img src="{{ asset('/assets/globe.png') }}" alt="Globe" width="30" height="30" />
                        <h4 class="font-semibold text-[14px] sm:text-[16px] text-white">Web Development</h4>
                    </div>
                </div>
            </div>
            <x-service-detail />
        </div>
    </div>
</section>
