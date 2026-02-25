<!DOCTYPE html>
<html lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
<title>Invitation MyColoc</title>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<div class="flex items-center p-4 pb-2 justify-between">
<div class="text-slate-900 dark:text-slate-100 flex size-12 shrink-0 items-center justify-center cursor-pointer">
<span class="material-symbols-outlined">arrow_back</span>
</div>
<h2 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-tight tracking-tight flex-1 text-center pr-12">MyColoc</h2>
</div>
<div class="@container px-4 py-3">
<div class="bg-cover bg-center flex flex-col justify-end overflow-hidden rounded-xl min-h-[220px] relative" data-alt="Cozy living room with modern furniture" style='background-image: linear-gradient(0deg, rgba(80, 72, 229, 0.8) 0%, rgba(0, 0, 0, 0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAUDQUwG7PCrT7KN_IitoYVgAwiPoBXPNzVPK-yecJZKXrBgR8EEpjpft3T9UChkNugd6eY9Z3KUFrP7WldTyCibmZNyEqQCVWsAZ1T3CIO42jRJDXeLC1HUEeqdSoXANLGHAirOyFCf1wxzmjYU1GYiTExPNJ2WydoPbLL8OYAY_-fj7OjDdeXLJCeHWzvziY3YfXZUXZ3joMdjXeGghMrQ9b1v5R8fax6o8n_8rUtm61fmhEm3LT-y00l1Of-3UDIiSqFT6qrZsFM");'>
<div class="flex p-6">
<p class="text-white tracking-tight text-[28px] font-extrabold leading-tight">Nouvelle invitation !</p>
</div>
</div>
</div>
<div class="px-4 pt-6 text-center">
<h1 class="text-slate-900 dark:text-slate-100 tracking-tight text-3xl font-extrabold leading-tight">Invitation à rejoindre {{ $invitation->colocation->name }}</h1>
<!-- <p class="text-slate-600 dark:text-slate-400 text-base font-medium mt-2">Thomas vous a invité à rejoindre sa colocation.</p> -->
</div>
<div class="px-4 pt-8">
<div class="flex items-center justify-between mb-4">
<h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-tight">Membres actuels </h3>
</div>
<div class="space-y-3">
<div class="flex items-center gap-3 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-primary/5">
<div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center overflow-hidden">
<img class="h-full w-full object-cover" data-alt="Portrait of Thomas, a young man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBevsnuS_-6quZVIfiw1fbqhUarkaiaadjuhLQNoY9S41z5lVZcgmHxVjafupEZblRHzQwVZaT0DF25QfCcseDhjS7-oZVImJJNUnxj40qBjaHbIAMfF_1MjrPu65LWeYbfgJjnpV7jreDjofzHV_2mioHsfqFpluOuDQ2TDuJRwcpxpGU4xBXwxUIza7E0_cmGXDQT4Jvqexc0PhxLHvyw9KhJjkurGWUA4v00CDFd2EqK9nh6kR5tZ5iQkbM1nBN0zTgtx3FBCJEW"/>
</div>
<div>
<p class="font-bold text-slate-900 dark:text-slate-100">Thomas</p>
<p class="text-xs text-primary font-semibold">Organisateur</p>
</div>
</div>
<div class="flex items-center gap-3 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-primary/5">
<div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center overflow-hidden">
<img class="h-full w-full object-cover" data-alt="Portrait of Sarah, a young woman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQGkjEFOcDCWGa3Aq_M8MkOZ6xUzDZzy6d0slS7k4NsN8NGhtViMIPWJrdythtCJi9j60rGrktv8UIUFgQkQxv77mGKmGWVBIUpJo7YhyJSKO4CCWppg_yl9JAoojzB9rmTjKU0YR8zIjLtksyyW0O8_BIrrmolTc5aemIMKivDlENUR_xFfNDsf6ir9TrxqMpB5jzysQoREPAoVtmoHA-xAsea6ZhEjkatW5prgEGwQmSYj3PyyOrMRy1nOKYbobhMy-x1h6qPruA"/>
</div>
<div>
<p class="font-bold text-slate-900 dark:text-slate-100">Sarah</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Membre depuis 2 mois</p>
</div>
</div>
<div class="flex items-center gap-3 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-primary/5">
<div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center overflow-hidden">
<img class="h-full w-full object-cover" data-alt="Portrait of Lucas, a young man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9gezEt5TP7oqnMq9Y-FQIBbCjZwKkyBia9Y5mcG6bM7BlrYdgS38M01LRBmYh-oZaTkNA6oe_t4J8SlwURXzQaZR2mE3sb4VST8KQhX685h5cVSvLv6qDn-eCUCRjLoBKt9YdJ6lI2Hksvz17_a-S6cJHfKdpq3f78umSy_shzir6N75G4ITZXhvArAFWqwnd8rKu50yIfxCoS7gFXjCXii_MedSBci2Ll2arV0B3vclDZ3KId_fPJ8AdMgoVf9z3I7LadUxdcgi2"/>
</div>
<div>
<p class="font-bold text-slate-900 dark:text-slate-100">Lucas</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Membre depuis 1 an</p>
</div>
</div>
</div>
</div>
<div class="mt-auto p-4 space-y-3 pb-8">
        <form method="POST" action="/invitation/accept/{{$invitation->token}}">
            @csrf
            <button class="w-full bg-primary hover:opacity-90 text-white font-bold py-4 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
            <span class="material-symbols-outlined">check_circle</span>
                Accepter l'invitation
            </button>
        </form>
        <form method="POST" action="/invitation/refuse/{{$invitation->token}}">
            @csrf
            <button class="w-full bg-white dark:bg-slate-800 text-red-500 border-2 border-red-500/10 hover:bg-red-50 dark:hover:bg-red-900/20 font-bold py-4 rounded-xl transition-all flex items-center justify-center gap-2">
            <span class="material-symbols-outlined">cancel</span>
                Refuser
            </button>
        </form>
</div>
</div>
</body></html>