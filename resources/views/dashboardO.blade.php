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
<title>EasyColoc - Inviter un membre</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="w-72 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full">
<div class="p-6 flex items-center gap-3">
<div class="size-10 rounded-xl bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">home_work</span>
</div>
<div>
<h1 class="text-lg font-bold leading-none">EasyColoc</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">Espace Propriétaire</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 bg-primary/10 text-primary rounded-lg" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Ma Colocation</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-sm font-medium">Messages</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">payments</span>
<span class="text-sm font-medium">Paiements</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Paramètres</span>
</a>
</nav>
<div class="p-4 mt-auto border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-9 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
<img alt="Profil" data-alt="Photo de profil du propriétaire" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDppQDaQbgakCNF_4r24pNPy7ucYyHV3MtIeIeHcIe6OEhDASE8g1qQaABcrcsNdsKHLxVrITih7oumuYnLTiLUmRH08f9BobzYPpwimZbknhdEw3XBsFDc9UgGMpfQOoPdBjGZLZI3d97k_OdGvS_KHO88JHLljVu01-2OVRBcwlQ3gVdVBsJaArUZZva4yo1Afq3mK7xNLp8AuDvg5RVup5jlElCjA7WBNv51Wv5uYSzerfsexSpfXpZw4b59lL75zrvzuNMk9WGq"/>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold truncate">Jean Dupont</p>
<p class="text-xs text-slate-500 truncate">Propriétaire</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">logout</span>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-72 p-10">
<header class="mb-10">
<div class="flex items-center gap-2 text-primary text-sm font-medium mb-2">
<span class="material-symbols-outlined text-base">arrow_back</span>
<span>Retour à la gestion des membres</span>
</div>
<h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-slate-100">Inviter un membre</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2">Gérez les invitations pour rejoindre votre colocation en toute simplicité.</p>
</header>
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mb-12">
<!-- Email Invitation Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="h-32 bg-primary/5 flex items-center px-8">
<div class="size-14 rounded-full bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">mail</span>
</div>
<div class="ml-4">
<h3 class="font-bold text-lg">Invitation par email</h3>
<p class="text-sm text-slate-500">Envoyez une invitation directe</p>
</div>
</div>
<div class="p-8 space-y-6 flex-1">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Adresse email du futur colocataire</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">alternate_email</span>
<input class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary" placeholder="exemple@email.fr" type="email"/>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 px-6 rounded-lg transition-all flex items-center justify-center gap-2 shadow-lg shadow-primary/20">
<span>Envoyer l'invitation</span>
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
<!-- Link Generation Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="h-32 bg-primary/5 flex items-center px-8">
<div class="size-14 rounded-full bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">link</span>
</div>
<div class="ml-4">
<h3 class="font-bold text-lg">Lien d'invitation</h3>
<p class="text-sm text-slate-500">Partagez un lien unique</p>
</div>
</div>
<div class="p-8 space-y-6 flex-1">
<p class="text-sm text-slate-600 dark:text-slate-400">Générez un lien sécurisé que vous pouvez envoyer par SMS, WhatsApp ou tout autre canal.</p>
<div class="flex items-center gap-2">
<div class="flex-1 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-3 rounded-lg text-slate-400 text-sm font-mono truncate italic">
                            https://easycoloc.app/invite/a7k9-p2q4-m9z2
                        </div>
<button class="bg-primary/10 hover:bg-primary/20 text-primary p-3 rounded-lg transition-colors" title="Copier le lien">
<span class="material-symbols-outlined">content_copy</span>
</button>
</div>
<button class="w-full border-2 border-primary text-primary hover:bg-primary/5 font-bold py-3 px-6 rounded-lg transition-all">
                        Générer un nouveau lien
                    </button>
</div>
</div>
</div><!-- Available Users Section -->
<section class="mb-12">
<div class="flex items-center justify-between mb-6">
<div>
<h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 flex items-center gap-2">
                Utilisateurs disponibles
                <span class="text-sm font-normal text-slate-500 ml-2">Candidats recherchant une colocation</span>
</h3>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- User Card 1 -->
@foreach($users as $user)
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="size-12 rounded-full bg-slate-100 overflow-hidden border-2 border-primary/20">
<img alt="Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AG6AXu9YtN-mH9wU6L3v0o-n8rGzY_eS9F_O8vM0P4e-8l0q_G_I"/>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-slate-100">{{$user->name}}</h4>
<div class="flex items-center gap-1 text-amber-500">
<!-- <span class="material-symbols-outlined text-sm fill-1">{{$user->email}}</span> -->
<span class="text-xs font-bold">{{$user->email}}</span>
<!-- <span class="text-xs text-slate-400 font-normal">(12 avis)</span> -->
</div> 
</div>
</div>
<button class="w-full py-2 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-lg font-semibold text-sm transition-all">
    Inviter
</button>
</div>
@endforeach
<!-- User Card 2 -->
<!--  
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="size-12 rounded-full bg-slate-100 overflow-hidden border-2 border-primary/20">
<img alt="Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AG6AXu-mK9rN8P_zV2p_k7z_G6rN9Y_eS9F_O8vM0P4e-8l0q_G_I"/>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-slate-100">Emma Morel</h4>
<div class="flex items-center gap-1 text-amber-500">
<span class="material-symbols-outlined text-sm fill-1">star</span>
<span class="text-xs font-bold">4.7</span>
<span class="text-xs text-slate-400 font-normal">(8 avis)</span>
</div>
</div>
</div>
<button class="w-full py-2 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-lg font-semibold text-sm transition-all">
                Inviter
            </button>
</div> -->
<!-- User Card 3 -->
<!-- <div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="size-12 rounded-full bg-slate-100 overflow-hidden border-2 border-primary/20">
<img alt="Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AG6AXu_R9p_mH9wU6L3v0o-n8rGzY_eS9F_O8vM0P4e-8l0q_G_I"/>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-slate-100">Kevin Petit</h4>
<div class="flex items-center gap-1 text-amber-500">
<span class="material-symbols-outlined text-sm fill-1">star</span>
<span class="text-xs font-bold">4.5</span>
<span class="text-xs text-slate-400 font-normal">(15 avis)</span>
</div>
</div>
</div>
<button class="w-full py-2 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-lg font-semibold text-sm transition-all">
                Inviter
            </button> 
</div>-->
</div>
</section>
<!-- Pending Invitations Table -->
<section>
<div class="flex items-center justify-between mb-6">
<h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 flex items-center gap-2">
                    Invitations en attente
                    <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-bold px-2 py-1 rounded-full">3</span>
</h3>
<button class="text-primary text-sm font-semibold hover:underline">Voir l'historique</button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<table class="w-full text-left">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Destinataire</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Date d'envoi</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Statut</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs">MA</div>
<span class="font-medium text-slate-700 dark:text-slate-300">marc.andré@email.com</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">12 Mai 2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
                                    En attente
                                </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<button class="text-slate-400 hover:text-primary transition-colors" title="Renvoyer l'email">
<span class="material-symbols-outlined text-lg">refresh</span>
</button>
<button class="text-slate-400 hover:text-red-500 transition-colors" title="Annuler l'invitation">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs">SL</div>
<span class="font-medium text-slate-700 dark:text-slate-300">sophie.legrand@gmail.com</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">08 Mai 2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
                                    En attente
                                </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<button class="text-slate-400 hover:text-primary transition-colors" title="Renvoyer l'email">
<span class="material-symbols-outlined text-lg">refresh</span>
</button>
<button class="text-slate-400 hover:text-red-500 transition-colors" title="Annuler l'invitation">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-400 flex items-center justify-center font-bold text-xs">TM</div>
<span class="font-medium text-slate-700 dark:text-slate-300">thomas.martin@outlook.com</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">25 Avr. 2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">
                                    Expiré
                                </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<button class="text-slate-400 hover:text-primary transition-colors" title="Renvoyer l'email">
<span class="material-symbols-outlined text-lg">refresh</span>
</button>
<button class="text-slate-400 hover:text-red-500 transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
<div class="p-4 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800 flex items-center justify-center">
<button class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors">Afficher plus de résultats</button>
</div>
</div>
</section>
<!-- Context Footer -->
<footer class="mt-16 pt-8 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-4 p-6 bg-primary/5 rounded-xl border border-primary/10">
<span class="material-symbols-outlined text-primary text-3xl">info</span>
<div>
<h4 class="font-bold text-slate-900 dark:text-slate-100">Conseil Propriétaire</h4>
<p class="text-sm text-slate-600 dark:text-slate-400">Une fois que votre futur colocataire aura accepté l'invitation, vous pourrez générer automatiquement le bail numérique pré-rempli avec ses informations.</p>
</div>
</div>
</footer>
</main>
</div>
</body></html>