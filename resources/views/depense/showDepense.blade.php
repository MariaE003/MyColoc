<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Liste des Dépenses - Colocation</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen"><div class="flex min-h-screen bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col">
<div class="p-6">
<div class="flex items-center gap-3 text-primary">
<span class="material-symbols-outlined text-3xl">payments</span>
<span class="text-xl font-bold tracking-tight">SplitWise+</span>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary font-bold" href="#">
<span class="material-symbols-outlined">receipt_long</span>
<span>Expenses</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="font-medium">Groups</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">account_balance_wallet</span>
<span class="font-medium">Settlements</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-medium">Settings</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center font-bold">T</div>
<div class="flex-1 overflow-hidden">
<p class="text-sm font-bold truncate">Thomas Durand</p>
<p class="text-xs text-slate-500 truncate">thomas@example.com</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0 overflow-auto">
<!-- Top Header -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-8 py-4 flex items-center justify-between sticky top-0 z-10">
<h1 class="text-2xl font-bold">Expenses List</h1>
<div class="flex items-center gap-4">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm w-64 focus:ring-2 focus:ring-primary/20" placeholder="Search expenses..." type="text"/>
</div>
<button class="bg-primary text-white px-4 py-2 rounded-lg font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 transition-all flex items-center gap-2">
<span class="material-symbols-outlined">add</span>
<span>Add Expense</span>
</button>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Filters & Table -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<!-- Table Header/Filters -->
<div class="p-4 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div class="flex gap-4">
<select class="bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm font-medium focus:ring-2 focus:ring-primary/20">
<option>April 2024</option>
<option>March 2024</option>
<option>February 2024</option>
</select>
<select class="bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm font-medium focus:ring-2 focus:ring-primary/20">
<option>All Categories</option>
<option>Food</option>
<option>Housing</option>
<option>Utilities</option>
</select>
</div>
<div class="text-sm text-slate-500 font-medium">
    Showing 12 transactions
    </div>
</div>
<!-- Desktop Data Table -->
<table class="w-full text-left">
<thead>
<tr class="text-slate-500 dark:text-slate-400 text-xs uppercase tracking-wider font-bold">
<th class="px-6 py-4">Title</th>
<th class="px-6 py-4">Amount</th>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4">Category</th>
<th class="px-6 py-4">Payer</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">

    @forelse($depenses as $depense)
    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
        <td class="px-6 py-4 font-bold">{{$depense->title}}</td>
        <td class="px-6 py-4 text-red-500 font-bold">- {{$depense->montant}} DH</td>
        <td class="px-6 py-4 text-slate-500">{{$depense->date}}</td>
        <td class="px-6 py-4">
            <span class="text-[10px] px-2 py-1 rounded-full bg-orange-100 text-orange-700 font-bold uppercase">{{$depense->categorie->name}}</span>
        </td>
        <td class="px-6 py-4">
            <div class="flex items-center gap-2">
            <div class="size-6 rounded-full bg-primary/10 text-primary flex items-center justify-center text-[10px] font-bold">T</div>
            <span class="text-sm"> {{$depense->payer->name}}</span>
            </div>
        </td>
        <td class="px-6 py-4 text-right opacity-0 group-hover:opacity-100 transition-opacity">
            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-xl">more_vert</span></button>
        </td>
        <td>{{ $dep->is_paid ? 'Oui' : 'Non' }}</td>
        <td>
            @if(!$dep->is_paid)
            <a href="{{ route('depense.paid', $dep->id) }}">Marquer payé</a>
            @endif
        </td>
    </tr>
    @empty
        <tr>
        <td colspan="6" class="text-center py-6 text-slate-500">
            Aucune dépense trouvée
        </td>
        </tr>
    @endforelse


<!-- Row 2
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-6 py-4 font-bold">Loyer Mensuel</td>
<td class="px-6 py-4 text-red-500 font-bold">- 850,00 €</td>
<td class="px-6 py-4 text-slate-500">01 Apr. 2024</td>
<td class="px-6 py-4">
<span class="text-[10px] px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-bold uppercase">Housing</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-6 rounded-full bg-green-500/10 text-green-600 flex items-center justify-center text-[10px] font-bold">L</div>
<span class="text-sm">Léa</span>
</div>
</td>
<td class="px-6 py-4 text-right opacity-0 group-hover:opacity-100 transition-opacity">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-xl">more_vert</span></button>
</td>
</tr>
Row 3
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-6 py-4 font-bold">Abonnement Internet</td>
<td class="px-6 py-4 text-red-500 font-bold">- 29,90 €</td>
<td class="px-6 py-4 text-slate-500">05 Apr. 2024</td>
<td class="px-6 py-4">
<span class="text-[10px] px-2 py-1 rounded-full bg-purple-100 text-purple-700 font-bold uppercase">Services</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-6 rounded-full bg-purple-500/10 text-purple-600 flex items-center justify-center text-[10px] font-bold">M</div>
<span class="text-sm">Marc</span>
</div>
</td>
<td class="px-6 py-4 text-right opacity-0 group-hover:opacity-100 transition-opacity">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-xl">more_vert</span></button>
</td>
</tr>
Row 4
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-6 py-4 font-bold">Électricité EDF</td>
<td class="px-6 py-4 text-red-500 font-bold">- 65,20 €</td>
<td class="px-6 py-4 text-slate-500">20 Apr. 2024</td>
<td class="px-6 py-4">
<span class="text-[10px] px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-bold uppercase">Energy</span>
</td> 
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-6 rounded-full bg-green-500/10 text-green-600 flex items-center justify-center text-[10px] font-bold">L</div>
<span class="text-sm">Léa</span>
</div>
</td>
-->
<td class="px-6 py-4 text-right opacity-0 group-hover:opacity-100 transition-opacity">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-xl">more_vert</span></button>
</td>
</tr>
</tbody>
</table>
<!-- Pagination -->
<div class="p-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-center gap-2">
<button class="p-2 rounded hover:bg-slate-100 dark:hover:bg-slate-800 disabled:opacity-50" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<span class="text-sm font-bold bg-primary text-white size-8 flex items-center justify-center rounded">1</span>
<button class="p-2 rounded hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</div></body></html>