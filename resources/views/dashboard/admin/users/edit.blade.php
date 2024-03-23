@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">Edit User</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name', $user->name) }}"
                        class="dashboard__input @error('name') dashboard__input-error @enderror" autofocus required>
                    @error('name')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="dashboard__label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                        class="dashboard__input @error('email') dashboard__input-error @enderror" required>
                    @error('email')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="flex flex-col">
                    <label for="new_password" class="dashboard__label">New Password (optional)</label>
                    <input type="password" name="new_password" id="new_password"
                        class="dashboard__input @error('new_password') dashboard__input-error @enderror">
                    @error('new_password')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password Confirmation -->
                <div class="flex flex-col">
                    <label for="new_password_confirmation" class="dashboard__label">New Password Confirmation</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="dashboard__input @error('new_password') dashboard__input-error @enderror">
                    @error('new_password')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Role -->
                <div class="flex flex-col">
                    <label for="role" class="dashboard__label">Role</label>
                    <input type="text" name="role" id="role" autofocus value="{{ old('role', $user->role) }}"
                        class="dashboard__input @error('role') dashboard__input-error @enderror" required>
                    @error('role')
                        <span class="dashboard__invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button class="dashboard__primary-btn">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection
