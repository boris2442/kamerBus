<?php
require_once "includes/header.php";
?>
<section class="text-[#121212] dark:text-[#f1f1f1] dark:bg-[#121212] py-16 px-6 md:px-16 lg:flex items-center justify-between">
    <!-- Contenu texte -->
    <div class="max-w-xl mb-12 lg:mb-0">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4">Pourquoi choisir KamerBUS ?</h2>
        <p class="text-base sm:text-lg  mb-6">
            KamerBUS est une plateforme 100% camerounaise qui facilite la réservation de billets de bus en ligne.
            Grâce à notre service, vous pouvez planifier vos voyages à l’avance, comparer les horaires et éviter les longues attentes en agence.
            Nous travaillons avec des compagnies de transport fiables pour vous garantir confort et sécurité.
        </p>
        <ul class="space-y-3 ">
            <li class="flex items-start">
                <span class="text-[#FF7043] font-bold mr-2">✓</span> Réservation en ligne rapide et facile
            </li>
            <li class="flex items-start">
                <span class="text-[#FF7043] font-bold mr-2">✓</span> Horaires et trajets disponibles 24h/24
            </li>
            <li class="flex items-start">
                <span class="text-[#FF7043] font-bold mr-2">✓</span> Paiement sécurisé
            </li>
            <li class="flex items-start">
                <span class="text-[#FF7043] font-bold mr-2">✓</span> Support client réactif
            </li>
        </ul>
    </div>

    <!-- Image -->
    <div class="w-full lg:w-1/2">
        <!-- Remplace ce chemin avec ta propre image -->
        <img src="./publics/assets/about_img.jpg" alt="Réservation bus en ligne" class="w-full h-auto rounded-xl shadow-md" />
    </div>
</section>

<?php
require_once "includes/footer.php";
?>