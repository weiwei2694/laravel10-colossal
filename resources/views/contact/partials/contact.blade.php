<section class="relative max-w-[1025px] mx-auto sm:pt-[150px] pt-[75px] pb-[75px]">
    <div class="flex justify-start lg:justify-between items-start lg:items-center flex-col lg:flex-row gap-y-[75px]">
        <div class="flex flex-col gap-y-[16px] md:gap-y-[40px] px-10 lg:px-0">
            <div class="flex flex-col gap-y-[16px]">
                <x-green-title title="CONTACT" />
                <x-description-bold-36 class="max-w-fit md:max-w-[502px]"
                    title="We love receiving messages from you, we are waiting for it." />
            </div>
            <div class="flex flex-col gap-y-6">
                <div class="flex flex-row items-center gap-x-6">
                    <div class="grid place-items-center w-[70px] h-[70px] rounded-[3px] bg-white/5">
                        <img src="{{ asset('/assets/phone-call.png') }}" alt="Phone Call">
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <h6 class="text-white/60 font-medium text-[16px]">Phone</h6>
                        <h4 class="font-bold text-white text-[20px]">+62 1234 8921</h4>
                    </div>
                </div>
                <div class="flex flex-row items-center gap-x-6">
                    <div class="grid place-items-center w-[70px] h-[70px] rounded-[3px] bg-white/5">
                        <img src="{{ asset('/assets/mail.png') }}" alt="Mail">
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <h6 class="text-white/60 font-medium text-[16px]">Email</h6>
                        <h4 class="font-bold text-white text-[20px]">support@collosal.tld</h4>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="rounded-2xl sm:rounded-[5px] w-full lg:w-[412px] h-fit bg-white/5 sm:pt-[58px] pt-[48px] sm:px-[40px] px-10 sm:pb-[40px] pb-[48px]">
            <form class="flex flex-col gap-y-[26px]" method="POST" action={{ route('contact.store') }}>
                @csrf

                <div class="flex gap-x-[20px] flex-col sm:flex-row gap-y-[26px] sm:gap-y-0">
                    <div class="flex flex-col gap-y-[6px] w-full">
                        <label for="name" class="label-quote">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="input-quote @error('name') input-error @enderror">
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-[6px] w-full">
                        <label for="email" class="label-quote">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="input-quote @error('email') input-error @enderror">
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col gap-y-[6px] w-full">
                    <label for="subject" class="label-quote">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                        class="input-quote @error('subject') input-error @enderror">
                    @error('subject')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-[6px] w-full">
                    <label for="message" class="label-quote">Message</label>
                    <textarea name="message" id="message" class="input-quote resize-none @error('message') input-error @enderror"
                        rows="8">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn-send-quote w-full">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
