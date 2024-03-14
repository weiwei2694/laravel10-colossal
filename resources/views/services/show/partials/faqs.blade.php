<section class="relative max-w-[1025px] mx-auto pt-[75px] pb-[75px] px-10 lg:px-0">
    <div class="flex flex-col gap-y-[75px] lg:gap-y-[100px]">
        <div class="grid place-items-center text-center">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="FAQ" />
                <x-description-bold class="max-w-fit md:max-w-[507px]">
                    Frequently asked questions, maybe the same as yours
                </x-description-bold>
            </div>
        </div>
        <div class="relative">
            <div
                class="z-0 w-[29.85px] h-[29.85px] bg-[#6016FC] rounded-full blur-sm absolute sm:right-[20px] lg:left-[1060px] -top-[60px] sm:-top-[100px]">
            </div>
            <div
                class="z-0 w-[55.09px] h-[55.09px] bg-gradient-to-br from-[#66FFA3] to-[#009C3E] rounded-full blur-sm absolute right-0 sm:right-[160px] -top-[40px] sm:-top-[290px]">
            </div>
            <div
                class="z-0 w-[46.94px] h-[46.94px] bg-gradient-to-br from-[#FF81A6] to-[#FC165B] rounded-full blur-sm absolute left-[60px] -top-[260px]">
            </div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-y-[35px] sm:gap-y-[50px] gap-x-[25px]">
                @foreach ($faqs as $faq)
                    <div class="flex flex-col gap-y-[12px] sm:gap-y-[16px]">
                        <h4 class="text-[16px] md:text-[20px] font-bold text-white tracking-[48%]">{{ $faq->question }}
                        </h4>
                        <x-description-medium>
                            {{ $faq->answer }}
                        </x-description-medium>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="grid place-items-center">
            <h6 class="font-medium text-[16px] tracking-[32%] text-white">Didn't find an answer? <a href="/faq"
                    class="font-bold text-primary border-b pb-1 border-b-primary">Click here to see more FAQs!</a></h6>
        </div>
    </div>
</section>
