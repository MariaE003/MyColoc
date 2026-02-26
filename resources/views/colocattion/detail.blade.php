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
<div class="hidden lg:flex">
<label class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-slate-400">search</span>
<input class="form-input h-10 w-64 rounded-lg border-none bg-slate-100 pl-10 text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search residents or expenses..." value=""/>
</label>
</div>
</div>
<div class="flex items-center gap-4">
<button class="flex size-10 items-center justify-center rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex size-10 items-center justify-center rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-10 w-px bg-slate-200 mx-2"></div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-sm font-bold text-slate-900">Alex Rivers</p>
<p class="text-xs text-slate-500">Administrator</p>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="User profile avatar showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAe76cn2fKKxZZuX34PXViZcKJErSfA1m26gloH1CVHjQ4Or-oRK0X3qSO5tWCgeu5eTsO4qRK0Z7O4pbBo2_5-y7m_tYMOJInd9pPzBmWXNSkmYNiq56PQElv4DeR1qIyv6w2bqsTE7yx5iFDtROn4bRbC8d5t-Rt7VuYIK4g9anRDLhRubkVJWYF_4j-QlIx812m20UdPZXvkI37TeBgpD1U_PphMltv6-DGHN-uKA3D1CEQmHAeeQAcb-_wLFtPe-WtCF6slUCXN");'></div>
</div>
</div>
</header>
<div class="flex flex-1">
<!-- Sidebar Navigation -->
<aside class="w-64 border-r border-slate-200 bg-white p-4 hidden md:flex flex-col justify-between sticky top-[65px] h-[calc(100vh-65px)]">
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-semibold leading-normal">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white shadow-lg shadow-primary/20 transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-semibold leading-normal">Colocation</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">payments</span>
<span class="text-sm font-semibold leading-normal">Expenses</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-sm font-semibold leading-normal">Messages</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-colors" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span class="text-sm font-semibold leading-normal">Profile</span>
</a>
</div>
<div class="bg-slate-50 rounded-xl p-4 border border-slate-100">
<p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Storage Usage</p>
<div class="w-full bg-slate-200 rounded-full h-1.5 mb-2">
<div class="bg-primary h-1.5 rounded-full" style="width: 65%"></div>
</div>
<p class="text-xs text-slate-600">6.5 GB of 10 GB used</p>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto bg-background-light p-8">
<div class="max-w-6xl mx-auto">
<!-- Hero/Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
<div class="flex flex-col gap-2">
<!-- <div class="flex items-center gap-2 text-primary font-bold text-sm uppercase tracking-widest">
<span class="material-symbols-outlined text-sm">location_on</span>
Sunnyvale, CA
</div> -->
<h1 class="text-slate-900 text-4xl font-black leading-tight tracking-tight">{{$colocation->name}}</h1>
<!-- <p class="text-slate-500 text-lg font-medium">Modern community living in the heart of Silicon Valley</p> -->
</div>
<!-- <button class="flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/25">
<span class="material-symbols-outlined">person_add</span>
<span>Invite Member</span>
</button> -->
    <section>
        <a href="{{route('add.depense')}}" class="flex w-full items-center justify-center gap-2 rounded-xl bg-primary py-4 text-white shadow-lg shadow-primary/30 transition-transform active:scale-95">
            <span class="material-symbols-outlined">add_circle</span>
            <span class="font-bold">Add New Expense</span>
        </a>
    </section>

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
<!-- <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Status</th> -->
<th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Reputation</th>
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

<td class="px-6 py-4">
<div class="flex flex-col gap-1 w-32">
<div class="flex justify-between items-center text-xs">
<span class="font-bold text-slate-700">98/100</span>
</div>
<div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 98%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-sm font-bold text-primary hover:underline">Edit</button>
</td>
</tr>
@endforeach
<!-- Member 2 -->
<!-- <tr class="hover:bg-slate-50/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center border border-slate-200" data-alt="Avatar of Sarah Chen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD4ZFN2E1i-i7fdTvAoFxhykqdAO0pKBV4lijm1bV6cwlDUovtZdIYUlEnEiQCzyc9DDhAt5_ZrTxKPwlsLXjD89Om6Pl0JRxmW_lHlIpGbSwJjyKZaZcH58ghyiNMh3eENrdzu-rLs9lLZ2wNEybktJcFCBv4K7fE7e62zSxVVnm_CMnfG1CG7KmbisW_JhqEuo1WwkfH6BJ46_a0Ghur-h25hPfqDGildJ8pWTzKcQdAqU22iI9t7EXaMzfMaqM2mpgXs4gQclZhd");'></div>
<div>
<p class="text-sm font-bold text-slate-900">Sarah Chen</p>
<p class="text-xs text-slate-500">s.chen@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-bold text-slate-600">Member</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-green-500"></div>
<span class="text-sm text-slate-600">Online</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-1 w-32">
<div class="flex justify-between items-center text-xs">
<span class="font-bold text-slate-700">92/100</span>
</div>
<div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 92%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-sm font-bold text-primary hover:underline">View</button>
</td>
</tr> -->
<!-- Member 3 -->
<!-- <tr class="hover:bg-slate-50/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center border border-slate-200" data-alt="Avatar of Jordan Smith" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC6v1K9MOBg3f_IWcH3vQOdNf5rbUuoZyFkSmhqUXEI68qiXQEaq9TqFZ-HQPScTddcfQ7ESw21uZozImeBrdTJTBgKFcBh9kCzlKmn-2Z-ujc3AWAbI2UlyI6r9BVrUDNWE8_x_pemJ_sGQNNxf1r8Hud8yhwbv2YEwejbmlbufjhzwPK5MeRjJ2naaOBbu_ft7hKpRECAbV297NFRMQ5-ILoqPECi-8JOl2ipoc_msrxa6qQ73bWrFzvBtr_phpZjtSeZAAtf1fK_");'></div>
<div>
<p class="text-sm font-bold text-slate-900">Jordan Smith</p>
<p class="text-xs text-slate-500">jsmith@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-bold text-slate-600">Member</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-slate-300"></div>
<span class="text-sm text-slate-600">Away</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-1 w-32">
<div class="flex justify-between items-center text-xs">
<span class="font-bold text-slate-700">85/100</span>
</div>
<div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 85%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-sm font-bold text-primary hover:underline">View</button>
</td>
</tr> -->
</tbody>
</table>
</div>
<div class="p-6 bg-slate-50/30 border-t border-slate-100 flex items-center justify-between">
<p class="text-sm text-slate-500 font-medium">Showing 1-4 of 8 members</p>
<div class="flex gap-2">
<button class="px-4 py-2 border border-slate-200 rounded-lg text-sm font-bold text-slate-600 bg-white hover:bg-slate-50 transition-colors">Previous</button>
<button class="px-4 py-2 border border-slate-200 rounded-lg text-sm font-bold text-slate-600 bg-white hover:bg-slate-50 transition-colors">Next</button>
</div>
</div>
</div>
<!-- Map/Location Preview (Generated) -->
<div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
<h3 class="text-slate-900 font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">map</span>
                                Property Location
                            </h3>
<div class="h-64 rounded-xl bg-slate-200 relative overflow-hidden group">
<div class="absolute inset-0 bg-slate-300 flex items-center justify-center">
<span class="material-symbols-outlined text-4xl text-slate-400">explore</span>
</div>
<!-- Map placeholder -->
<div class="absolute inset-0 bg-[url('https://placeholder.pics/svg/800x400/e2e8f0/64748b')] bg-cover bg-center" data-alt="Map showing the location of the house in Sunnyvale" data-location="Sunnyvale, California" style=""></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
<div class="size-8 bg-primary border-4 border-white rounded-full shadow-xl flex items-center justify-center text-white ring-8 ring-primary/20">
<span class="material-symbols-outlined text-xs">home</span>
</div>
</div>
</div>
</div>
<div class="bg-primary text-white p-8 rounded-2xl shadow-xl shadow-primary/20 flex flex-col justify-between">
<div>
<h3 class="text-2xl font-black mb-2">Join the Community</h3>
<p class="opacity-80 font-medium mb-6">Invite your new housemates to start tracking expenses and sharing responsibilities together.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-green-300">check_circle</span>
<span class="text-sm font-bold">Transparent Split</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-green-300">check_circle</span>
<span class="text-sm font-bold">Trust-based Reputation</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-green-300">check_circle</span>
<span class="text-sm font-bold">House Chat Rooms</span>
</li>
</ul>
</div>
<button class="w-full bg-white text-primary py-4 rounded-xl font-black hover:bg-slate-50 transition-colors uppercase tracking-widest text-sm">
                                Send Invitations
                            </button>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>