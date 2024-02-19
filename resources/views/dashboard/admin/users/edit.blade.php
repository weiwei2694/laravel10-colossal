@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit User</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST" class="flex flex-col gap-[20px]"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name', $user->name) }}"
                        placeholder="name" class="@error('name') dashboard-input__error @else dashboard-input @enderror"
                        autofocus required>
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                        placeholder="email" class="@error('email') dashboard-input__error @else dashboard-input @enderror"
                        required>
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="flex flex-col">
                    <label for="new_password" class="font-medium">New Password (optional)</label>
                    <input type="password" name="new_password" id="new_password" placeholder="new password"
                        class="@error('password') dashboard-input__error @else dashboard-input @enderror">
                    @error('new_password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password Confirmation -->
                <div class="flex flex-col">
                    <label for="new_password_confirmation" class="font-medium">New Password Confirmation</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        placeholder="new password confirmation"
                        class="@error('password') dashboard-input__error @else dashboard-input @enderror">
                    @error('new_password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Role -->
                <div class="flex flex-col">
                    <label for="role" class="font-medium">Role</label>
                    <input type="text" name="role" id="role" autofocus value="{{ old('role', $user->role) }}"
                        placeholder="role" class="@error('role') dashboard-input__error @else dashboard-input @enderror"
                        required>
                    @error('role')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection
