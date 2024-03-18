<section class="relative max-w-[1025px] mx-auto pt-[150px] pb-[40px] border-t border-t-white/10">
    <div class="flex flex-col gap-y-[65px] mx-auto w-full md:w-[678px]">
        <div class="px-10 lg:px-0 flex flex-col gap-y-[65px]">
            <x-description-bold class="text-center">Responses</x-description-bold>
            <div id="data-wrapper" class="flex flex-col">
                @if (!empty($post->comments->toArray()))
                    @include('components.cards-comment')
                @else
                    <x-description-medium class="text-center">No comments yet ...</x-description-medium>
                @endif
            </div>
            @if (!empty($post->comments->toArray()))
                <div id="container-load-more" class="grid place-items-center">
                    <button id="load-more"
                        class="bg-white/10 text-white rounded-[3px] w-[193px] h-[52px] grid place-items-center">Load
                        More</button>
                </div>
            @endif
        </div>
        <div class="bg-white/5 rounded-[3px] py-12 px-10">
            <form class="flex flex-col gap-y-10" action="{{ route('blogs.create-comment', $post->id) }}" method="POST">
                @csrf

                <div class="flex flex-col lg:flex-row gap-y-10 lg:gap-y-0 gap-x-0 lg:gap-x-6">
                    <div class="flex flex-col gap-y-2 w-full">
                        <label for="name" class="font-normal text-white/60 text-[14px]">Name</label>
                        <input type="text" id="name" name="name"
                            class="outline-none border border-white/10 bg-transparent text-white py-2 px-6 rounded-[3px] w-full @error('name') 'input-error' @enderror"
                            required>
                        @error('name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-2 w-full">
                        <label for="email" class="font-normal text-white/60 text-[14px]">Email</label>
                        <input type="email" id="email" name="email"
                            class="outline-none border border-white/10 bg-transparent text-white py-2 px-6 rounded-[3px] w-full @error('email') 'input-error' @enderror"
                            required>
                        @error('email')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col gap-y-2 w-full">
                    <label for="content" class="font-normal text-white/60 text-[14px]">Content</label>
                    <textarea
                        class="outline-none border border-white/10 bg-transparent text-white py-2 px-6 rounded-[3px] w-full resize-none @error('content') 'input-error' @enderror"
                        id="content" name="content" rows="6" required></textarea>
                    @error('content')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button class="btn-send-quote w-[226px]" text="submit">Post Comment</button>
                </div>
            </form>
        </div>
    </div>
</section>
