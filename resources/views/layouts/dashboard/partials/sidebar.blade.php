<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform overflow-y-auto">
    <a href="/" class="flex items-center pb-4 border-b border-b-gray-800">
        <span class="text-lg font-bold text-white ml-3">Colossal</span>
    </a>

    <!-- Main -->
    <h2 class="mt-4 py-2 px-4 text-gray-300 font-normal tracking-wide text-xs">MAIN</h2>
    <ul class="mt-2">
        <li class="mb-1 group {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('dashboard.posts*') ? 'active' : '' }}">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-file-paper-2-line mr-3 text-lg"></i>
                <span class="text-sm">Posts</span>
                <x-arrow-right />
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{ route('dashboard.posts.index') }}"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('dashboard.posts.create') }}"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- End Of Main -->

    @can('is_admin')
        <!-- Admin -->
        <h2 class="mt-2 py-2 px-4 text-gray-300 font-normal tracking-wide text-xs">ADMIN</h2>
        <ul class="mt-2">
            <li class="mb-1 group {{ request()->routeIs('dashboard.users*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-user-line mr-3 text-lg"></i>
                    <span class="text-sm">Users</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/users"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/users/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.projects*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-window-line mr-3 text-lg"></i>
                    <span class="text-sm">Projects</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/projects"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/projects/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.project-categories*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-stack-line mr-3 text-lg"></i>
                    <span class="text-sm">Project Categories</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/project-categories"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/project-categories/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.faqs*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-question-answer-line mr-3 text-lg"></i>
                    <span class="text-sm">Faqs</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/faqs"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/faqs/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.faq-categories*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-stack-line mr-3 text-lg"></i>
                    <span class="text-sm">Faq Categories</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/faq-categories"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/faq-categories/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.testimonials*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-file-paper-line mr-3 text-lg"></i>
                    <span class="text-sm">Testimonials</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/testimonials"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/testimonials/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.sponsors*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-bard-line mr-3 text-lg"></i>
                    <span class="text-sm">Sponsors</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/sponsors"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="/dashboard/sponsors/create"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group {{ request()->routeIs('dashboard.quotes*') ? 'active' : '' }}">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-mail-send-line mr-3 text-lg"></i>
                    <span class="text-sm">Quotes</span>
                    <x-arrow-right />
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="/dashboard/quotes"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- End Of Admin -->
    @endcan

    <!-- More -->
    <h2 class="mt-2 py-2 px-4 text-gray-300 font-normal tracking-wide text-xs">MORE</h2>
    <ul class="mt-2">
        <li class="mb-1 group">
            <a href="{{ route('dashboard.settings.index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-settings-2-line mr-3 text-lg"></i>
                <span class="text-sm">Settings</span>
            </a>
        </li>
        <li class="mb-1 group">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit"
                    class="w-full flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-logout-box-line mr-3 text-lg"></i>
                    <span class="text-sm">Logout</span>
                </button>
            </form>
        </li>
    </ul>
    <!-- End Of More -->
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
