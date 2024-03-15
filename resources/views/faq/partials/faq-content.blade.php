<section class="relative max-w-[1025px] mx-auto py-[75px] px-10 lg:px-0 border-t border-t-white/10">
    <div class="flex justify-between items-start flex-col lg:flex-row gap-y-12 lg:gap-y-0 relative z-10">
        <div class="w-full lg:w-[328px] h-full rounded-[3px] bg-white/5 flex flex-col">
            @foreach ($categories as $category)
                <a href="/faq?category={{ $category->id }}"
                    class="text-[16px] transition py-5 px-8 {{ $loop->last ? '' : 'border-b border-b-white/5' }} {{ request()->query('category') == $category->id ? 'text-white font-bold' : 'text-white/60 hover:text-white font-medium' }}">{{ $category->name }}</a>
            @endforeach
        </div>
        <div class="flex flex-col gap-y-[25px] w-full lg:w-fit">
            @foreach ($faqs as $faq)
                <div class="accordion w-full md:w-[650px]">
                    <div class="accordion-item border-b border-b-white/5">
                        <h2
                            class="accordion-header flex justify-between items-center pb-4 cursor-pointer text-white leading-[48px] font-bold text-[14px] md:text-[16px] lg:text-[20px]">
                            <span>{{ $faq->question }}</span>
                            <img class="transition-transform transform select-none"
                                src="{{ asset('/assets/chevron-up.png') }}" alt="Chevron Up">
                        </h2>
                        <div class="accordion-content hidden pb-6">
                            <x-description-medium>{{ $faq->answer }}</x-description-medium>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
