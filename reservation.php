<?php
require_once "includes/header.php";

?>
<section class=" min-h-screen px-6 py-12 md:px-16">
  <!-- Titre -->
  <h2 class="text-3xl md:text-4xl font-bold text-[#121212] mb-6 text-center">
    Réservez votre billet en ligne
  </h2>

  <!-- Formulaire de recherche -->
  <form class="bg-gray-100 dark:bg-[#121212] dark:text-white p-6 rounded-2xl shadow-md grid gap-4 md:grid-cols-2 lg:grid-cols-3 dark:shadow-emerald-500  ">
    <div>
      <label class="block text-sm font-medium mb-1">Ville de départ</label>
      <select class="w-full p-2 rounded bg-white dark:bg-[#e45b30] border border-gray-300 :placeholder:dark:text-white">
        <option>Douala</option>
        <option>Yaoundé</option>
        <option>Bafoussam</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Ville d’arrivée</label>
      <select class="w-full p-2 rounded bg-white border border-gray-300 dark:bg-[#e45b30]">
        <option>Yaoundé</option>
        <option>Douala</option>
        <option>Garoua</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Date du départ</label>
      <input type="date" class="dark:bg-[#e45b30] w-full p-2 rounded border border-gray-300 bg-white"  />
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Nombre de places</label>
      <input type="number" min="1" value="1" class="dark:bg-[#e45b30] w-full p-2 rounded border border-gray-300 bg-white " />
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Compagnie</label>
      <select class="w-full p-2 rounded bg-white border border-gray-300 dark:bg-[#e45b30]">
        <option>KamerBUS</option>
        <option>Finex</option>
        <option>Garanti Express</option>
        <option>General Express</option>
        <option>Global Express</option>
        <option>Tresor Express</option>
        <option>SGMV Express</option>
      </select>
    </div>
    <div class="flex items-end">
      <button type="submit" class="w-full bg-[#FF7043] text-white py-2 px-4 rounded hover:bg-[#e45b30] transition">
        Rechercher 
      </button>
    </div>
  </form>

  <!-- Résultats (simulation) -->
  <div class="mt-10">
    <h3 class="text-xl font-semibold mb-4 text-[#121212]">Trajets disponibles :</h3>
    
    <div class="grid gap-4 md:grid-cols-2">
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Global Voyages</p>
        <p>Départ : Douala – 08:30</p>
        <p>Arrivée : Yaoundé – 13:00</p>
      <p class="text-[#FF7043] font-semibold">Prix :vip: 5 000 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Finex Voyages</p>
        <p>Départ : Douala – 08:30</p>
        <p>Arrivée : Yaoundé – 13:00</p>
       <p class="text-[#FF7043] font-semibold">Prix :vip: 5 000 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">General Voyages</p>
        <p>Départ : Douala – 08:30</p>
        <p>Arrivée : Yaoundé – 13:00</p>
     <p class="text-[#FF7043] font-semibold">Prix :vip: 5 000 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>

      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Garanti Express</p>
        <p>Départ : Douala – 10:00</p>
        <p>Arrivée : Yaoundé – 14:30</p>
      <p class="text-[#FF7043] font-semibold">Prix :vip: 5 000 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Noblesse Express</p>
        <p>Départ : Douala – 10:00</p>
        <p>Arrivée : Yaoundé – 14:30</p>
        <p class="text-[#FF7043] font-semibold">Prix :vip: 4 500 FCFA / classique:2.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Garanti Express</p>
        <p>Départ : Douala – 10:00</p>
        <p>Arrivée : Yaoundé – 14:30</p>
        <p class="text-[#FF7043] font-semibold">Prix :vip: 7 000 FCFA / classique:5.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">SGMV Express</p>
        <p>Départ : Douala – 10:00</p>
        <p>Arrivée : Yaoundé – 14:30</p>
        <p class="text-[#FF7043] font-semibold">Prix :vip: 5 500 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
      <div class="p-4 border rounded-lg shadow-sm">
        <p class="font-bold">Tresor Express</p>
        <p>Départ : Douala – 10:00</p>
        <p>Arrivée : Yaoundé – 14:30</p>
        <p class="text-[#FF7043] font-semibold">Prix :vip: 5 000 FCFA / classique:4.000FCFA</p>
        <button class="dark:bg-[#FF7043] mt-2 bg-[#121212] text-white py-2 px-4 rounded hover:opacity-90 transition">
          Réserver ce billet
        </button>
      </div>
    </div>
  </div>
</section>

<?php
require_once "includes/footer.php";

?>