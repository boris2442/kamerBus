<header class="flex items-center justify-between p-4 md:px-10 shadow-sm bg-white dark:bg-[#121212] sticky top-0 z-50 transition-colors duration-300">
    <!-- Logo -->
    <div class="flex-shrink-0">
        <img src="publics\assets\kamerbuslogojpg.jpg" alt="KamerBus Logo" class=" w-[70px] h-[70px] md:h-[100px] md:w-[100px] rounded-[50%]" />
    </div>

    <!-- Dark Mode Toggle -->
    <button id="themeToggle" class="text-2xl md:mr-4 focus:outline-none">
        <span id="themeIcon" class="material-symbols-outlined">dark_mode</span>
    </button>

    <!-- Hamburger Button (Mobile) -->
    <button id="menuToggle" class="md:hidden text-3xl focus:outline-none z-50">
        ☰
    </button>

    <!-- Nav Menu (Desktop) -->
    <nav class="hidden md:flex space-x-8 text-lg font-medium">
        <a href="index" class="nav-link">Home</a>
        <a href="about" class="nav-link">About</a>
        <a href="compagnie" class="nav-link">compagnies</a>
        <a href="contact" class="nav-link">contact</a>
        <a href="reservation" class="nav-link">Reservez</a>
    </nav>

    <!-- Fullscreen Menu (Mobile) -->
    <div id="mobileMenu" class="fixed inset-0 bg-white dark:bg-[#121212] z-50 hidden flex-col items-center justify-center space-y-8 text-2xl font-semibold ">
        <!-- Close Button -->
        <button id="closeMenu" class="absolute top-5 right-5 text-3xl z-50">&times;</button>
        <div class="flex flex-col gap-[10px]">
            <a href="index" class="nav-link text-[15px]">Home</a>
            <a href="about" class="nav-link text-[15px]">About</a>
            <a href="compagnie" class="nav-link text-[15px]">compagnies</a>
            <a href="contact" class="nav-link text-[15px]">contact</a>
            <a href="contact" class="nav-link text-[15px]">Reservez</a>
        </div>
    </div>
</header>