<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc - New Expense</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        input:focus, select:focus {
            outline: none !important;
            border-color: #5048e5 !important;
            ring: 2px;
            ring-color: rgba(80, 72, 229, 0.2);
        }
        /* Custom scrollbar for better look */
        ::-webkit-scrollbar {
            width: 4px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col items-center">
<div class="w-full max-w-[480px] min-h-screen bg-white dark:bg-background-dark shadow-sm flex flex-col relative">
<!-- Header -->
<header class="sticky top-0 z-10 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-4 py-4 flex items-center border-b border-slate-200 dark:border-slate-800">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-slate-700 dark:text-slate-300">arrow_back</span>
</button>
<h1 class="flex-1 text-center text-lg font-bold tracking-tight pr-10">New Expense</h1>
</header>
<!-- Form Content -->
<main class="flex-1 overflow-y-auto pb-32">
    <form class="p-4 space-y-6" method="POST" action="{{route('save.depense')}}">
        @csrf
    <!-- Title Field -->
        <div class="space-y-2">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 px-1">Title</label>
        <input name="title" class="w-full h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl px-4 text-base focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-slate-400" placeholder="e.g., Weekly Groceries" type="text"/>
        </div>
        <!-- Amount & Currency -->
        <div class="space-y-2">
            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 px-1">Amount</label>
            <div class="flex gap-2">
            <div class="relative flex-1">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">$</span>
            <input name="montant" class="w-full h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl pl-8 pr-4 text-base focus:ring-2 focus:ring-primary/20 transition-all" placeholder="0.00" type="number"/>
        </div>
        <select disabled class="w-24 h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl px-2 text-base font-medium focus:ring-2 focus:ring-primary/20 appearance-none bg-[right_0.5rem_center] bg-no-repeat" style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%236b7280%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e')">
        <option>DH</option>
        <option>EUR</option>
        <option>GBP</option>
        </select>
        </div>
        </div>
        <!-- Date Picker -->
        <div class="space-y-2">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 px-1">Date</label>
        <div class="relative">
        <input name="date" class="w-full h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl px-4 text-base focus:ring-2 focus:ring-primary/20 transition-all" type="date" value="2026-10-27"/>
        </div>
        </div>
            <div class="space-y-2">
            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 px-1">Category</label>
            <div class="relative">
            <select name="categorie_id" class="w-full h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl px-4 text-base focus:ring-2 focus:ring-primary/20 appearance-none" style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%236b7280%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e'); background-position: right 1rem center; background-repeat: no-repeat;">
                <option>--- Choisi ---</option>
                @foreach($categorie as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            </div>
            </div>

            <!-- Paid By Dropdown -->
            <div class="space-y-2"> 
            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 px-1">Paid by</label>
            <div class="relative">
            <select name="payer_id" class="w-full h-14 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl px-4 text-base focus:ring-2 focus:ring-primary/20 appearance-none" style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%236b7280%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e'); background-position: right 1rem center; background-repeat: no-repeat;">
                    <option>--- Choisi ---</option>

                @foreach($members as $member)
                    <option value="{{$member->user->id}}">{{$member->user->name}}</option>
                @endforeach
            </select>
            </div>
            </div>
        <!-- Split With Section -->
        <div class="space-y-3">
        <div class="flex items-center justify-between px-1">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Split with</label>
        <button class="text-xs font-bold text-primary" type="button">SELECT ALL</button>
        </div>
        <div class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden divide-y divide-slate-100 dark:divide-slate-800">
            
            @foreach($members as $member )
                <label class="flex items-center gap-3 p-4 cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <input checked="" class="w-5 h-5 rounded border-slate-300 text-primary focus:ring-primary" type="checkbox"/>
                    <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center">
                    <!-- <span class="text-sm font-bold text-primary">ME</span> -->
                    </div>
                    <span class="flex-1 font-medium">{{$member->user->name}}</span>
                </label>
            @endforeach
        </div>
        </div>
        <footer class="absolute bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-t border-slate-200 dark:border-slate-800">
        <button class="w-full h-14 bg-primary text-white font-bold text-lg rounded-xl shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-[0.98]" type="submit">
            Save Expense
        </button>
        </footer>
    </form>
</main>
<!-- Footer Action -->
</div>
</body></html>