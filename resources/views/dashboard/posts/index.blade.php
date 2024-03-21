@extends('layouts.dashboard.dashboard')

@section('content')
    <div class="flex flex-col gap-y-3">
        <section class="border bg-white rounded shadow-sm p-[20px] max-xl:hidden xl:block">
            <h1 class="font-semibold text-black text-lg">All Posts</h1>
        </section>
        <section class="border bg-white rounded shadow-sm">
            <div class="p-[20px] border-b">
                {{-- desktop --}}
                <form id="filterForm" action="{{ route('dashboard.posts.index') }}" method="GET"
                    class="max-xl:hidden xl:flex">
                    <div class="flex flex-col gap-y-2">
                        <label for="search" class="font-medium text-card-dark/60">Search</label>
                        <div class="flex flex-row gap-x-2">
                            <input type="text" class="outline-none p-2 border-2 rounded-lg w-72" id="search"
                                name="search" placeholder="Search by Title, Subtitle or Tags"
                                value="{{ request('search') }}">
                            <button type="submit"
                                class="h-full px-8 grid place-items-center bg-blue-500 hover:bg-blue-500/90 font-semibold text-white rounded-lg">Search</button>
                        </div>
                    </div>
                </form>

                {{-- mobile - tablet --}}
                <div class="max-xl:flex flex-row justify-between xl:hidden">
                    <h1 class="font-semibold text-black text-lg">All Posts</h1>
                    <button id="open-sidebar-filter" type="button" class="text-lg text-gray-600">
                        <i class="ri-menu-line"></i>
                    </button>
                </div>
            </div>
            <div class="p-[20px]">
                @if ($posts->isEmpty())
                    <div class="grid place-items-center">
                        <h4 class="text-card-dark/60 font-semibold">No Posts ...</h4>
                    </div>
                @else
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Id
                                                </th>
                                                @can('is_admin')
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                        User Id
                                                    </th>
                                                @endcan
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Subtitle
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Reading
                                                    Time
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Tags
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        {{ $post->id }}</td>
                                                    @can('is_admin')
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                            {{ $post->user_id }}</td>
                                                    @endcan
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        {{ $post->title }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                        {{ $post->subtitle }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                        {{ $post->reading_time }} min</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                        @foreach (json_decode($post->tags) as $tag)
                                                            <span
                                                                class="py-1 px-2 rounded bg-blue-500 text-white font-medium">{{ $tag }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                                        <div class="flex items-center gap-x-[20px]">
                                                            <div>
                                                                <form id="delete-form"
                                                                    action="{{ route('dashboard.posts.destroy', '__id__') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>

                                                                <button onclick="deletePost({{ $post->id }})"
                                                                    type="button"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-gray-600 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                            <x-action-item
                                                                url="{{ route('dashboard.posts.show', $post->id) }}">View</x-action-item>
                                                            <x-action-item
                                                                url="{{ route('dashboard.posts.edit', $post->id) }}">Edit</x-action-item>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-start pt-[20px]">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
        </section>
    </div>

    {{-- Sidebar Filter Form - (mobile - tablet) --}}
    @include('dashboard.posts.partials.filter-form-sidebar')
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

    <script>
        function deletePost(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this item!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    const deleteForm = document.getElementById('delete-form');
                    deleteForm.action = deleteForm.action.replace('__id__', id);
                    deleteForm.submit();
                }
            });
        }

        // Filter Form - (mobile - tablet)
        const containerSidebarFilter = document.getElementById('container-sidebar-filter');
        const sidebarFilter = document.getElementById('sidebar-filter');
        const openSidebarFilter = document.getElementById('open-sidebar-filter');
        const closeSidebarFilter = document.getElementById('close-sidebar-filter');

        containerSidebarFilter.addEventListener('click', function(event) {
            if (!sidebarFilter.contains(event.target)) {
                containerSidebarFilter.classList.remove('fixed');
                containerSidebarFilter.classList.add('hidden');
            }
        });

        openSidebarFilter.addEventListener('click', function() {
            containerSidebarFilter.classList.remove('hidden');
            containerSidebarFilter.classList.add('fixed');
        });

        closeSidebarFilter.addEventListener('click', function() {
            containerSidebarFilter.classList.remove('fixed');
            containerSidebarFilter.classList.add('hidden');
        })
    </script>
@endsection
