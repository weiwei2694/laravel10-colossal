@foreach ($comments as $comment)
    <div class="flex flex-col sm:flex-row gap-6 sm:gap-8 border-b border-b-white/10 py-12">
        <img src="{{ asset('/assets/comment-pp.jpg') }}" alt="Comment PP"
            class="w-[50px] h-[50px] rounded-[100px] object-cover">
        <div class="flex flex-col gap-y-4 sm:gap-y-6">
            <div>
                <h4 class="font-semibold text-[20px] text-white">{{ $comment->name }}</h4>
                <p class="font-normal text-white/60 text-[14px]">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
            <p class="font-medium text-white text-[16px] leading-[32px]">{{ $comment->content }}</p>
        </div>
    </div>
@endforeach
