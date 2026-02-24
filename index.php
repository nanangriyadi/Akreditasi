<?php
$pageTitle = 'Home';
$current = 'index';

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - SLBN Badegan Ponorogo</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#26ad14'
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                    swash: ['Berkshire Swash', 'cursive'],
                }
            }
        }
    }
    </script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #fff;
        color: #111;
    }

    .font-swash {
        font-family: 'Berkshire Swash', cursive;
    }


    /* Card hover */
    .info-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    /* Scroll indicator pulse */
    @keyframes scrollBounce {

        0%,
        100% {
            transform: translateX(-50%) translateY(0);
        }

        50% {
            transform: translateX(-50%) translateY(8px);
        }
    }

    .scroll-indicator {
        animation: scrollBounce 1.6s ease-in-out infinite;
    }

    /* Hero gradient text shimmer */
    .shimmer-text {
        background: linear-gradient(90deg, #26ad14, #7ee83f, #26ad14);
        background-size: 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 3s linear infinite;
    }

    @keyframes shimmer {
        0% {
            background-position: 0%
        }

        100% {
            background-position: 200%
        }
    }
    </style>
</head>

<body>

    <!-- ═══════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════ -->



    <!-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
    <section class="relative min-h-screen flex items-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('assets/img/home2.jpg')">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-black/30"></div>

        <!-- Decorative green glow -->
        <div class="absolute top-1/3 left-[5%] w-64 h-64 bg-green-500/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-1/4 right-[10%] w-48 h-48 bg-green-400/10 rounded-full blur-2xl pointer-events-none">
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 px-[7%] max-w-3xl animate__animated animate__fadeInLeft animate__slower">
            <img class="img-home animate__animated animate__swing animate__delay-3s" src="/assets/img/logo.png"
                alt="deskripsi gambar" width="95" height="95">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-green-500/20 border border-green-500/40 rounded-full
                    px-4 py-1.5 mb-5 backdrop-blur-sm">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <p class="text-green-300 text-xs font-semibold uppercase tracking-widest">
                    SLBN Badegan Ponorogo
                </p>
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight
                   drop-shadow-[3px_3px_6px_rgba(0,0,0,0.9)]">
                Penilaian Akreditasi<br>
                <span class="shimmer-text">Sekolah</span><br>
                Tahun 2026
            </h1>

            <div class="mt-4 w-16 h-1 bg-green-500 rounded-full"></div>

            <p class="mt-5 text-lg md:text-xl text-gray-300 font-light leading-relaxed max-w-xl">
                Menyajikan data sesuai realita — transparan, akuntabel, dan dapat dipercaya.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="about.php" class="inline-flex items-center gap-2 px-8 py-3 text-base font-semibold text-white
                      bg-green-600 rounded-full shadow-lg shadow-green-900/40
                      hover:bg-green-500 hover:scale-105 hover:shadow-green-500/30 transition-all duration-200">
                    Tentang Kami
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="portfolio.php" class="inline-flex items-center gap-2 px-8 py-3 text-base font-semibold text-white
                      border-2 border-white/40 rounded-full backdrop-blur-sm
                      hover:border-green-400 hover:text-green-400 hover:scale-105 transition-all duration-200">
                    Lihat Data
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Stats row -->
            <div class="mt-12 flex flex-wrap gap-6">
                <?php
            $stats = [
                ['num' => '15', 'label' => 'Sarana & Prasarana'],
                ['num' => '85', 'label' => 'Peserta Didik'],
                ['num' => '19',  'label' => 'Tenaga Pengajar'],
            ];
            foreach($stats as $s): ?>
                <div class="text-white">
                    <div class="text-3xl font-extrabold text-green-400"><?= $s['num'] ?>+</div>
                    <div class="text-xs text-gray-400 mt-0.5 uppercase tracking-wide"><?= $s['label'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <a href="#info-cards"
            class="scroll-indicator absolute bottom-8 left-1/2 text-white/50 hover:text-green-400 transition-colors">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
    </section>

    <!-- ═══════════════════════════════════════════
     QUICK INFO CARDS
═══════════════════════════════════════════ -->
    <section id="info-cards" class="py-20 px-[7%] bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="font-swash text-3xl font-bold text-gray-800">
                Apa yang Kami <span class="text-green-500">Sajikan</span>
            </h2>
            <div class="w-16 h-1 bg-green-500 mx-auto mt-3 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-7 max-w-5xl mx-auto">
            <?php
        $cards = [
            [
                'icon'  => '🏫',
                'title' => 'Telaah Dokumen',
                'desc'  => 'Daftar portofolio dan dokumen pendukung indikator sekolah.',
                'link'  => 'portfolio.php',
                'color' => 'border-green-400',
                'badge' => 'bg-green-100 text-green-700',
                'count' => '15 Fasilitas',
            ],
            [
                'icon'  => '👥',
                'title' => 'Tim Pengajar',
                'desc'  => 'Tenaga pendidik berpengalaman dan berdedikasi tinggi untuk setiap siswa.',
                'link'  => 'team.php',
                'color' => 'border-violet-400',
                'badge' => 'bg-violet-100 text-violet-700',
                'count' => '4 Pengajar',
            ],
        ];
        foreach ($cards as $i => $c): ?>
            <div class="info-card bg-white rounded-2xl p-7 shadow-md border-t-4 <?= $c['color'] ?>
                    animate__animated animate__fadeInUp"
                style="animation-delay: <?= $i * 0.15 ?>s; animation-fill-mode: both;">

                <div class="text-5xl mb-5"><?= $c['icon'] ?></div>

                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold mb-3 <?= $c['badge'] ?>">
                    <?= $c['count'] ?>
                </span>

                <h3 class="text-lg font-bold text-gray-900 mb-2"><?= $c['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-5"><?= $c['desc'] ?></p>

                <a href="<?= $c['link'] ?>" class="inline-flex items-center gap-1 text-green-600 text-sm font-bold
                      hover:text-green-500 hover:gap-2 transition-all duration-200">
                    Selengkapnya
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
    <footer class="bg-[#202020] text-white text-center py-6 border-t border-green-500">
        <p class="text-sm text-gray-400">
            Copyright &copy; <?= date('Y') ?>
            <span class="text-sky-400 font-bold">nanangriyadi</span>
            Workforce Studio &mdash; Design: templatemu
        </p>

        <!-- Social Icons -->
        <div class="flex justify-center gap-5 mt-4">
            <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center
                           text-white hover:bg-green-500 hover:scale-110 transition-all duration-200"
                aria-label="Twitter">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-8.384 4.482A13.944 13.944 0 011.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417A9.868 9.868 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A9.936 9.936 0 0024 4.557z" />
                </svg>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center
                           text-white hover:bg-green-500 hover:scale-110 transition-all duration-200"
                aria-label="Instagram">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                </svg>
            </a>
            <a href="https://slbnbadeganponorogo.sch.id" target="_blank" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center
                  text-white hover:bg-green-500 hover:scale-110 transition-all duration-200" aria-label="Website">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9" />
                </svg>
            </a>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════
     JS — Mobile Menu Toggle
═══════════════════════════════════════════ -->
    <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const iconO = document.getElementById('icon-open');
    const iconC = document.getElementById('icon-close');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        iconO.classList.toggle('hidden');
        iconC.classList.toggle('hidden');
    });
    // Close menu on link click
    menu.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
            menu.classList.add('hidden');
            iconO.classList.remove('hidden');
            iconC.classList.add('hidden');
        });
    });
    </script>

</body>

</html>
