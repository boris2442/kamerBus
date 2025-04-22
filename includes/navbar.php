
<header class="flex items-center justify-between p-4 md:px-10 shadow-sm bg-white dark:bg-[#121212]">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="publics\assets\kamerbuslogojpg.jpg" alt="KamerBus Logo" class=" w-[70px] h-[70px] md:h-[100px] md:w-[100px] rounded-[50%]" />
        </div>

        <!-- Dark Mode Toggle -->
        <button id="themeToggle" class="text-2xl md:mr-4 focus:outline-none">
            <span id="themeIcon" class="material-symbols-outlined">dark_mode</span>
        </button>

        <!-- Hamburger Button (Mobile) -->
        <button id="menuToggle" class="md:hidden text-3xl focus:outline-none">
            ☰
        </button>

        <!-- Nav Menu (Desktop) -->
        <nav class="hidden md:flex space-x-8 text-lg font-medium">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="contact.php" class="nav-link">Reservez</a>
        </nav>

        <!-- Fullscreen Menu (Mobile) -->
        <div id="mobileMenu" class="fixed inset-0 bg-white dark:bg-[#121212] z-50 hidden flex-col items-center justify-center space-y-8 text-2xl font-semibold ">
            <!-- Close Button -->
            <button id="closeMenu" class="absolute top-5 right-5 text-2xl">&times;</button>
            <div class="flex flex-col gap-[10px]">
                <a href="index.php" class="nav-link text-[15px]">Home</a>
                <a href="about.php" class="nav-link text-[15px]">About</a>
                <a href="contact.php" class="nav-link text-[15px]">Reservez</a>
            </div>
        </div>
    </header>

    <style>
        
    </style>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Dark mode toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');

        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeIcon.textContent = 'light_mode';
        } else {
            document.documentElement.classList.remove('dark');
            themeIcon.textContent = 'dark_mode';
        }

        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            themeIcon.textContent = isDark ? 'light_mode' : 'dark_mode';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    </script>

    <!-- Icônes Google (à inclure dans le <head> de ta page) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />