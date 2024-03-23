@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">New User</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.users.store') }}" method="POST"
                class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="dashboard__label">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name') }}"
                        class="dashboard__input @error('name') dashboard__input-error @enderror" required>
                    @error('name')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="dashboard__label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="dashboard__input @error('email') dashboard__input-error @enderror" required>
                    @error('email')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="flex flex-col">
                    <label for="password" class="dashboard__label">Password</label>
                    <input type="password" name="password" id="password"
                        class="dashboard__input @error('password') dashboard__input-error @enderror" required>
                    @error('password')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="flex flex-col">
                    <label for="password_confirmation" class="dashboard__label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="dashboard__input @error('password') dashboard__input-error @enderror" required>
                    @error('password')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Role -->
                <div class="flex flex-col">
                    <label for="role" class="dashboard__label">Role</label>
                    <input type="text" name="role" id="role" value="{{ old('role') }}"
                        class="dashboard__input @error('role') dashboard__input-error @enderror" required>
                    @error('role')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="dashboard__label">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        class="dashboard__input @error('image') dashboard__input-error @enderror" required
                        accept="image/png, image/jpeg">
                    @error('image')
                        <span class="dashboard__input-feedback">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img id="image-preview" class="dashboard__image-preview">
                </div>

                <!-- Submit -->
                <button class="dashboard__primary-btn">Save</button>
                <!-- End Of Submit -->
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function loadFile(event) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
