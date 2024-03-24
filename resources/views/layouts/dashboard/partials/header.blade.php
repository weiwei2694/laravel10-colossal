<div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4 capitalize" id="navbar-path">
        {{-- js/dashboad.js@Path --}}
    </ul>
    <div class="ml-auto">
        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}"
            class="w-8 h-8 rounded block object-cover align-middle">
    </div>
</div>
