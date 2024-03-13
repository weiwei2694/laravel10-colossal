<section class="relative max-w-[1025px] mx-auto py-[75px] px-10 lg:px-0">
    <div
        class="flex justify-between items-start lg:items-center flex-col lg:flex-row gap-y-12 lg:gap-y-0 gap-x-0 lg:gap-x-12 relative z-10">
        <div class="relative">
            <div
                class="bg-[#FCA016] w-[356.61px] h-[350.19px] rotate-[14.13deg] absolute z-0 -right-[100px] -top-[150px] rounded-full opacity-[15%] blur-3xl">
            </div>
            <div
                class="bg-[#66FFA3] w-[438.93px] h-[431.03px] rotate-[14.13deg] absolute z-0 -left-[100px] bottom-[20px] rounded-full opacity-[15%] blur-3xl">
            </div>

            <img src="{{ asset('/assets/maintenance-illustration.png') }}" alt="Maintenance Illustration"
                class="relative z-10" />
        </div>
        <div class="flex flex-col gap-y-[25px] sm:gap-y-[40px]">
            <div class="flex flex-col gap-y-[6px]">
                <x-green-title title="MAINTENANCE" />
                <x-description-bold class="w-fit lg:max-w-[476px]">
                    Think of your server as your own child, taking care of it every day
                </x-description-bold>
            </div>
            <x-description-medium class="w-fit lg:max-w-[502px]">
                We will back up your servers every day, clean them every week, upgrade them when there is an update.
            </x-description-medium>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                <div class="flex flex-row gap-x-[20px] items-center">
                    <div class="rounded-[3px] bg-white/5 w-[50px] h-[50px] grid place-items-center">
                        <img src="{{ asset('/assets/download.png') }}" alt="Download" width="20" height="20">
                    </div>
                    <h4 class="text-white font-medium text-[16px] tracking-[32%]">Back up every day</h4>
                </div>
                <div class="flex flex-row gap-x-[20px] items-center">
                    <div class="rounded-[3px] bg-white/5 w-[50px] h-[50px] grid place-items-center">
                        <img src="{{ asset('/assets/arrow-up.png') }}" alt="Arrow Up" width="20" height="20">
                    </div>
                    <h4 class="text-white font-medium text-[16px] tracking-[32%]">Upgrade</h4>
                </div>
                <div class="flex flex-row gap-x-[20px] items-center">
                    <div class="rounded-[3px] bg-white/5 w-[50px] h-[50px] grid place-items-center">
                        <img src="{{ asset('/assets/refresh-ccw.png') }}" alt="Refres CCW" width="20"
                            height="20">
                    </div>
                    <h4 class="text-white font-medium text-[16px] tracking-[32%]">Cleaning every week</h4>
                </div>
                <div class="flex flex-row gap-x-[20px] items-center">
                    <div class="rounded-[3px] bg-white/5 w-[50px] h-[50px] grid place-items-center">
                        <img src="{{ asset('/assets/check-circle.png') }}" alt="Check Circle" width="20"
                            height="20">
                    </div>
                    <h4 class="text-white font-medium text-[16px] tracking-[32%]">Fixing error</h4>
                </div>
            </div>
            <x-service-detail />
        </div>
    </div>
</section>
