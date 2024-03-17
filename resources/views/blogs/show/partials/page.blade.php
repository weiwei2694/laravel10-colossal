<section class="relative max-w-[1025px] mx-auto sm:pt-[150px] pt-[75px] pb-[75px] px-10 lg:px-0">
    <div class="flex flex-col gap-y-[90px]">
        {{-- Header --}}
        <header class="grid place-items-center text-center">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="PAGE" />
                <x-description-bold-36 class="max-w-fit md:max-w-[507px]" :title="$post->title" />
                <div class="flex flex-row justify-center gap-x-2 font-normal text-[14px] text-white/60">
                    <p>
                        {{ $post->created_at->format('M d') }}
                    </p>
                    <p>
                        •
                    </p>
                    <p>
                        {{ $post->reading_time }}
                    </p>
                </div>
            </div>
        </header>

        {{-- Main --}}
        <main class="flex flex-col gap-y-[45px]">
            {{-- Image --}}
            <div class="grid place-items-center">
                <img src="{{ asset('/storage/' . $post->image) }}" alt="Image Blog"
                    class="w-full lg:w-[850px] h-full lg:h-[594px]">
            </div>
            {{-- Body --}}
            <div class="text-white mx-auto w-full md:w-[674px]">
                {!! $post->body !!}
            </div>
            {{-- Tags --}}
            <div class="mx-auto w-full md:w-[674px] flex items-center flex-wrap gap-4">
                @foreach (json_decode($post->tags) as $tag)
                    <div
                        class="px-6 py-2 rounded-[100px] border border-white/10 bg-white/5 text-white font-medium text-[14px]">
                        {{ $tag }}
                    </div>
                @endforeach
            </div>
            {{-- Card Author --}}
            <div class="mt-12 mx-auto w-full md:w-[674px] p-12 rounded-[3px] bg-white/5">
                <div class="flex flex-col md:flex-row gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-12">
                    <img src="{{ asset('/storage/' . $post->user->image) }}" alt="{{ $post->user->name }}"
                        class="w-[101px] h-[101px] object-cover rounded-full">
                    <div class="flex flex-col gap-y-6 p-2">
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-y-3 sm:gap-y-0">
                            <div class="flex flex-col gap-y-1">
                                <h4 class="font-semibold text-white text-[20px]">{{ $post->user->name }}</h4>
                                <p class="text-white/60 font-semibold text-[12px]">{{ $post->user->role }}</p>
                            </div>
                            <div class="flex flex-row gap-x-2">
                                @if ($post->user->twitter)
                                    <a href="{{ $post->user->twitter }}"
                                        class="w-[40px] h-[40px] grid place-items-center rounded-[100px] bg-white/5"
                                        target="_blank">
                                        <img src="{{ asset('/assets/twitter.png') }}" alt="Twitter">
                                    </a>
                                @endif
                                @if ($post->user->facebook)
                                    <a href="{{ $post->user->facebook }}"
                                        class="w-[40px] h-[40px] grid place-items-center rounded-[100px] bg-white/5"
                                        target="_blank">
                                        <img src="{{ asset('/assets/facebook (1).png') }}" alt="Facebook">
                                    </a>
                                @endif
                                @if ($post->user->linkedin)
                                    <a href="{{ $post->user->linkedin }}"
                                        class="w-[40px] h-[40px] grid place-items-center rounded-[100px] bg-white/5"
                                        target="_blank">
                                        <img src="{{ asset('/assets/linkedin.png') }}" alt="Linkedin">
                                    </a>
                                @endif
                            </div>
                        </div>
                        <p class="text-white font-medium leading-[34px] text-[16px]">
                            {{ $post->user->bio }}
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
