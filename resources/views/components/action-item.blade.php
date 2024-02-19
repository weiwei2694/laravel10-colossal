@props(['url'])

<a href="{{ $url }}"
    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-gray-600 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none">{{ $slot }}</a>
