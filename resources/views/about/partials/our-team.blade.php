<section class="relative max-w-[1025px] mx-auto pt-[150px] pb-[75px] px-10 lg:px-0">
    <div class="flex flex-col gap-y-[75px] lg:gap-y-[100px]">
        <div class="grid place-items-center text-center">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="OUR TEAM" />
                <x-description-bold class="max-w-fit md:max-w-[507px]">
                    Meet the team! All creative people are here
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-6">
                @foreach ($ourTeams as $user)
                    <div class="rounded-[3px] overflow-hidden bg-white/5">
                        <img src="{{ asset('/storage/' . $user->image) }}" alt="{{ $user->name }}" height="356"
                            class="w-full object-cover">
                        <div class="p-8 flex flex-col gap-y-2">
                            <h4 class="text-white font-bold text-[18px]">{{ $user->name }}</h4>
                            <h6 class="text-white/60 font-medium text-[14px]">{{ $user->role }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
