@extends('layouts.app.app')

@section('content')
    <section class="relative max-w-[1025px] mx-auto pt-[150px] pb-[75px]">
        <div class="flex justify-start lg:justify-between items-start lg:items-center flex-col lg:flex-row gap-y-[75px]">
            <div class="flex flex-col gap-y-[16px] md:gap-y-[40px] px-10 lg:px-0">
                <div class="flex flex-col gap-y-[16px]">
                    <x-green-title title="SEND QUOTE" />
                    <x-description-bold-36 class="max-w-fit md:max-w-[502px]"
                        title="Tell us about your problem and how we can help"></x-description-bold-36>
                </div>
                <x-description-medium class="max-w-fit md:max-w-[504px]">
                    We are happy to help you, tell us what is the problem with your company, and we are ready to
                    answer
                    these problems. It usually takes a few minutes for us to respond.
                </x-description-medium>
                <x-button-ask-us />
            </div>
            <div
                class="rounded-2xl sm:rounded-[5px] w-full lg:w-[412px] h-fit bg-white/5 sm:pt-[58px] pt-[48px] sm:px-[40px] px-10 sm:pb-[40px] pb-[48px]">
                <form class="flex flex-col gap-y-[26px]">
                    <div class="flex gap-x-[20px] flex-col sm:flex-row gap-y-[26px] sm:gap-y-0">
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label for="name" class="label-quote">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="input-quote">
                        </div>
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label for="email" class="label-quote">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="input-quote">
                        </div>
                    </div>
                    <div class="flex gap-x-[20px] flex-col sm:flex-row gap-y-[26px] sm:gap-y-0">
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label for="company" class="label-quote">Company</label>
                            <input type="text" id="company" name="company" value="{{ old('company') }}" required
                                class="input-quote">
                        </div>
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label for="company_size" class="label-quote">Company Size</label>
                            <input type="text" id="company_size" name="company_size" value="{{ old('company_size') }}"
                                required class="input-quote">
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-[6px] w-full">
                        <label for="company" class="label-quote">Tell Us Your Problem</label>
                        <textarea class="input-quote resize-none" rows="8">{{ old('problem') }}</textarea>
                    </div>
                    <button type="submit" class="btn-send-quote w-full">
                        Send Quote
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
