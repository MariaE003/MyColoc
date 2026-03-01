<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc - Colocation Details</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Manrope"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
<body class="bg-background-light text-slate-900 font-display">
<div class="relative flex min-h-screen w-full flex-col">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between border-b border-slate-200 bg-white px-8 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-primary">
<div class="size-8 flex items-center justify-center bg-primary/10 rounded-lg">
<span class="material-symbols-outlined">home_work</span>
</div>
<h2 class="text-slate-900 text-xl font-extrabold tracking-tight">MyColoc</h2>
</div>
</div>
</header>
<div class="flex flex-1">
<!-- Sidebar Navigation -->
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
<main class="flex-1 overflow-y-auto bg-background-light p-8">
<div class="max-w-6xl mx-auto">
<!-- Hero/Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
<div class="flex flex-col gap-2">
    @if($colocation)
    <h1 class="text-slate-900 text-4xl font-black leading-tight tracking-tight">{{$colocation->name}}</h1>
    @endif
</div>
    <section>
        <a href="{{route('add.depense')}}" class="flex w-full items-center justify-center gap-2 rounded-xl bg-primary py-4 text-white shadow-lg shadow-primary/30 transition-transform active:scale-95">
            <span class="material-symbols-outlined">add_circle</span>
            <span class="font-bold">Add New Expense</span>
        </a>
    </section>
    @if(auth()->id() !== $colocation->owner_id)
    <form method="POST" action="{{route('leave.colocation')}}">
        @csrf
        <button class="bg-red-500 text-white px-4 py-2 rounded">
            Quitter la colocation
        </button>
    </form>
     @endif
    @if(auth()->id() === $colocation->owner_id)
        <form action="{{route('cancel.colocation',$colocation->id)}}" method="POST">
        @csrf
        <button class="bg-red-500 text-white flex w-full items-center justify-center gap-2 rounded-xl bg-primary py-4 shadow-lg shadow-primary/30 transition-transform active:scale-95">
            Annuler colocation
        </button>
        </form>
    @endif


</div>
<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">group</span>
</div>
<div>
<p class="text-sm text-slate-500 font-medium">Total Members</p>
<p class="text-2xl font-black text-slate-900">{{$totalMember}}</p>
</div>
</div>
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-green-50 text-green-600 flex items-center justify-center">
<span class="material-symbols-outlined">verified</span>
</div>
<div>
<p class="text-sm text-slate-500 font-medium">Avg. Reputation</p>
<p class="text-2xl font-black text-slate-900">94/100</p>
</div>
</div>
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
<span class="material-symbols-outlined">calendar_month</span>
</div>
<div>
<p class="text-sm text-slate-500 font-medium">Next Rent Due</p>
<p class="text-2xl font-black text-slate-900">Oct 1st</p>
</div>
</div>
</div>
<!-- Members List Section -->
<div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 flex justify-between items-center bg-white">
<h2 class="text-slate-900 text-xl font-bold">Colocation Members</h2>
<div class="flex gap-2">
<button class="p-2 text-slate-400 hover:text-primary"><span class="material-symbols-outlined">filter_list</span></button>
<button class="p-2 text-slate-400 hover:text-primary"><span class="material-symbols-outlined">more_vert</span></button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50/50">
<th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Member</th>
<th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Role</th>
<th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<!-- Member 1 -->
@foreach($members as $member)
<tr class="hover:bg-slate-50/50 transition-colors">
<td class="px-6 py-4">
    <div class="flex items-center gap-3">
    <div class="size-10 rounded-full bg-cover bg-center border border-slate-200" data-alt="Avatar of Alex Rivers" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDUzO-3DGNS8WaOvKl7oAFoDrvS3koLs9A5-mIDeP-dFvyVQfKui3ETlbBHcuT2fz2a3XQ-_bLYerZV8CK-R_jqh6f_ssrzWwWwhZe0mEo8JcjEDNpXVLbYcEuL7DHuOIcOmOCkIHljgiN2DDTPQh4W2PDy4YqTF2vCi6qYxffys8ViQKMf9yxJ0Rz5PoZr7fE6Qaqa14r65HFvRz3TL-6fYg2bTmAChLsewWehY_9xBIR8ldZSfEVoG8bFOB5s6HrCfgvpc2A-_Bzd");'></div>
    <div>
    <p class="text-sm font-bold text-slate-900">{{$member->user->name}}</p>
    <p class="text-xs text-slate-500">{{$member->role}}</p>
    </div>
    </div>
</td>
<td class="px-6 py-4">
    <span class="inline-flex items-center rounded-lg bg-primary/10 px-2.5 py-1 text-xs font-bold text-primary">{{$member->role}}</span>
</td>

<td>
    @if(auth()->id() == $colocation->owner_id && $member->role != 'owner')
    <form action="{{ route('removeMember.colocation', [$colocation->id, $member->user->id]) }}" method="POST">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-3 py-1.5 rounded-lg text-sm font-bold hover:bg-red-600">
            Retirer
        </button>
    </form>
    @endif
    @endforeach
</td>
</tr>

</tbody>
</table>
</div>

</div>
<div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden mt-10">

    <!-- Header -->
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <h2 class="text-slate-900 text-xl font-bold">Utilisateurs disponibles</h2>
    </div>

    <!-- Cards -->
    <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($users as $user)
        <div class="bg-white rounded-xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">

            <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 rounded-full bg-slate-100 overflow-hidden border-2 border-primary/20">
                    <img class="w-full h-full object-cover"
                         src="https://ui-avatars.com/api/?name={{urlencode($user->name)}}"
                         alt="avatar">
                </div>

                <div>
                    <h4 class="font-bold text-slate-900">{{$user->name}}</h4>
                    <p class="text-xs text-slate-500">{{$user->email}}</p>
                </div>
            </div>

            <a href="{{route('envoyer',['id_receiver'=> $user->id])}}"
               class="block text-center py-2 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-lg font-semibold text-sm transition">
                Inviter
            </a>

        </div>
        @endforeach

    </div>
</div>
</div>
</main>
</div>
</div>
</body></html>