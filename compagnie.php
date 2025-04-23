<?php
require_once "includes/header.php";

?>
<!-- Swiper CSS -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- <section class="bg-white py-16 px-6 md:px-16">
  <h2 class="text-3xl font-bold text-center text-[#121212] mb-4">Nos compagnies partenaires</h2>
  <p class="text-center text-gray-600 max-w-2xl mx-auto mb-10">
    KamerBUS collabore avec des agences de transport fiables à travers le Cameroun pour vous garantir un service rapide, sécurisé et confortable.
  </p>

  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 items-center justify-center">
    <!-- Logo 1 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">Finexs Voyage</span>
</div>
<!-- Logo 2 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">Garanti Express</span>
</div>
<!-- Logo 3 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">General Express</span>
</div>
<!-- Logo 4 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">Touristique Express</span>
</div>
<!-- Logo 5 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">TransCam</span>
</div>
<!-- Logo 6 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">Moghamo Voyage</span>
</div>
<!-- Logo 7 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">Avenir Voyage</span>
</div>
<!-- Logo 8 -->
<div class="flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
    <span class="text-[#FF7043] font-bold text-lg">NoStress Bus</span>
</div>
</div>
</section>
-->

<section class="bg-white py-16 px-6 md:px-16">
    <h2 class="text-3xl font-bold text-center text-[#121212] mb-4">Nos compagnies partenaires</h2>
    <p class="text-center text-gray-600 max-w-2xl mx-auto mb-10">
        KamerBUS collabore avec des agences de transport fiables pour vous offrir un service sécurisé et confortable.
    </p>

    <!-- Swiper -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow">
                <img src="chemin/vers/logo1.png" alt="Finexs" class="h-16 object-contain" />
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow">
                <img src="chemin/vers/logo2.png" alt="Garanti Express" class="h-16 object-contain" />
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow">
                <img src="chemin/vers/logo3.png" alt="General Express" class="h-16 object-contain" />
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow">
                <img src="chemin/vers/logo4.png" alt="Avenir Voyage" class="h-16 object-contain" />
            </div>
            <!-- Slide 5 -->
            <div class="swiper-slide flex items-center justify-center bg-gray-100 p-6 rounded-xl shadow">
                <img src="chemin/vers/logo5.png" alt="TransCam" class="h-16 object-contain" />
            </div>
            <!-- Ajoute d'autres slides si besoin -->
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".swiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            1024: {
                slidesPerView: 5
            },
        },
    });
</script>




<?php
require_once "includes/footer.php";
?>