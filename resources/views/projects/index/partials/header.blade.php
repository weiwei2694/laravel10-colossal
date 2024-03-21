<section class="relative max-w-[1025px] mx-auto sm:pt-[150px] pt-[75px] pb-[75px] px-10 lg:px-0">
    <div class="flex justify-between items-start md:items-center flex-col md:flex-row gap-y-[24px] md:gap-y-[0px]">
        <div class="flex flex-col gap-y-[16px]">
            <x-green-title title="projects" />
            <x-description-bold-36 class="max-w-fit md:max-w-[600px]"
                title="We have completed many amazing projects that you will not believe" />
        </div>
        @if (!$categories->isEmpty())
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
        @endif
    </div>
</section>
