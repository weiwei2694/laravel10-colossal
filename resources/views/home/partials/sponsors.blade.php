<section class="relative w-[1025px] mx-auto pt-[80px]">
    <div class="splide" id="sponsors-card">
        <div class="splide__track py-[40px] border-y-[1px] border-y-white/10">
            <ul class="splide__list flex items-center justify-center">
                @foreach ($sponsors as $sponsor)
                    <li class="splide__slide">
                        <img src="{{ asset('/storage/' . $sponsor->image) }}" alt="{{ $sponsor->name }}"
                            class="opacity-[60%]" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
