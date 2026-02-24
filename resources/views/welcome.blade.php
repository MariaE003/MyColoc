<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc - Shared Expense Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#5048e5",
                        "background-light": "#f6f6f8",
                        "background-dark": "#121121",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Manrope', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
<!-- Top Navigation Bar -->
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
<!-- Hero Section -->
<section class="relative overflow-hidden pt-16 pb-20 lg:pt-24 lg:pb-32">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
<div class="flex flex-col gap-8">
<div class="space-y-4">
<h1 class="text-4xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white sm:text-5xl lg:text-6xl">
                                Manage shared expenses <span class="text-primary">easily, together.</span>
</h1>
<p class="max-w-xl text-lg leading-relaxed text-slate-600 dark:text-slate-400 sm:text-xl">
                                Track bills, split groceries, and build your roommate reputation. No more awkward money talks or forgotten debts.
                            </p>
</div>
<div class="flex flex-col gap-4 sm:flex-row">
<button class="flex h-12 items-center justify-center rounded-lg bg-primary px-8 text-base font-bold text-white shadow-lg transition-all hover:scale-[1.02] hover:bg-primary/90 active:scale-[0.98]">
                                Join your flatmates
                            </button>
<button class="flex h-12 items-center justify-center rounded-lg border border-primary/20 bg-primary/5 px-8 text-base font-bold text-primary transition-all hover:bg-primary/10">
                                How it works
                            </button>
</div>
<div class="flex items-center gap-4 text-sm text-slate-500">
<div class="flex -space-x-2">
<img alt="" class="h-8 w-8 rounded-full border-2 border-white dark:border-background-dark" data-alt="Female user profile picture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3ItOck-UG-3wcMT6JbOiEZ-zJyPibSnC6d3BusPxA-N-cns7PApnvkV-udOnDHtLqw-r3ZxinoVhdLDLWid-GKHdyTcTAS0nO3nQphrfAzam0LUj-5ByMebsyAI95FDYhSf6m0ADZ_C_Y8vjBtIikNT6-e7tMv986mFh9wTybTNntVKZv1twbR2UrX_LZe74pE-l8J4xGmoakiUm3pgglMOn3YL0_2BhqguUtd9WJoEKKB4MXBnWG4tZOHXqc9NXcfcLQkiLgfNiC"/>
<img alt="" class="h-8 w-8 rounded-full border-2 border-white dark:border-background-dark" data-alt="Male user profile picture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcUS5HziQ9XZquqEmqLXRR6JHuWrse0gqAbiKi5QsConcpBQi_1x5b_pt1VFwc8SfouISRbemSjcokWmC342KSxFFanN1dHKdJ9ndMleqENG9LeAzb1dCbz5IKdJ8LtnENfxIYB7K7qdeMGYoBpjKrbJVNdivWZ2p6X-j0TmHobi5LAE3WL47XnURo9VYHVo7i6ZsmdIFTMVZAJJTpE2FwAuzaLZxmLGu7szKEo-xXWtUnPwecjlsJNzpyimKmtWoN88rlIgO4wXY2"/>
<img alt="" class="h-8 w-8 rounded-full border-2 border-white dark:border-background-dark" data-alt="Diverse user profile picture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYcOR62oH10JKNuGEtEaMdLIdwPeiC_IkZhwoM_32CbvAJa0K2FdUiQCAQWkz2X2UBI9Rfpp2pQUXb_-w0qGPzrjUHGF7PYFoNtg4C3ZdAbMP6xuxrsIBDvSIOtW1CY4mpDtEWY1VSFmLqa50Hn60QiKUCbvlEXb3o-XnhWj8hMIEaQWnYHCQhbRtVMTDP5j6Ll-k87Tdxe3mVpiSac2Jk7DW0clME4baTKIeW3Bk5oZPtWFSosnujCdfRnrXnTrnrkBaBsdwfmO7a"/>
</div>
<span>Joined by 10,000+ happy roommates</span>
</div>
</div>
<div class="relative">
<div class="aspect-video w-full rounded-2xl bg-gradient-to-tr from-primary/20 to-primary/5 p-4 shadow-2xl lg:aspect-square">
<div class="h-full w-full rounded-xl bg-white shadow-inner dark:bg-slate-800" data-alt="Mobile app interface showing expense split dashboard" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAOVo7fkQbWQFqcVFS33Dltfk-mv-zncBiClCyM-KBXOWynOTPEWMAhIT4pgD-GwlFmlrn19zsRWCNLSDrcNp9FqgUUspieP5SmqrbHaQkPCLk1VlMZCJlimzd3fvZCNgdEr-oAE36Pr7gKbOetSOm_-wG97LE6exjlrf41pbaaZMTxB3V9ZPW7teqvgvVrL6N8yRtYtsJleKTTJjVGuFHv3iJ8g5PGa8huFfxtn0ad9AREcXXnqJFZdwVTs45TAxh1ajyM3ulCSo3p'); background-size: cover; background-position: center;">
<div class="absolute -bottom-6 -left-6 hidden h-32 w-48 rounded-lg bg-white p-4 shadow-xl dark:bg-slate-700 sm:block">
<div class="flex flex-col gap-2">
<div class="h-2 w-12 rounded bg-primary/20"></div>
<div class="flex items-center justify-between">
<span class="text-xs font-bold text-slate-400">Monthly Rent</span>
<span class="text-xs font-bold text-primary">$850.00</span>
</div>
<div class="h-1.5 w-full rounded-full bg-slate-100 dark:bg-slate-600">
<div class="h-full w-3/4 rounded-full bg-primary"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Features Section -->
<section class="bg-white py-20 dark:bg-slate-900/50">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="text-center">
<h2 class="text-base font-bold uppercase tracking-wider text-primary">Features</h2>
<p class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
                        Simplify your flatshare life
                    </p>
<p class="mx-auto mt-4 max-w-2xl text-lg text-slate-600 dark:text-slate-400">
                        Everything you need to keep your home harmony intact and your finances transparent.
                    </p>
</div>
<div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
<!-- Feature 1 -->
<div class="flex flex-col gap-4 rounded-xl border border-primary/10 bg-background-light p-8 dark:bg-background-dark">
<div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-white">
<span class="material-symbols-outlined">receipt_long</span>
</div>
<h3 class="text-xl font-bold text-slate-900 dark:text-white">Debt Tracking</h3>
<p class="text-slate-600 dark:text-slate-400">
                            Real-time balance updates and one-tap settlements. Stay on top of who owes what without the stress of reminders.
                        </p>
</div>
<!-- Feature 2 -->
<div class="flex flex-col gap-4 rounded-xl border border-primary/10 bg-background-light p-8 dark:bg-background-dark">
<div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-white">
<span class="material-symbols-outlined">stars</span>
</div>
<h3 class="text-xl font-bold text-slate-900 dark:text-white">Reputation System</h3>
<p class="text-slate-600 dark:text-slate-400">
                            Build your profile as a reliable roommate. Use your score to secure your next home faster with verified proof.
                        </p>
</div>
<!-- Feature 3 -->
<div class="flex flex-col gap-4 rounded-xl border border-primary/10 bg-background-light p-8 dark:bg-background-dark">
<div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-white">
<span class="material-symbols-outlined">notifications_active</span>
</div>
<h3 class="text-xl font-bold text-slate-900 dark:text-white">Smart Reminders</h3>
<p class="text-slate-600 dark:text-slate-400">
                            Automated gentle nudges for pending bills. We handle the "awkward part" so you can focus on being great housemates.
                        </p>
</div>
</div>
</div>
</section>
<!-- Trust Score Showcase -->
<section class="py-20">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="overflow-hidden rounded-2xl bg-primary shadow-2xl">
<div class="grid grid-cols-1 lg:grid-cols-2">
<div class="flex flex-col justify-center p-8 text-white sm:p-12">
<h2 class="text-3xl font-extrabold sm:text-4xl">The Trust Score</h2>
<p class="mt-4 text-lg text-primary-100 opacity-90">
                                Build your profile as a reliable flatmate. 98% of users with high scores find their next flat 3x faster.
                            </p>
<div class="mt-8 flex flex-col gap-6">
<div class="flex items-start gap-4">
<div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/20">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<p class="font-medium">Verified payment history for future landlords</p>
</div>
<div class="flex items-start gap-4">
<div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/20">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<p class="font-medium">Badges for timely utility payments</p>
</div>
<div class="flex items-start gap-4">
<div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/20">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<p class="font-medium">Community feedback and testimonials</p>
</div>
</div>
<button class="mt-10 w-fit rounded-lg bg-white px-8 py-3 text-base font-bold text-primary transition-all hover:bg-slate-100 active:scale-[0.98]">
                                Learn More About Trust Score
                            </button>
</div>
<div class="relative h-64 lg:h-auto">
<div class="absolute inset-0 bg-white/10 backdrop-blur-sm"></div>
<img alt="" class="h-full w-full object-cover" data-alt="Group of diverse friends laughing in a shared kitchen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeP4OcZCtwQAe2I0NbpU-zu8GwsaV5ivEZcTwYC6ogfabZ2f_oUXd3MwKM0hvqmiILb68_Mc8_Wu2Fx3ZPvk5YIvj-gBNE7kcxJmv4Bn82BAH_UpWI0atKYp8JEeG9jq8mBuYAjyMutJYf0qy3m9I94Kex4L8jBnq1tpeCOvXEpUZqNPyLpbIn1oo_g9Cp78QaKnjn1LFFgd2SP29LdU20xlRJU2v4VoobpU3Lpk340LHTPgPNy7OA7jpLJW_Ny7KBtYlvA-BDMqc9"/>
<!-- Reputation UI Overlay -->
<div class="absolute top-1/2 left-1/2 w-64 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-white p-6 shadow-2xl dark:bg-slate-800">
<div class="flex items-center gap-4">
<div class="relative h-12 w-12">
<svg class="h-full w-full" viewbox="0 0 36 36">
<path class="text-slate-100 dark:text-slate-700" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3"></path>
<path class="text-primary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="85, 100" stroke-linecap="round" stroke-width="3"></path>
</svg>
<span class="absolute inset-0 flex items-center justify-center text-xs font-bold text-primary">85</span>
</div>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Alex Johnson</p>
<p class="text-[10px] text-slate-500 uppercase tracking-widest">Reliable Roommate</p>
</div>
</div>
<div class="mt-4 flex gap-1">
<span class="material-symbols-outlined text-primary text-sm">star</span>
<span class="material-symbols-outlined text-primary text-sm">star</span>
<span class="material-symbols-outlined text-primary text-sm">star</span>
<span class="material-symbols-outlined text-primary text-sm">star</span>
<span class="material-symbols-outlined text-slate-200 text-sm">star</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="bg-background-light py-20 dark:bg-background-dark">
<div class="mx-auto max-w-4xl px-4 text-center sm:px-6">
<h2 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
                    Ready to live in harmony?
                </h2>
<p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
                    Join thousands of flatmates already using EasyColoc to manage their shared expenses and build their reputation.
                </p>
<div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
<button class="rounded-lg bg-primary px-10 py-4 text-lg font-bold text-white shadow-lg transition-all hover:bg-primary/90">
                        Get Started for Free
                    </button>
<button class="rounded-lg bg-white px-10 py-4 text-lg font-bold text-slate-900 shadow-sm ring-1 ring-slate-200 transition-all hover:bg-slate-50 dark:bg-slate-800 dark:text-white dark:ring-slate-700">
                        Contact Sales
                    </button>
</div>
</div>
</section>
</main>
<!-- Simple Footer -->
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
</body>
</html>