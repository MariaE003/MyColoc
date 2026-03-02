<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#5048e5",
                "background-light": "#f6f6f8",
                "background-dark": "#121121",
            },
            fontFamily: {
                display: ["Manrope"]
            }
        }
    }
}
</script>

<title>Invitation MyColoc</title>
</head>

<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex items-center justify-center px-4">

<div class="max-w-xl w-full bg-white dark:bg-slate-900 rounded-2xl shadow-xl border border-slate-200 dark:border-slate-800 p-8 text-center space-y-6">

    <!-- Icon -->
    <div class="w-20 h-20 mx-auto bg-primary/10 text-primary rounded-full flex items-center justify-center">
        <span class="material-symbols-outlined text-4xl">group_add</span>
    </div>

    <!-- Title -->
    <div>
        <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white">
            Nouvelle invitation 🎉
        </h1>
        <p class="text-slate-500 dark:text-slate-400 mt-2">
            Vous avez été invité à rejoindre
        </p>
        <p class="text-xl font-bold text-primary mt-1">
            {{ $invitation->colocation->name }}
        </p>
    </div>

    <!-- Buttons -->
    <div class="space-y-4 pt-4">

        <form method="POST" action="/invitation/accept/{{ $invitation->token }}">
            @csrf
            <button type="submit"
                class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">check_circle</span>
                Accepter l'invitation
            </button>
        </form>

        <form method="POST" action="/invitation/refuse/{{ $invitation->token }}">
            @csrf
            <button type="submit"
                class="w-full bg-white dark:bg-slate-800 text-red-500 border border-red-200 dark:border-red-800 hover:bg-red-50 dark:hover:bg-red-900/20 font-bold py-3 rounded-xl transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">cancel</span>
                Refuser
            </button>
        </form>

    </div>

</div>

</body>
</html>