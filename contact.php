
<?php
require_once "includes/header.php";
?>
<section id="contact" class="w-full px-4 py-16 dark:text-[#f1f1f1] dark:bg-[#121212] bg-white">
  <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
    
    <!-- Infos de contact -->
    <div class="animate-fade-in-up duration-700 delay-100">
      <h2 class="text-3xl font-bold text-[#121212] mb-4">Contactez-nous</h2>
      <p class="text-gray-600 mb-4 dark:text-[#f1f1f1]">
        Une question ? Besoin d'aide pour une réservation ? Écrivez-nous et notre équipe vous répondra dans les plus brefs délais.
      </p>
      <ul class="text-[#FF7043] space-y-2">
        <li><strong>Email :</strong> <span class="text-gray-700 dark:text-[#f1f1f1]">support@kamerbus.com</span> </li>
        <li><strong>Téléphone :</strong> <span class="text-gray-700 dark:text-[#f1f1f1]">+237 6 94 22 35 03</span> </li>
        <li><strong>Adresse :</strong> <span class="text-gray-700 dark:text-[#f1f1f1]">Yaoundé, Cameroun</span> </li>
      </ul>
    </div>

    <!-- Formulaire -->
    <form class="animate-fade-in-up duration-700 delay-200 space-y-4">
      <div>
        <label class="block mb-1 text-sm text-gray-700 dark:text-[#f1f1f1]">Nom complet</label>
        <input type="text" placeholder="Votre nom" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FF7043] dark:text-[#f1f1f1] dark:placeholder-white" required>
      </div>

      <div>
        <label class="block mb-1 text-sm text-gray-700 dark:text-[#f1f1f1]">Email</label>
        <input type="email" placeholder="exemple@email.com" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FF7043]  focus:dark:text-[#f1f1f1] dark:placeholder-white" required>
      </div>

      <div>
        <label class="block mb-1 text-sm text-gray-700 dark:text-[#f1f1f1]">Message</label>
        <textarea rows="5" placeholder="Écrivez votre message ici..." class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FF7043] dark:text-[#f1f1f1] dark:placeholder-white resize-none" required></textarea>
      </div>

      <button type="submit" class="bg-[#FF7043] hover:bg-[#e75b2f] text-white font-semibold px-6 py-3 rounded-xl transition-all">
        Envoyer
      </button>
    </form>

  </div>
</section>

<?php
require_once "includes/footer.php";
?>