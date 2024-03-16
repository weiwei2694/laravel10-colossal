<section class="relative max-w-[1025px] mx-auto pt-[75px] px-10 lg:px-0 border-t border-t-white/10">
    <div id="data-wrapper" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-16 gap-x-8">
        @include('components.cards-blog')
    </div>
    <div id="container-load-more" class="grid place-items-center pt-[90px]">
        <button id="load-more"
            class="bg-white/10 text-white rounded-[3px] w-[193px] h-[52px] grid place-items-center">Load More</button>
    </div>
</section>
