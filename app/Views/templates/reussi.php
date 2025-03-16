<body class="bg-gray-100 min-h-screen flex items-center">
    <div class="max-w-2xl mx-auto text-center p-6">
        <!-- Icône de succès -->
        <div class="mb-8 animate-bounce">
            <i class="fas fa-check-circle text-green-500 text-6xl md:text-8xl"></i>
        </div>

        <!-- Message de succès -->
        <h1 class="text-3xl md:text-4xl font-bold text-green-600 mb-4">
            Félicitations !
        </h1>
        <p class="text-gray-600 text-lg mb-8">
            Votre inscription au concours a été validée avec succès !<br>
            Vous pouvez maintenant accéder à votre espace candidat.
        </p>

        <!-- Bouton de redirection -->
        <a href="<?= base_url('espace-candidat') ?>" 
           class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-8 rounded-lg transition-transform transform hover:scale-105">
            <i class="fas fa-user-circle mr-2"></i>
            Accéder à mon espace
        </a>

        <!-- Message secondaire -->
        <p class="mt-8 text-gray-500 text-sm">
            Vous recevrez sous peu un email de confirmation
        </p>
    </div>
</body>