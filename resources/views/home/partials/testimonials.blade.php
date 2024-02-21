<section class="relative max-w-[1025px] mx-auto pt-[150px]">
    <div
        class="bg-[#16FCD2] w-[438.93px] h-[431.03px] rotate-[14.13deg] absolute z-0 -right-[100px] bottom-0 rounded-full opacity-[10%] blur-3xl">
    </div>

    <div class="relative z-10 flex flex-col">
        <div class="flex text-center items-center flex-col gap-y-[16px] px-10 lg:px-0">
            <x-green-title title="TESTIMONIAL" />
            <x-description-bold>
                What do our clients say that we<br /> never let down?
            </x-description-bold>
        </div>
        <div class="splide px-5 lg:px-0" id="testimonials-card">
            <div class="splide__track pb-[80px] py-[150px]">
                <ul class="splide__list">
                    @foreach ($testimonials as $testimonial)
                        <li class="splide__slide px-[10px] flex justify-center">
                            <x-testimonial-card :image="$testimonial->image" :name="$testimonial->name" :companyname="$testimonial->company_name" :content="$testimonial->content"
                                class="testimonial-card" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
