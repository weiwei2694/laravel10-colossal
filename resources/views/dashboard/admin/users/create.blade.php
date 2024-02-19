@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="p-[20px] border-b">
            <h1 class="font-semibold text-black text-lg">New User</h1>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.users.store') }}" method="POST" class="flex flex-col gap-[20px]"
                enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="font-medium">Name</label>
                    <input type="text" name="name" id="name" autofocus value="{{ old('name') }}"
                        placeholder="name" class="@error('name') dashboard-input__error @else dashboard-input @enderror"
                        required>
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email"
                        class="@error('email') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="flex flex-col">
                    <label for="password" class="font-medium">Password</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}"
                        placeholder="password"
                        class="@error('password') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="flex flex-col">
                    <label for="password_confirmation" class="font-medium">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        value="{{ old('password_confirmation') }}" placeholder="password confirmation"
                        class="@error('password') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Role -->
                <div class="flex flex-col">
                    <label for="role" class="font-medium">Role</label>
                    <input type="text" name="role" id="role" value="{{ old('role') }}" placeholder="role"
                        class="@error('role') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('role')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col">
                    <label for="image" class="font-medium">Image</label>
                    <input onchange="loadFile(event)" type="file" name="image" id="image"
                        value="{{ old('image') }}" placeholder="image"
                        class="@error('image') dashboard-input__error @else dashboard-input @enderror" required>
                    @error('image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <img id="image-preview" class="w-fit h-fit">
                </div>

                <!-- Submit -->
                <button
                    class="bg-blue-500 hover:bg-blue-500/90 disabled:bg-blue-500/60 text-white py-2 px-8 w-fit rounded font-medium outline-none">Save</button>
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
