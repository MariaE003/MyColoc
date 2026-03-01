<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex h-screen overflow-hidden">

<a href="{{route('show.categorie')}}" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-slate-700 dark:text-slate-300">arrow_back</span>
</a>
<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark">
<div class="max-w-4xl mx-auto p-8 lg:p-12">
<div class="mb-10">
<h2 class="text-3xl font-bold text-slate-900 dark:text-white">Add New Category</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2">Custom categories help you track specific household spending habits.</p>
</div>
    <form class="space-y-8" method="POST" action="{{route('save.categorie')}}">
        @csrf
        <!-- Category Preview Card -->
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
        <div class="h-32 bg-gradient-to-r from-primary/20 via-primary/5 to-transparent relative">
        <div class="absolute -bottom-6 left-8 size-20 rounded-2xl bg-white dark:bg-slate-800 border-4 border-white dark:border-slate-900 shadow-lg flex items-center justify-center text-primary">
        <span class="material-symbols-outlined !text-4xl">category</span>
        </div>
        </div>
        <div class="pt-10 pb-6 px-8">
        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Category Details</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400">Enter a descriptive name and choose a representative icon.</p>
        </div>
        <div class="px-8 pb-8 space-y-6">
        <!-- Category Name Input -->
        <div class="space-y-2">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="category_name">Category Name</label>
        <input name="name" class="w-full h-12 px-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400" id="category_name" placeholder="e.g. Groceries, Internet, House Maintenance" type="text"/>
        </div>
        <!-- Actions -->
        <div class="flex items-center justify-end gap-4 pt-4">
        <a href="{{route('show.categorie')}}" class="px-6 py-2.5 rounded-lg text-slate-700 dark:text-slate-300 font-semibold hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors border border-slate-200 dark:border-slate-700" type="button">
            Cancel
        </a>
        <button type="submit" class="px-8 py-2.5 rounded-lg bg-primary text-white font-semibold hover:bg-primary/90 shadow-md shadow-primary/20 transition-all" type="submit">
            Create Category
        </button>
        </div>
    </form>
<!-- Help Section -->
<div class="mt-12 p-6 rounded-xl bg-primary/5 border border-primary/10 flex items-start gap-4">
<span class="material-symbols-outlined text-primary">info</span>
<div>
<h4 class="text-sm font-bold text-slate-900 dark:text-white">Why organize by category?</h4>
<p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Categorizing expenses allows EasyColoc to generate detailed monthly reports, helping your household identify where most of the money is going.</p>
</div>
</div>
</div>
</main>
</div>
</body>
</html>