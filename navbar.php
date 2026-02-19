<?php
// Determine current page for active nav state
$current = basename($_SERVER['PHP_SELF'], '.php');
$navLinks = [
    ['file' => 'index',     'label' => 'Home'],
    ['file' => 'about',     'label' => 'Tentang Kami'],
    ['file' => 'portfolio', 'label' => 'Portofolio'],
    ['file' => 'team',      'label' => 'Team'],
    ['file' => 'contact',   'label' => 'Kontak'],
];
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-md border-b border-green-500">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">

        <!-- Logo -->
        <a href="index.php" class="font-swash text-3xl font-extrabold italic text-white drop-shadow-[0_1px_3px_rgba(231,237,41,0.5)]">
            SLBN <span class="text-green-500">Badegan</span>
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-1">
            <?php foreach ($navLinks as $nav): ?>
                <a href="<?= $nav['file'] ?>.php"
                   class="relative px-4 py-2 text-sm font-bold transition-colors duration-200
                          after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2
                          after:h-0.5 after:bg-green-500 after:transition-all after:duration-300
                          <?= $current === $nav['file']
                              ? 'text-green-400 after:w-1/2'
                              : 'text-white hover:text-green-400 after:w-0 hover:after:w-1/2' ?>">
                    <?= $nav['label'] ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Hamburger -->
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
            <svg id="icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/95 border-t border-green-500/30">
        <?php foreach ($navLinks as $nav): ?>
            <a href="<?= $nav['file'] ?>.php"
               class="block px-6 py-3 text-sm font-bold transition-colors
                      <?= $current === $nav['file']
                          ? 'text-green-400 bg-green-500/10'
                          : 'text-white hover:text-green-400 hover:bg-green-500/10' ?>">
                <?= $nav['label'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<script>
    const toggle = document.getElementById('menu-toggle');
    const menu   = document.getElementById('mobile-menu');
    const iconO  = document.getElementById('icon-open');
    const iconC  = document.getElementById('icon-close');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        iconO.classList.toggle('hidden');
        iconC.classList.toggle('hidden');
    });
</script>
