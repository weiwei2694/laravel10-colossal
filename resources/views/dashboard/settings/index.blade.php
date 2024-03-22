@extends('layouts.dashboard.dashboard')

@section('content')
    <section class="border bg-white rounded shadow-sm">
        <div class="py-[20px] mx-[20px] border-b flex flex-col gap-y-2">
            <h1 class="font-semibold text-black text-xl">Account</h1>
            <p class="font-normal text-card-dark">Manage your profile</p>
        </div>
        <div class="flex flex-col gap-y-[4rem] px-[20px] py-[40px]">
            {{-- Update Profile --}}
            <form action="{{ route('dashboard.settings.update-profile', auth()->id()) }}" method="POST"
                enctype="multipart/form-data" class="flex flex-col gap-y-10 max-lg:w-full lg:w-[600px]">
                @csrf
                @method('PUT')

                <div class="flex flex-row gap-x-6 items-center">
                    <img id="image-profile" src="{{ asset('/storage/' . auth()->user()->image) }}"
                        alt="{{ auth()->user()->name }}" class="w-[140px] h-[140px] object-cover rounded-full">
                    <div class="flex flex-col gap-y-1">
                        <h4 class="font-semibold text-black text-lg">Profile picture</h4>
                        <p class="font-medium text-sm text-black/60">PNG, JPG up to 3mb</p>
                        <label for="image" class="mt-1 font-medium text-blue-500 text-sm cursor-pointer">Update</label>
                        <input onchange="loadFile(event)" type="file" id="image" name="image" class="hidden"
                            accept="image/png, image/jpeg">
                    </div>
                </div>

                <div class="flex flex-col gap-y-5">
                    <h4 class="font-semibold text-black text-lg">Details</h4>
                    <div class="flex max-lg:flex-col lg:flex-row max-lg:gap-x-0 lg:gap-x-5 max-lg:gap-y-5 lg:gap-y-0">
                        <div class="flex flex-col gap-y-1 w-full">
                            <label for="name" class="text-black font-medium">Name</label>
                            <input type="text" name="name" id="name"
                                value="{{ old('name', auth()->user()->name) }}"
                                class="settings__input @error('name') settings__input-error @enderror" required autofocus>
                            @error('name')
                                <span class="settings__invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-y-1 w-full">
                            <label for="email" class="text-black font-medium">Email Address</label>
                            <input type="email" name="email" id="email"
                                value="{{ old('email', auth()->user()->email) }}"
                                class="settings__input @error('email') settings__input-error @enderror" required>
                            @error('email')
                                <span class="settings__invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="bio" class="text-black font-medium">Bio</label>
                        <textarea name="bio" id="email" class="settings__textarea @error('bio') settings__input-error @enderror"
                            rows="8">{{ old('bio', auth()->user()->bio) }}</textarea>
                        @error('bio')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-1 w-full">
                        <label for="twitter" class="text-black font-medium">Twitter</label>
                        <input type="text" name="twitter" id="twitter"
                            value="{{ old('twitter', auth()->user()->twitter) }}"
                            class="settings__input @error('twitter') settings__input-error @enderror">
                        @error('twitter')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-1 w-full">
                        <label for="facebook" class="text-black font-medium">Facebook</label>
                        <input type="text" name="facebook" id="facebook"
                            value="{{ old('facebook', auth()->user()->facebook) }}"
                            class="settings__input @error('facebook') settings__input-error @enderror">
                        @error('facebook')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-1 w-full">
                        <label for="linkedin" class="text-black font-medium">Linkedin</label>
                        <input type="text" name="linkedin" id="linkedin"
                            value="{{ old('linkedin', auth()->user()->linkedin) }}"
                            class="settings__input @error('linkedin') settings__input-error @enderror">
                        @error('linkedin')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="mt-2 rounded-full px-6 py-2.5 bg-blue-500 hover:bg-blue-600 hover:ring-4 hover:ring-blue-300 transition font-medium text-white w-fit focus:ring-4 focus:bg-blue-600 focus:ring-blue-300 outline-none">Save</button>
                </div>
            </form>

            {{-- Update Password --}}
            <form action="{{ route('dashboard.settings.update-password', auth()->id()) }}" method="POST"
                enctype="multipart/form-data" class="flex flex-col gap-y-10 max-lg:w-full lg:w-[600px]">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-y-5">
                    <h4 class="font-semibold text-black text-lg">Change Password</h4>
                    <div class="flex flex-col gap-y-1 w-full">
                        <label for="current_password" class="text-black font-medium">Current Password</label>
                        <input type="password" name="current_password" id="current_password"
                            class="settings__input @error('current_password') settings__input-error @enderror">
                        @error('current_password')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-1 w-full">
                        <label for="new_password" class="text-black font-medium">New Password</label>
                        <input type="password" name="new_password" id="new_password"
                            class="settings__input @error('new_password') settings__input-error @enderror">
                        @error('new_password')
                            <span class="settings__invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="mt-2 rounded-full px-6 py-2.5 bg-blue-500 hover:bg-blue-600 hover:ring-4 hover:ring-blue-300 transition font-medium text-white w-fit focus:ring-4 focus:bg-blue-600 focus:ring-blue-300 outline-none">Save</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    @error('image')
        <script>
            const errorMessage = {!! json_encode($message) !!};
            Swal.fire({
                title: errorMessage,
                icon: "error"
            });
        </script>
    @enderror

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
        function loadFile(event) {
            const imageProfile = document.getElementById('image-profile');
            imageProfile.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
