<section class="py-[125px] mt-[75px] max-w-[1308px] mx-auto bg-[#221048] rounded-[30px] px-10 lg:px-0">
    <div class="max-w-[1025px] mx-auto flex items-center flex-col gap-y-[70px]">
        <div class="flex flex-col items-center text-center gap-y-[16px] w-full lg:w-[500px]">
            <x-green-title title="GET STARTED" />
            <x-description-bold>
                What do you need? Choose a service that can help you
            </x-description-bold>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px]">
            @foreach ($pricing as $i => $item)
                <x-pricing-card
                    class="{{ $item['title'] === 'UI Design' ? 'bg-[#3F2379]' : ($item['title'] === 'Development' ? 'bg-[#233679]' : ($item['title'] === 'Maintenance' ? 'bg-[#792366]' : '')) }}"
                    :title="$item['title']" :price="$item['price']" :lists="$item['lists']" />
            @endforeach
        </div>
    </div>
</section>
