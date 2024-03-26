@extends('layouts.app.app')

@section('content')
    <section class="relative max-w-[1025px] mx-auto sm:pt-[150px] pt-[75px] pb-[75px]">
        <div class="flex justify-start lg:justify-between items-start lg:items-center flex-col lg:flex-row gap-y-[75px]">
            <div class="flex flex-col gap-y-[16px] md:gap-y-[40px] px-10 lg:px-0">
                <div class="flex flex-col gap-y-[16px]">
                    <x-green-title title="SEND QUOTE" />
                    <x-description-bold-36
                        class="max-w-fit md:max-w-[502px]"
                        title="Tell us about your problem and how we can help"
                    ></x-description-bold-36>
                </div>
                <x-description-medium class="max-w-fit md:max-w-[504px]">
                    We are happy to help you, tell us what is the problem with your company, and we are ready to
                    answer
                    these problems. It usually takes a few minutes for us to respond.
                </x-description-medium>
                <a
                    href="/"
                    class="w-[162px] h-[52px] grid place-items-center bg-white/10 text-white rounded-3"
                >Ask
                    Us</a>
            </div>
            <div
                class="rounded-2xl sm:rounded-[5px] w-full lg:w-[412px] h-fit bg-white/5 sm:pt-[58px] pt-[48px] sm:px-[40px] px-10 sm:pb-[40px] pb-[48px]">
                <form
                    class="flex flex-col gap-y-[26px]"
                    action="{{ route('quote.store') }}"
                    method="POST"
                >
                    @csrf

                    <div class="flex gap-x-[20px] flex-col sm:flex-row gap-y-[26px] sm:gap-y-0">
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label
                                for="name"
                                class="label-quote"
                            >Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="input-quote @error('name') input-error @enderror"
                            >
                            @error('name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label
                                for="email"
                                class="label-quote"
                            >Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="input-quote @error('email') input-error @enderror"
                            >
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-x-[20px] flex-col sm:flex-row gap-y-[26px] sm:gap-y-0">
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label
                                for="company"
                                class="label-quote"
                            >Company</label>
                            <input
                                type="text"
                                id="company"
                                name="company"
                                value="{{ old('company') }}"
                                required
                                class="input-quote @error('company') input-error @enderror"
                            >
                            @error('company')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-y-[6px] w-full">
                            <label
                                for="company_size"
                                class="label-quote"
                            >Company Size</label>
                            <select
                                name="company_size"
                                id="company_size"
                                class="input-quote @error('company_size') input-error @enderror"
                                required
                            >
                                @foreach ($company_sizes as $company_size)
                                    <option
                                        class="text-card-dark"
                                        value="{{ $company_size }}"
                                        @if ($company_size === old('company_size')) selected @endif
                                    >
                                        {{ $company_size }}</option>
                                @endforeach
                            </select>
                            @error('company_size')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-[6px] w-full">
                        <label
                            for="problem"
                            class="label-quote"
                        >Tell Us Your Problem</label>
                        <textarea
                            name="problem"
                            id="problem"
                            class="input-quote resize-none @error('problem') input-error @enderror"
                            rows="8"
                        >{{ old('problem') }}</textarea>
                        @error('problem')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <button
                        type="submit"
                        class="btn-send-quote w-full"
                    >
                        Send Quote
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @if (session('success'))
        <script>
            const successMessage = {!! json_encode(session('success')) !!};
            Swal.fire({
                title: successMessage,
                icon: "success"
            });
        </script>
    @endif
@endsection
