<aside id="container-sidebar-filter" class="hidden left-0 top-0 w-full h-full bg-black/40 z-[999]">
    <div id="sidebar-filter" class="max-sm:w-full sm:w-96 h-full bg-white max-sm:border-none sm:border-r">
        <div class="p-[20px] border-b flex justify-between items-center">
            <div class="flex flex-row items-center gap-x-2">
                <h1 class="text-card-dark font-bold text-xl">
                    Filter Quotes
                </h1>
                <i class="ri-filter-2-line text-2xl"></i>
            </div>
            <button id="close-sidebar-filter" type="button"
                class="py-1 px-2 rounded hover:bg-gray-100 cursor-pointer transition">
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.quotes.index') }}" method="GET" class="h-full flex flex-col gap-y-6">
                <div class="flex flex-col gap-y-2">
                    <label for="search" class="font-medium text-card-dark/60">Search</label>
                    <input type="text" class="outline-none p-2 border-2 rounded-lg" id="search" name="search"
                        placeholder="Search by Name or Company" value="{{ request('search') }}">
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="is_read" class="font-medium text-card-dark/60">Is Read</label>
                    <select name="is_read" id="is_read" class="outline-none p-2 border-2 rounded-lg"
                        class="font-semibold">
                        <option value="all" class="font-medium text-card-dark"
                            @if (request('is_read') == 'all') selected @endif>
                            All
                        </option>
                        <option value="yes" class="font-medium text-card-dark"
                            @if (request('is_read') == 'yes') selected @endif>
                            Yes
                        </option>
                        <option value="no" class="font-medium text-card-dark"
                            @if (request('is_read') == 'no') selected @endif>
                            No
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="company_size" class="font-medium text-card-dark/60">Company Size</label>
                    <select name="company_size" id="company_size" class="outline-none p-2 border-2 rounded-lg"
                        class="font-semibold">
                        <option value="all" class="font-medium text-card-dark"
                            @if (request('company_size') === 'all') selected @endif>
                            All
                        </option>
                        @foreach (Quote::COMPANY_SIZE as $size)
                            <option value="{{ $size }}" class="font-medium text-card-dark"
                                @if (request('company_size') === $size) selected @endif>
                                {{ $size }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="text-white font-semibold bg-blue-500 hover:bg-blue-500/90 transition py-2.5 px-3 rounded-[3px]">Apply</button>
            </form>
        </div>
    </div>
</aside>
