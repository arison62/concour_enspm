<body class="text-slate-800">
    <header class="bg-blue-200 flex justify-between items-center">
        <div class="flex justify-between 
                items-center max-container
                py-4">
            <h1 class="text-xl w-90 font-semibold">ConcourApp | <?= esc(ucfirst($title)) ?> </h1>

            <nav class="flex items-center gap-8">
                <a class="hover:text-blue-600 hover:underline" href="<?= base_url('/') ?>">Acceuil</a>
            </nav>
        </div>
    </header>
    <?php 
        $title = strtolower($title);
    ?>
    <main class="flex items-center justify-center relative overflow-x-hidden">
        <div class="flex gap-6 w-full max-w-4xl">
            <div class="w-full md:w-1/2 flex justify-center items-center flex-col gap-6">
                <h3 class="text-xl text-slate-800 font-medium">
                    <?= esc(ucfirst($title)) ?>
                </h3>
                <form action="<?= esc($title) ?>" method="post" class="w-full flex flex-col gap-4 items-center">
                    <?= csrf_field() ?>
                    <div class="flex flex-col gap-2 max-w-sm w-full">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" name="email" placeholder="Entrez votre adresse mail" class="outline outline-slate-600 rounded p-2 
                            focus-within:outline-blue-600
                            has-invalid:outline-red-500" required />
                    </div>
                    <div class="flex flex-col gap-2  max-w-sm w-full">
                        <label for="password">
                            Mot de passe
                        </label>
                        <input type="text" name="password" placeholder="Entrez votre mot de passe" class="outline outline-slate-600 rounded p-2 
                            focus-within:outline-blue-600
                            has-invalid:outline-red-500" required />
                    </div>
                    <div class="flex flex-col gap-2 items-center max-w-sm w-full">
                        <input type="submit" value="<?= esc(ucfirst($title)) ?>" class="rounded outline-1 px-4 py-2
                        bg-blue-600 text-white w-full
                        hover:bg-blue-800
                        " />
                        <p class="text-slate-500">
                            <?php
                            $message = 'J\'ai un compte ';
                            $href = 'connexion';
                            $link = 'Se connecter';


                            if (strtolower($title) == 'connexion') {
                                $message = 'Je n\'ai pas de compte ';
                                $href = 'inscription';
                                $link = 'S\'inscrire';
                            }
                            ?>
                            <?= $message ?>
                            <a href="<?= base_url($href) ?>" class="text-blue-600 underline"><?= $link ?></a>
                        </p>
                    </div>
                    <div>
                        <?php
                        if (session()->getFlashdata('errors')) {
                            $errors = session()->getFlashdata('errors');
                            foreach ($errors as $error) {
                                echo '<p class="text-red-600">' . $error . '</p>';
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>

            <div class="h-[800px] w-1/2 hidden md:block">
                <div class="bg-blue-900 h-[800px] w-1/2 hidden md:block absolute">

                </div>
            </div>
        </div>
    </main>
</body>