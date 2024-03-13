<section class="relative max-w-[1025px] mx-auto pt-[75px] pb-[150px] px-10 lg:px-0 border-t border-t-white/10">
    <div
        class="flex justify-between items-start lg:items-center flex-col lg:flex-row gap-y-12 lg:gap-y-0 gap-x-0 lg:gap-x-12 relative z-10">
        <div class="relative">
            <div
                class="w-[16.45px] h-[16.45px] bg-gradient-to-br from-[#81ACFF] to-[#1656FC] rounded-full blur-sm absolute right-[100px] -top-[50px]">
            </div>
            <div
                class="w-[42.06px] h-[42.06px] bg-gradient-to-br from-[#66FFA3] to-[#009C3E] rounded-full blur-sm absolute right-[45px] -bottom-[20px]">
            </div>
            <div
                class="w-[31.54px] h-[31.54px] bg-gradient-to-br from-[#FF81A6] to-[#FC165B] rounded-full blur-sm absolute -left-[20px] lg:-left-[80px] top-[100px]">
            </div>
            <img src="{{ asset('/assets/ui-design.png') }}" alt="Ui Design" />
        </div>
        <div class="flex flex-col gap-y-[25px] sm:gap-y-[40px]">
            <div class="flex flex-col gap-y-[6px]">
                <x-green-title title="UI DESIGN" />
                <x-description-bold class="w-fit lg:max-w-[476px]">
                    Don't let your idea get caught by others, design a prototype for your idea
                </x-description-bold>
            </div>
            <x-description-medium class="w-fit lg:max-w-[502px]">
                Delegate your ideas as quickly as possible, create beautiful designs and vivid prototypes.
            </x-description-medium>
            <div class="flex flex-col md:flex-row gap-[16px]">
                <div
                    class="rounded-[3px] bg-white/5 border-[1px] border-white/10 py-[30px] px-[20px] flex flex-col gap-y-[20px] w-full">
                    <div class="flex flex-row gap-x-[20px] items-center">
                        <img src="{{ asset('/assets/layout.png') }}" alt="Layout" width="30" height="30" />
                        <h4 class="font-semibold text-[16px] text-white">Beautiful Design</h4>
                    </div>
                    <p class="text-white/60 text-[14px] font-normal tracking-[24%]">Create a modern design for your
                        idea.</p>
                </div>
                <div
                    class="rounded-[3px] bg-white/5 border-[1px] border-white/10 py-[30px] px-[20px] flex flex-col gap-y-[20px] w-full">
                    <div class="flex flex-row gap-x-[20px] items-center">
                        <img src="{{ asset('/assets/mouse-pointer.png') }}" alt="Layout" width="30"
                            height="30" />
                        <h4 class="font-semibold text-[16px] text-white">Card Name</h4>
                    </div>
                    <p class="text-white/60 text-[14px] font-normal tracking-[24%]">Create vivid prototypes for your
                        designs.</p>
                </div>
            </div>
            <x-service-detail />
        </div>
    </div>
</section>
