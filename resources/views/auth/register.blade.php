<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - EasyColoc</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#5048e5",
                        "background-light": "#f6f6f8",
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

<header class="flex items-center justify-between p-4 md:px-8">
    <div class="flex items-center gap-2">
        <div class="bg-primary text-white p-2 rounded-lg">
            <span class="material-symbols-outlined">home_work</span>
        </div>
        <span class="text-xl font-bold">MyColoc</span>
    </div>
</header>

<main class="flex-1 flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow border">

        <!-- Title -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full mb-6">
                <span class="material-symbols-outlined text-primary text-4xl">person_add</span>
            </div>

            <h1 class="text-3xl font-bold mb-2">Create account</h1>
            <p class="text-slate-500">Join EasyColoc and find your perfect roommate.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf
            <!-- Name -->
            <div class="flex flex-col gap-2">
                <label class="text-sm font-semibold">Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="Your name">
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-2">
                <label class="text-sm font-semibold">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="example@email.com">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="flex flex-col gap-2">
                <label class="text-sm font-semibold">Password</label>
                <input type="password" name="password" required
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="••••••••">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col gap-2">
                <label class="text-sm font-semibold">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full h-12 px-4 rounded-lg border bg-slate-50 focus:ring-2 focus:ring-primary"
                    placeholder="••••••••">
                @error('password_confirmation')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-md transition">
                Create account
            </button>
        </form>

        <!-- Login link -->
        <div class="mt-8 text-center">
            <p class="text-slate-600">
                Already registered?
                <a href="{{ route('login') }}"
                   class="text-primary font-bold hover:underline">
                    Login
                </a>
            </p>
        </div>

    </div>
</main>

<footer class="p-6 text-center text-slate-400 text-xs">
    © {{ date('Y') }} MyColoc. All rights reserved.
</footer>

</body>
</html>