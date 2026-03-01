<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc - Category Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .sidebar-item-active {
            background-color: #5048e5;
            color: white;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="flex min-h-screen">
<!-- Main Content -->
 
<main class="flex-1 flex flex-col h-screen overflow-hidden">
<!-- Top Header -->
<header class="h-20 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-8 flex items-center justify-between shrink-0">

<div class="flex items-center gap-4">
    <a href="{{route('mycolocation')}}" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-slate-700 dark:text-slate-300">arrow_back</span>
</a>
    <a href="{{route('create.categorie')}}" class="bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg flex items-center gap-2 text-sm font-semibold shadow-md shadow-primary/20 transition-all">
    <span class="material-symbols-outlined text-xl">add_circle</span>
        Add Category
    </a>
</div>
</header>
<!-- Page Content -->
<div class="flex-1 overflow-y-auto p-8 space-y-8">
<!-- Header Section -->
<div class="flex flex-col gap-2">
<h2 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white">Category Management</h2>
<p class="text-slate-500 dark:text-slate-400">Organize and manage expense buckets for your colocation.</p>
</div>
<!-- Categories Table -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-sm font-semibold uppercase tracking-wider">
<th class="px-6 py-4">Icon</th>
<th class="px-6 py-4">Category Name</th>
<th class="px-6 py-4">Description</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4 text-right">Actions</th>

</tr>
</thead>
    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">

    @if($categories->count() > 0)

    @foreach($categories as $categorie)
    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors group">

    <td class="px-6 py-4">
    <div class="size-10 bg-primary/10 text-primary rounded-lg flex items-center justify-center">
    <span class="material-symbols-outlined">category</span>
    </div>
    </td>

    <td class="px-6 py-4">
    <p class="font-bold text-slate-900 dark:text-white">
        {{$categorie->name}}
    </p>
    </td>

    <td class="px-6 py-4 text-slate-500 dark:text-slate-400 text-sm">
        Category for shared expenses
    </td>

    <td class="px-6 py-4">
    <span class="px-2 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
    Active
    </span>
    </td>
    <td class="px-6 py-4 text-right">
        <form action="{{ route('delete.categorie', $categorie->id) }}" method="POST">
            @csrf
            <button type="submit"  class="text-red-500 hover:text-red-700 hover:bg-red-50 p-2 rounded-lg transition-colors">
                <span class="material-symbols-outlined">delete</span>
            </button>
        </form>
    </td>
    </tr>
    @endforeach
    @else
    <tr>
    <td colspan="5" class="text-center py-10 text-slate-400">
    aucun  categories trouve
    </td>
    
    </tr>
    @endif

    </tbody>
</table>
</div>

</main>
</div>
</body></html>