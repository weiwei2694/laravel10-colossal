@props(['title'])

<h1
    {{ $attributes->merge(['class' => 'text-white font-bold text-[24px] sm:text-[32px] lg:text-[36px] leading-[44px] sm:leading-[54px]']) }}>
    {{ $title }}</h1>
