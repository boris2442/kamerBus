
<?php
require_once "includes/header.php";
?>
<section class=" text-[#121212] dark:text-[#f1f1f1] py-12 px-6 md:px-16 lg:flex items-center justify-between">
  <!-- Texte -->
  <div class="max-w-xl mb-8 lg:mb-0">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6  font-monospace" style="font-family: monospace;">
      Réservez votre voyage en toute simplicité avec <span class="text-[#FF7043]"> KAMERBUS</span>
    </h1>
    <p class="text-base sm:text-lg md:text-xl leading-relaxed mb-6">
      KAMERBUS vous permet de réserver vos billets de bus en ligne en quelques clics. Évitez les files d’attente, comparez les horaires et voyagez sereinement partout au Cameroun.
    </p>
    <!-- <a href="#reservez" class="relative bg-[#FF7043] text-white px-6 py-3 rounded-xl text-sm sm:text-base font-medium transition duration-300 hover:bg-[#e45a2b] after:content-[''] after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-[#FF7043] after:opacity-0 after:transition-opacity after:duration-300 hover:after:opacity-100">
      Réservez maintenant
    </a> -->
    <a href="#reservez" class="relative inline-block px-6 py-3 rounded-xl text-sm sm:text-base font-medium text-white overflow-hidden group dark:shadow-lg">
  <span class="absolute left-0 top-0 w-0 h-full bg-[#FF7043] transition-all duration-500 ease-in-out group-hover:w-full z-0"></span>
  <span class="relative z-10 text-[#121212] dark:text-white ">Réservez maintenant</span>
</a>

  </div>

  <!-- Image -->
  <div class="w-full lg:w-1/2">
    <!-- Tu insères ici ton image -->
    <img src="./publics/assets/kambus.jpg" alt="Bus en voyage" class="w-full h-auto rounded-xl shadow-lg" />
  </div>
</section>


<?php
require_once "includes/footer.php";
?>