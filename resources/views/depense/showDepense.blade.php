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

 <aside class="w-64 border-r border-slate-200 bg-white p-4 hidden md:flex flex-col justify-between sticky top-[65px] h-[calc(100vh-65px)]">

<div class="flex flex-col gap-2">
<a href="{{route('home')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">Home</span>
<span class="text-sm font-semibold leading-normal">Home</span>
</a>
<a href="{{route('mycolocation')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white shadow-lg shadow-primary/20 transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-semibold leading-normal">Colocation</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="{{route('show.depense')}}">
<span class="material-symbols-outlined">payments</span>
<span class="text-sm font-semibold leading-normal">Expenses</span>
</a>
@if(auth()->id() === $colocation->owner_id)
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="{{route('show.categorie')}}">
<!-- <span class="material-symbols-outlined">chat_bubble</span> -->
<span class="text-sm font-semibold leading-normal">Categorie</span>
</a>
@endif

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
<!-- Main Content Area -->

<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0 overflow-auto">
<!-- Top Header -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-8 py-4 flex items-center justify-between sticky top-0 z-10">
<h1 class="text-2xl font-bold">Expenses List</h1>
<div class="flex items-center gap-4">

<a href="{{route('add.depense')}}" class="bg-primary text-white px-4 py-2 rounded-lg font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 transition-all flex items-center gap-2">
<span class="material-symbols-outlined">add</span>
<span>Add Expense</span>
</a>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Filters & Table -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<!-- Table Header/Filters -->
<div class="p-4 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div class="flex gap-4">
    
<!-- <select class="bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm font-medium focus:ring-2 focus:ring-primary/20">
<option>April 2024</option>
<option>March 2024</option>
<option>February 2024</option>
</select> -->

<form method="GET" action="{{ route('show.depense') }}">
    <input type="month" name="month" value="{{ request('month') }}">
    <button type="submit">Filtrer</button>
</form>
<a href="{{route('show.depense')}}">Clear</a>

</div>
</div>


<table class="w-full text-left">
<thead>
<tr class="text-slate-500 dark:text-slate-400 text-xs uppercase tracking-wider font-bold">
<th class="px-6 py-4">Title</th>
<th class="px-6 py-4">Amount</th>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4">Category</th>
<th class="px-6 py-4">Payer</th>
<th class="px-6 py-4">Payé ?</th>
<th class="px-6 py-4">Action</th>
<th class="px-6 py-4">Action</th>

</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
    @forelse($depenses as $depense)
    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
        <td class="px-6 py-4 font-bold">{{ $depense->title }}</td>
        <td class="px-6 py-4 text-red-500 font-bold">- {{ $depense->montant }} DH</td>
        <td class="px-6 py-4 text-slate-500">{{ $depense->date }}</td>
        <td class="px-6 py-4">
            <span class="text-[10px] px-2 py-1 rounded-full bg-orange-100 text-orange-700 font-bold uppercase">
                {{ $depense->categorie->name }}
            </span>
        </td>
        <td class="px-6 py-4">{{ $depense->payer->name }}</td>
        <td class="px-6 py-4">
            @if($depense->is_paid)
                <span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-700 font-bold">Payé</span>
            @else
                <span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-700 font-bold">Non payé</span>
            @endif
        </td>
        
        <!--  -->
        <td class="px-6 py-4">
            @php
                $part = $depense->montant / $members->count();
                $dejaPaye = $depense->payments
                    ->where('payer_id', auth()->id())
                    ->sum('montant');
                $reste = $part - $dejaPaye;
            @endphp
            @if(!$depense->is_paid && auth()->id() == $depense->payer_id)
                <a href="{{ route('depense.paid', $depense->id) }}"
                class="bg-primary text-white px-3 py-1.5 rounded-lg text-sm font-bold">
                    ✓ Marquer payé
                </a>
            @elseif(!$depense->is_paid && auth()->id() != $depense->payer_id && $reste > 0.01)
                <form action="{{ route('payment.store') }}" method="POST" class="inline">
                    @csrf
                    <input type="hidden" name="depense_id"  value="{{ $depense->id }}">
                    <input type="hidden" name="receiver_id" value="{{ $depense->payer_id }}">
                    <input type="hidden" name="montant"     value="{{ $reste }}">
                    <button type="submit"
                        class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm font-bold hover:bg-green-600">
                        Rembourser {{ number_format($reste, 2) }} DH
                    </button>
                </form>

            @elseif($depense->is_paid)
                <span class="text-green-600 font-bold text-sm">✓ Payé</span>

            @elseif(auth()->id() != $depense->payer_id && $reste <= 0.01)
                <span class="text-green-500 font-bold text-sm">✓ Remboursé</span>
            @endif
        </td>
        <td  class="px-6 py-4">
            @if(auth()->id() == $depense->payer_id || auth()->id() == $depense->colocation->owner_id)
                <form action="{{route('delete.depense',$depense->id)}}" method="POST">
                    @csrf
                    <button class="bg-red-500 text-white px-3 py-1.5 rounded-lg text-sm font-bold hover:bg-red-600" type="submit">Delete</button>
                </form>
            @endif
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="7" class="text-center py-6 text-slate-500">Aucune dépense trouvée</td>
    </tr>
    @endforelse
</tbody>

</table>    
<div class="mt-6 px-4 pb-6">
    <h2 class="text-lg font-bold mb-3">Soldes des membres</h2>
    <table class="w-full text-left border border-gray-200 rounded-xl overflow-hidden">
        <thead class="bg-gray-100 dark:bg-slate-800">
            <tr>
                <th class="px-4 py-3 text-sm font-bold text-slate-600">Membre</th>
                <th class="px-4 py-3 text-sm font-bold text-slate-600">Solde</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $m)
            <tr class="border-t border-gray-100">
                <td class="px-4 py-3 font-medium">{{ $m->user->name }}{{ auth()->id() == $m->user->id ? '(YOU)' : '' }}</td>
                <td class="px-4 py-3">
                    @if($balances[$m->user->id] > 0.01)
                        <span class="text-green-600 font-bold">
                            ▲ Doit recevoir {{ number_format($balances[$m->user->id], 2) }} DH
                        </span>
                    @elseif($balances[$m->user->id] < -0.01)
                        <span class="text-red-600 font-bold">
                            ▼ Doit payer {{ number_format(abs($balances[$m->user->id]), 2) }} DH
                        </span>
                    @else
                        <span class="text-gray-400 font-bold">✓ Solde équilibré</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
</main>
</div></body></html>