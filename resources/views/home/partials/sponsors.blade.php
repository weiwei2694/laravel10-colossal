@section('styles')
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
@endsection

<section class="relative w-[1025px] mx-auto pt-[80px]">
    <div class="splide">
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

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>
    <script>
        const splide = new Splide('.splide', {
            arrows: false,
            perPage: 3,
            autoScroll: {
                speed: 2,
                rewind: true,
                pauseOnHover: false,
            },
            pagination: false
        });

        splide.mount(window.splide.Extensions);
    </script>
@endsection
