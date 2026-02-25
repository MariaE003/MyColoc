<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased font-display">
<!-- <div class="flex min-h-screen overflow-hidden"> -->
    @extends('base')

@section('content')
<!-- Sidebar Navigation -->
    <!-- <aside class="w-64 flex-shrink-0 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark/50 hidden lg:flex flex-col">
        <div class="p-6">
        <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-white">
        <span class="material-symbols-outlined">home_work</span>
        </div>
        <h1 class="text-xl font-bold tracking-tight">EasyColoc</h1>
        </div>
        </div>
        <nav class="flex-1 px-4 space-y-1 mt-4">
            <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors group" href="#">
                <span class="material-symbols-outlined text-[24px]">dashboard</span>
                <span class="text-sm font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors group" href="#">
                <span class="material-symbols-outlined text-[24px]">groups</span>
                <span class="text-sm font-semibold">My Colocation</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors group" href="#">
                <span class="material-symbols-outlined text-[24px]">chat_bubble</span>
                <span class="text-sm font-semibold">Messages</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors group" href="#">
                <span class="material-symbols-outlined text-[24px]">person</span>
                <span class="text-sm font-semibold">Profile</span>
            </a>
            <div class="pt-4 mt-4 border-t border-slate-200 dark:border-slate-800">
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors group" href="#">
                <span class="material-symbols-outlined text-[24px]">settings</span>
                <span class="text-sm font-semibold">Settings</span>
                </a>
            </div>
        </nav>
        <div class="p-4 mt-auto">
            <div class="bg-primary/5 rounded-xl p-4 border border-primary/10">
                <p class="text-xs font-bold text-primary uppercase tracking-wider mb-1">Need help?</p>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Check our guide to start your new shared life.</p>
            </div>  
        </div>
    </aside> -->
<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0">
<!-- Header/Breadcrumbs -->
    <header class="h-16 flex items-center px-8 border-b border-slate-200 dark:border-slate-800 bg-white/50 dark:bg-background-dark/50 backdrop-blur-sm">
        <nav class="flex items-center gap-2 text-sm">
            <a class="text-slate-500 hover:text-primary transition-colors" href="#">Home</a>
            <span class="material-symbols-outlined text-sm text-slate-400">chevron_right</span>
            <span class="font-semibold text-primary">Create a colocation</span>
        </nav>
    </header>
<!-- Page Body -->
<div class="flex-1 flex items-center justify-center p-8 bg-background-light dark:bg-background-dark">
<div class="w-full max-w-lg">
<div class="bg-white dark:bg-background-dark/80 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm overflow-hidden">
<div class="p-8">
<div class="mb-8 text-center">
<h2 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-2">Créer une nouvelle colocation</h2>
<p class="text-slate-500 dark:text-slate-400">Commencez par donner un nom à votre projet de vie commune.</p>
</div>
    @if ($errors->any())
        <div class="bg-red-100 p-3 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('save.colocation')}}" method="POST" class="space-y-6">
         @csrf
        <div>
            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2" for="coloc-name">Nom de la colocation</label>
            <input class="block w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" id="coloc-name" placeholder="Ex: Villa des Amis" type="text" name="name"/>
        </div>
        <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-6 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2" type="submit">
            <span>Créer la colocation</span>
            <span class="material-symbols-outlined">arrow_forward</span>
        </button>
    </form>

</div>
<div class="px-8 py-4 bg-slate-50/50 dark:bg-slate-900/30 border-t border-slate-100 dark:border-slate-800 text-center">
<p class="text-xs text-slate-400">Vous pourrez modifier ces informations plus tard dans les paramètres.</p>
</div>
</div>
<!-- Decorative Element -->
<div class="mt-12 flex justify-center gap-8 opacity-40">
<div class="flex items-center gap-2 text-slate-400">
<span class="material-symbols-outlined">security</span>
<span class="text-xs font-medium uppercase tracking-widest">Sécurisé</span>
</div>
<div class="flex items-center gap-2 text-slate-400">
<span class="material-symbols-outlined">speed</span>
<span class="text-xs font-medium uppercase tracking-widest">Rapide</span>
</div>
<div class="flex items-center gap-2 text-slate-400">
<span class="material-symbols-outlined">favorite</span>
<span class="text-xs font-medium uppercase tracking-widest">Convivial</span>
</div>
</div>
</div>
</div>
</main>
@endsection
</div>
</body></html>