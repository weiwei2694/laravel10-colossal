<section class="relative max-w-[1025px] mx-auto pt-[150px] pb-[40px] px-10 lg:px-0 border-t border-t-white/10">
    <div class="flex flex-col gap-y-[65px] mx-auto w-full md:w-[678px]">
        <x-description-bold class="text-center">Responses</x-description-bold>
        <div id="data-wrapper" class="flex flex-col">
            <div class="flex flex-row gap-x-8 border-b border-b-white/10 py-12">
                <img src="{{ asset('/assets/comment-pp.jpg') }}" alt="Comment PP"
                    class="w-[50px] h-[50px] rounded-[100px] object-cover">
                <div class="flex flex-col gap-y-6">
                    <div>
                        <h4 class="font-semibold text-[20px] text-white">Robert Fox</h4>
                        <p class="font-normal text-white/60 text-[14px]">8 min ago</p>
                    </div>
                    <p class="font-medium text-white text-[16px] leading-[32px]">Moveth fish were living fruitful
                        created from dry his
                        one dry sea you're. It greater doesn't
                        replenish replenish divide moveth. They're under itself without given a male light years fruit
                        rule sea moveth.</p>
                </div>
            </div>
            <div class="flex flex-row gap-x-8 border-b border-b-white/10 py-12">
                <img src="{{ asset('/assets/comment-pp.jpg') }}" alt="Comment PP"
                    class="w-[50px] h-[50px] rounded-[100px] object-cover">
                <div class="flex flex-col gap-y-6">
                    <div>
                        <h4 class="font-semibold text-[20px] text-white">Ralph Edwards</h4>
                        <p class="font-normal text-white/60 text-[14px]">20 min ago</p>
                    </div>
                    <p class="font-medium text-white text-[16px] leading-[32px]">Upon have, rule grass made fish Day
                        seed. In fowl his life third appear they're sixth heaven fifth fourth darkness. Man. Lights
                        heaven. Fowl yielding two female Bring bring, rule fifth Upon under male.</p>
                </div>
            </div>
        </div>
        <div class="bg-white/5 rounded-[3px] py-12 px-10">
            <form class="flex flex-col gap-y-10" action="{{ route('blogs.create-comment', $post->id) }}" method="POST">
                @csrf

                <div class="flex flex-col lg:flex-row gap-x-6">
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
                        id="content" name="content" rows="6" required>
                    </textarea>
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
