<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-card-dark h-screen max-h-screen grid place-items-center">
    {{-- Main --}}
    <main class="p-[30px] rounded-[3px] bg-white shadow flex flex-col space-y-[15px] w-[400px]">
        <h1 class="text-center text-[34px] font-semibold text-[#181818]">Login</h1>

        <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-y-[20px]">
            @csrf

            {{-- Email --}}
            <div class="flex flex-col gap-y-[3px]">
                <label for="email" class="label">Email</label>
                <input type="email" placeholder="Email" id="email" name="email" autofocus
                    class="input @error('email') input-error @enderror" value="{{ old('email') }}" required />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="flex flex-col gap-y-[3px]">
                <label for="password" class="label">Password</label>
                <input type="password" placeholder="Password" id="password" name="password"
                    class="input @error('email') input-error @enderror" required />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="rounded-[3px] w-full h-[40px] p-[20px] flex items-center justify-center gap-x-[8px] font-sans font-semibold text-[16px] disabled:cursor-not-allowed bg-[#181818] hover:bg-[#181818]/90 text-white disabled:bg-[#181818]/60">
                Login
            </button>
        </form>
    </main>
</body>

</html>
