<body>
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
    <main class="bg-gray-100 p-4 md:p-6 mb-12">

       
            <form method="post" class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 space-y-8">
                <?= csrf_field()?>
                <!-- Section 1: Information candidat -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-6 text-blue-600">1. Information sur le candidat</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Nom</label>
                            <input name="nom" type="text" class="w-full p-2 border rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Prénom</label>
                            <input name="prenom" type="text" class="w-full p-2 border rounded-md">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Date de naissance</label>
                            <input name="date_naissance" type="date" class="w-full p-2 border rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Lieu de naissance</label>
                            <input name="lieu_naissance" type="text" class="w-full p-2 border rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Nationalité</label>
                            <select name="nationalite_id" id="nationalite" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner</option>
                                <?php foreach ($nationalites as $nationalite): ?>
                                <option value="<?=$nationalite['id'] ?>">
                                    <?=$nationalite['nom'] ?>
                                </option> 
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Région</label>
                            <select id="region" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner une région</option>
                                <?php foreach ($regions as $region): ?>
                                <option value="<?=$region['id'] ?>">
                                    <?=$region['nom'] ?></option>
                                </option> 
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Département</label>
                            <select name="departement_id" id="departement" class="w-full p-2 border rounded-md" disabled required>
                                <option value="">Sélectionnez d'abord une région</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Formation -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-6 text-blue-600">2. Information sur la formation</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Cycle</label>
                            <select name="cycle_id" id="cycle" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner</option>
                                <?php foreach ($cycles as $cycle): ?>
                                <option value="<?=$cycle['id'] ?>">
                                    <?=$cycle['nom'] ?></option>
                                </option> 
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Parcours</label>
                            <select name="parcours_id" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner</option>
                                <?php foreach ($parcours as $parcour): ?>
                                <option value="<?=$parcour['id'] ?>">
                                    <?=$parcour['nom'] ?></option>
                                </option> 
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Diplôme -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-6 text-blue-600">3. Information sur le diplôme</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Type de diplôme</label>
                            <select name="type_diplome_id" id="diplome_type" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner d'abord un cycle</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Établissement</label>
                            <input name="etablissement" type="text" class="w-full p-2 border rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Année d'obtention</label>
                            <input name="annee_obtention" type="number" min="2000" max="2024" class="w-full p-2 border rounded-md" required>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Centre examen -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-6 text-blue-600">4. Lieu du concours</h2>
                    <div class="grid grid-cols-1">
                        <div>
                            <label class="block text-sm font-medium mb-2">Centre d'examen</label>
                            <select name="centre_examen_id" class="w-full p-2 border rounded-md" required>
                                <option value="">Sélectionner un centre</option>
                                <?php foreach ($centres as $centre): ?>
                                <option value="<?=$centre['id'] ?>">
                                    <?=$centre['nom'] ?></option>
                                </option> 
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <?php
                    $errors = session()->getFlashdata('errors');
                    if(isset($errors)){
                        foreach($errors as $error){
                            echo '<p class="text-red-500">' .$error.'</p>';
                        }
                    }
                ?>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 transition">
                    Soumettre l'inscription
                </button>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Données mockées (à remplacer par les données du contrôleur)
                    const regions = <?= json_encode($departementsRegion) ?>;
                    const diplomesParCycle = <?= json_encode($diplomeType) ?>;
                    console.log(diplomesParCycle)
                    // Gestion des régions/départements
                    const regionSelect = document.getElementById('region');
                    const departementSelect = document.getElementById('departement');

                   
                    regionSelect.addEventListener('change', function () {
                        departementSelect.disabled = !this.value;
                        departementSelect.innerHTML = '<option value="">Sélectionner un département</option>';

                        if (this.value) {
                            let region = regions.find((el) => el.id == this.value)
                            region.departements.forEach(dept => {
                                departementSelect.innerHTML += `<option value="${dept['id']}" >${dept['nom']}</option>`;
                            });
                        }
                    });

                    // Gestion cycle/diplôme
                    const cycleSelect = document.getElementById('cycle');
                    const diplomeTypeSelect = document.getElementById('diplome_type');

                    cycleSelect.addEventListener('change', function () {
                        diplomeTypeSelect.innerHTML = '<option value="">Sélectionner un type</option>';

                        if (this.value) {
                            let cycle = diplomesParCycle.find((el) => el.id == this.value)
                            cycle.diplomeTypes.forEach(diplome => {
                                diplomeTypeSelect.innerHTML += `<option value="${diplome['id']}">${diplome['nom']}</option>`;
                            });
                        }
                    });
                });
            </script>
       
    </main>
</body>