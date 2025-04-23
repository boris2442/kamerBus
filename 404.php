<?php
require_once "includes/header.php";
?>
<style>
    header a{
        display: none;
        
    }
    button#menuToggle{
        display: none;
    }
</style>
<section class="flex flex-col items-center justify-center h-screen bg-white dark:bg-[#121212] text-gray-800 dark:text-white transition-colors duration-300">
    <h1 class="text-5xl font-bold mb-4">404</h1>
    <p class="text-xl mb
-8">Page not found</p>
    <p class="text-lg mb-8">The page you are looking for does not exist.</p>
    <a href="index" class="bg-[#FF7043] text-white px-6 py-3 rounded-xl text-sm sm:text-base font-medium transition duration-300 hover:bg-[#e45a2b]">
        Go to Home
    </a>
</section>

<?php
require_once "includes/footer.php";
?>