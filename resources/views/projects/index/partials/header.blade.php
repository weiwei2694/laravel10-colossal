<section class="relative max-w-[1025px] mx-auto pt-[150px] pb-[75px] px-10 lg:px-0">
    <div class="flex justify-between items-center">
        <div class="flex flex-col gap-y-[16px]">
            <x-green-title title="projects" />
            <x-description-bold-36 class="max-w-fit md:max-w-[600px]"
                title="We have completed many amazing projects that you will not believe" />
        </div>
        <div>
            <select name="category" id="category"
                class="bg-white/10 text-white/40 outline-none border-none py-2 px-4 rounded-sm">
                @foreach ($categories as $category)
                    <option class="text-card-dark" value="{{ $category->id }}"
                        @if (request()->has('category') && request()->category == $category->id) selected @endif>{{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</section>
