@foreach ($blogs as $blog)
    <div class="flex flex-col gap-y-4 sm:gap-y-6">
        <div class="h-[220px] rounded-[3px] overflow-hidden">
            <img src="{{ asset('/storage/' . $blog->image) }}" alt="Image Blog" class="w-full lg:w-fit object-cover" />
        </div>
        <div class="flex flex-col gap-y-1 sm:gap-y-2">
            <a href="{{ route('blogs.show', $blog->id) }}">
                <h4
                    class="text-white leading-[34px] font-bold
                        text-[20px] hover:underline hover:text-white/90 cursor-pointer">
                    {{ $blog->title }}
                </h4>
            </a>
            <p class="font-medium leading-[34px] text-[18px] text-white/60">
                {{ $blog->subtitle }}</p>
        </div>
        <div class="flex flex-row gap-x-4">
            <img src="{{ asset('/storage/' . $blog->user->image) }}" alt="{{ $blog->user->name }}"
                class="w-[50px] h-[50px] object-cover rounded-full">
            <div class="flex flex-col gap-y-2">
                <h6 class="font-semibold text-[16px] text-white">{{ $blog->user->name }}</h6>
                <div class="flex flex-row gap-x-2 font-normal text-[14px] text-white/60">
                    <p>
                        {{ $blog->created_at->format('M d') }}
                    </p>
                    <p>
                        •
                    </p>
                    <p>
                        {{ $blog->reading_time }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
