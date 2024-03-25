<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Login</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
        rel="stylesheet"
    >
</head>

<body class="bg-[#0a0a0a] h-[100dvh] max-h-[100dvh] flex justify-center items-center">
    {{-- Main --}}
    <main class="w-full max-w-[560px] flex flex-col gap-y-16 py-[50px] px-[40px]">
        <h1 class="text-white text-[20px] text-center font-bold">Welcome to Colossal, <span
                class="text-blue-500">Buddy!</span></h1>
        <form
            action="{{ route('login') }}"
            method="POST"
            class="flex flex-col gap-y-6"
        >
            @csrf

            <div class="flex flex-col gap-y-[5px]">
                <label
                    for="email"
                    class="login__label"
                >
                    Email Address
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="youremail@example.com"
                    class="login__input @error('email') login__input-error @enderror"
                    required
                    autofocus
                >
                @error('email')
                    <span class="login__invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="flex flex-col gap-y-[5px]">
                <label
                    for="password"
                    class="login__label"
                >
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="login__input @error('email') login__input-error @enderror"
                    required
                >
                @error('email')
                    <span class="login__invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button
                type="submit"
                class="login__button"
            >
                Log In
            </button>
        </form>
    </main>
</body>

</html>
