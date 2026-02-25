<nav class="sticky top-0 z-50 w-full border-b border-primary/10 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
<div class="flex items-center gap-2">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white">
<span class="material-symbols-outlined">house</span>
</div>
<span class="text-xl font-extrabold tracking-tight text-slate-900 dark:text-white">MyColoc</span>
</div>
<div class="flex items-center gap-6">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                    <div class="p-4 border-t border-primary/10">
                            <a href="{{route('create.colocation')}}" class="w-full py-2.5 bg-primary hover:bg-primary/90 text-white rounded-lg text-sm font-bold flex items-center justify-center gap-2 transition-all shadow-md shadow-primary/20">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                    Add colocation
                            </a>
                    </div>
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
</div>
</div>
</nav>
<main>
    @yield('content')
</main>
<footer class="border-t border-primary/10 bg-white py-12 dark:bg-background-dark">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                <div class="flex items-center gap-2">
            <div class="flex h-8 w-8 items-center justify-center rounded bg-primary text-white">
            <span class="material-symbols-outlined text-sm">house</span>
            </div>
            <span class="text-lg font-bold tracking-tight text-slate-900 dark:text-white">EasyColoc</span>
            </div>
            <div class="flex gap-8 text-sm font-medium text-slate-500">
            <a class="hover:text-primary" href="#">Privacy</a>
            <a class="hover:text-primary" href="#">Terms</a>
            <a class="hover:text-primary" href="#">Support</a>
            <a class="hover:text-primary" href="#">Blog</a>
            </div>
            <p class="text-sm text-slate-400">
                © 2024 EasyColoc. All rights reserved.
            </p>
            </div>
        </div>
    </footer>