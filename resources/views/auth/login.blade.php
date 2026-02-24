<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EasyColoc</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#5048e5",
                        "background-light": "#f6f6f8",
                        "background-dark": "#121121",
                    },
                    fontFamily: {
                        display: ["Manrope", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background-light font-display min-h-screen flex flex-col">

<!-- HEADER -->
<header class="flex items-center justify-between p-4 md:px-8">
    <div class="flex items-center gap-2">
        <div class="bg-primary text-white p-2 rounded-lg">
            <span class="material-symbols-outlined">home_work</span>
        </div>
        <span class="text-xl font-bold">MyColoc</span>
    </div>
</header>

<!-- MAIN -->
<main class="flex-1 flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow border">

        <!-- Title -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full mb-6">
                <span class="material-symbols-outlined text-primary text-4xl">
                    person_pin_circle
                </span>
            </div>

            <h1 class="text-3xl font-bold mb-2">Welcome back</h1>
            <p class="text-slate-500">Log in to find your perfect roommate match.</p>
        </div>

        <!-- SESSION STATUS -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <!-- FORM -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div class="flex flex-col gap-2">
                <label class="text-sm font-semibold">Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="e.g., alex@example.com"
                />

                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="flex flex-col gap-2">
                <div class="flex justify-between">
                    <label class="text-sm font-semibold">Password</label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-sm text-primary hover:underline">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <input
                    type="password"
                    name="password"
                    required
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="••••••••"
                />

                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember -->
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="w-4 h-4 text-primary rounded">
                <label class="text-sm text-slate-600">Keep me logged in</label>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-md transition">
                Login
            </button>

        </form>

        <!-- Register -->
        <div class="mt-10 text-center">
            <p class="text-slate-600">
                Don't have an account?
                <a href="{{ route('register') }}"
                   class="text-primary font-bold hover:underline">
                    Create one
                </a>
            </p>
        </div>

    </div>
</main>

<footer class="p-6 text-center text-slate-400 text-xs">
    © {{ date('Y') }} EasyColoc. All rights reserved.
</footer>

</body>
</html>