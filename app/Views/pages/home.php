<body class="text-slate-800">
    <header class="bg-blue-200 flex justify-between items-center">
        <div class="flex justify-between 
                items-center max-container
                py-4">
            <h1 class="text-xl w-90 font-semibold">Ecole Nationale Superieur Polytechnique de Maroua</h1>

            <nav class="flex items-center gap-8">
                <a class="hover:text-blue-600 hover:underline" href="<?= base_url('connexion') ?>">Se connecter</a>
                <button class="rounded bg-blue-800 
                    text-white px-4 py-2 hover:bg-blue-950">
                    <a href="<?= base_url('inscription') ?>">S'incrire</a>
                </button>
            </nav>
        </div>
    </header>
    <main>
        <div class="max-container mt-24 flex flex-col items-start gap-4">
            <p class="text-2xl font-medium max-w-xl">Bienvenu sur la plateforme d'inscription d'entree a l' <em
                    class="text-blue-600">Ecole Nationale Superieur Polytechnique de Maroua</em></p>

            <button
                class="rounded bg-blue-800 
                    text-white px-4 py-2 hover:bg-blue-950">
                <a href="<?= base_url("connexion") ?>">
                    Commecer l'inscription
                </a>
            </button>
        </div>
        <div
            class="mt-12 max-container">
            <h2 class="text-xl font-medium text-blue-900">Constitution du dossier</h2>
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 mt-8">
                <div class="shadow px-4 py-2">
                    <h3 class="font-medium">Premier cycle</h3>
                    <ul class="flex flex-col gap-3 mt-4">
                        <li>
                            Photocopie certifie du Probatoire / GCE Advance Level
                        </li>
                        <li>
                            Photocopie certifie du Baccalaureat ou tout diplome equivalent
                        </li>
                        <li>
                            Photocopie certifie de l'acte de naissance
                        </li>
                        <li>
                            Photocopie certifie de la carte nationale d'identite
                        </li>
                    </ul>
                </div>
                <div class="shadow px-4 py-2">
                    <h3 class="font-medium">Second cycle</h3>
                    <ul class="flex flex-col gap-3 mt-4">
                        <li>
                            Photocopie certifie du Probatoire / GCE Advance Level
                        </li>
                        <li>
                            Photocopie certifie du Baccalaureat ou tout diplome equivalent
                        </li>
                        <li>
                            Photocopie certifie de l'acte de naissance
                        </li>
                        <li>
                            Photocopie certifie de la carte nationale d'identite
                        </li>
                        <li>
                            Photocopie certifie du diplome d'entree
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>