@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">All Users</h1>
        </div>
        <div class="p-[20px]">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Role
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Admin
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ $user->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $user->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $user->role }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $user->is_admin ? 'Yes' : 'No' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                                <div class="flex items-center gap-x-[20px]">
                                                    <x-action-item url="#">
                                                        Delete
                                                    </x-action-item>
                                                    <x-action-item
                                                        url="{{ route('dashboard.users.show', $user->id) }}">View</x-action-item>
                                                    <x-action-item
                                                        url="{{ route('dashboard.users.edit', $user->id) }}">Edit</x-action-item>
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
                {{ $users->links() }}
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
