<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc Admin Panel</title>
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
                        "display": ["Manrope"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 border-r border-slate-200 bg-white p-4 hidden md:flex flex-col justify-between sticky top-[65px] h-[calc(100vh-65px)]">
<div class="flex flex-col gap-2">
<a href="{{route('home')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">Home</span>
<span class="text-sm font-semibold leading-normal">Home</span>
</a>
@if(auth()->user()->is_admin)
<div class="p-4 border-t border-primary/10">
    <a href="{{ route('admin') }}" class="w-full py-2.5 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-bold flex items-center justify-center gap-2 transition-all shadow-md shadow-red-200/20">
        Admin Dashboard
    </a>
</div>
@endif
<a href="{{route('mycolocation')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white shadow-lg shadow-primary/20 transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-semibold leading-normal">Colocation</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="{{route('show.depense')}}">
<span class="material-symbols-outlined">payments</span>
<span class="text-sm font-semibold leading-normal">Expenses</span>
</a>
@if(isset($user->member->colocation) && auth()->id() === $user->member->colocation->owner_id)
    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="{{ route('show.categorie') }}">
        <span class="text-sm font-semibold leading-normal">Categorie</span>
    </a>
@endif
<!-- <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span class="text-sm font-semibold leading-normal">Profile</span>
</a> -->
</div>
<div class="bg-slate-50 rounded-xl p-4 border border-slate-100 flex flex-col gap-2">
    <a href="{{ route('profile.edit') }}" class="text-xs font-bold text-gray-700 uppercase tracking-wider">
        Profile
    </a>

    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-xs font-bold text-gray-700 uppercase tracking-wider">
                Logout
            </button>
        </form>
    @endauth
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0 overflow-hidden">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark/50 backdrop-blur-md">
<div class="flex items-center gap-4 flex-1">
<div class="relative max-w-md w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 text-slate-700 dark:text-slate-200" placeholder="Search for users, transactions, or properties..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="relative p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
<span class="material-symbols-outlined">help</span>
</button>
</div>
</header>
<!-- Scrollable Area -->
<div class="flex-1 overflow-y-auto p-8 space-y-8">
<!-- Top Section: Stats -->
<div>
<div class="mb-6">
<h2 class="text-2xl font-extrabold tracking-tight">Global Overview</h2>
<p class="text-slate-500 font-medium">Consolidated real-time metrics across all platforms</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Stat Card 1 -->
 
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 -mr-8 -mt-8 rounded-full transition-transform group-hover:scale-150"></div>
<div class="flex items-center gap-4 mb-4">
<div class="p-2 bg-primary/10 text-primary rounded-lg">
<span class="material-symbols-outlined">group</span>
</div>
<h3 class="font-bold text-slate-500 uppercase text-xs tracking-widest">Total Users</h3>
</div>
<div class="flex items-end justify-between">
<div>
<p class="text-3xl font-black">{{$usersCount}}</p>

</div>
<div class="w-24 h-12">
<svg class="w-full h-full text-primary opacity-30 stroke-2 fill-none" viewbox="0 0 100 40">
<path d="M0,35 Q10,30 20,32 T40,20 T60,25 T80,10 T100,5" stroke="currentColor"></path>
</svg>
</div>
</div>
</div>
<!-- Stat Card 2 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 w-24 h-24 bg-orange-500/5 -mr-8 -mt-8 rounded-full transition-transform group-hover:scale-150"></div>
<div class="flex items-center gap-4 mb-4">
<div class="p-2 bg-orange-500/10 text-orange-500 rounded-lg">
<span class="material-symbols-outlined">home_work</span>
</div>
<h3 class="font-bold text-slate-500 uppercase text-xs tracking-widest">Active Colocations</h3>
</div>
<div class="flex items-end justify-between">
<div>
<p class="text-3xl font-black">{{$colocationCount}}</p>

</div>
<div class="w-24 h-12">
<svg class="w-full h-full text-orange-500 opacity-30 stroke-2 fill-none" viewbox="0 0 100 40">
<path d="M0,38 Q20,38 40,30 T60,28 T80,15 T100,20" stroke="currentColor"></path>
</svg>
</div>
</div>
</div>
<!-- Stat Card 3 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 -mr-8 -mt-8 rounded-full transition-transform group-hover:scale-150"></div>
<div class="flex items-center gap-4 mb-4">
<div class="p-2 bg-emerald-500/10 text-emerald-500 rounded-lg">
    <span class="material-symbols-outlined">payments</span>
</div>
<!-- <h3 class="font-bold text-slate-500 uppercase text-xs tracking-widest">Total Expenses</h3> -->
</div>
<div class="flex items-end justify-between">
<div>
 
</div> 
    <div class="w-24 h-12">
    <svg class="w-full h-full text-emerald-500 opacity-30 stroke-2 fill-none" viewbox="0 0 100 40">
    <path d="M0,10 Q20,15 40,12 T60,30 T80,25 T100,38" stroke="currentColor"></path>
    </svg>
    </div>
</div>
</div>
</div>
</div>
<!-- User Management Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-wrap items-center justify-between gap-4">
<div>
<h3 class="text-lg font-bold">User Management</h3>
<p class="text-sm text-slate-500">Manage all registered users and their account status.</p>
</div>
<div class="flex items-center gap-3">
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<tr>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">User</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Colocation</th>
<!-- <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Last Activity</th> -->
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
    @foreach($users as $user)
        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
            <td class="px-6 py-4">
            <div class="flex items-center gap-3">
            <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
            {{ strtoupper(substr($user->name,0,2)) }}
            </div>
            <div>
            <p class="text-sm font-bold">{{ $user->name }}</p>
            <p class="text-xs text-slate-500">{{ $user->email }}</p>
            </div>
            </div>
            </td>
            <td class="px-6 py-4">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold">
            {{ $user->is_banned ? 'Banned' : 'Active' }}
            </span>
            </td>
            <td class="px-6 py-4">
            <p class="text-sm font-medium">
            {{ $user->member->colocation->name ?? 'N/A' }}
            </p>
            </td>
            <td class="px-6 py-4 text-right">
                <div class="flex items-center justify-end gap-2">
                    @if($user->is_banned)
                        <form method="POST" action="{{route('admin.debanner',$user->id)}}">
                        @csrf
                        <button class="px-3 py-1.5 text-xs font-bold text-green-600 bg-green-50 rounded-lg">
                        Unban
                        </button>
                        </form>
                        @else
                        <form method="POST" action="{{route('admin.banner',$user->id)}}">
                        @csrf
                        <button class="px-3 py-1.5 text-xs font-bold text-red-600 bg-red-50 rounded-lg">
                        Ban
                        </button>
                        </form>
                    @endif
                </div>
            </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</body></html>