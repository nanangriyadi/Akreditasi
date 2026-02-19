<?php
$pageTitle = 'Tentang Kami';
include 'header.php';
?>

<section class="min-h-screen py-6 px-[7%]">

    <!-- Heading -->
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h2 class="font-swash text-4xl font-bold drop-shadow-[1px_1px_3px_rgba(5,5,141,0.7)]">
            Tentang <span class="text-green-500">Kami</span>
        </h2>
        <h3 class="text-2xl font-semibold mt-2 text-gray-700">Kelompok I</h3>
        <div class="w-20 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Row: Image + Text -->
    <div class="flex flex-col md:flex-row gap-10 items-center max-w-6xl mx-auto">

        <!-- Image -->
        <div class="flex-1 animate__animated animate__backInLeft">
            <img src="assets/img/about.jpg" alt="Tentang Kami"
                onerror="this.src='https://placehold.co/600x420/26ad14/ffffff?text=SLBN+Badegan'"
                class="w-full rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] object-cover">
        </div>

        <!-- Content -->
        <div class="flex-1 space-y-5 animate__animated animate__fadeInRight">

            <div class="flex items-start gap-3">
                <span class="mt-1 flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <p class="text-base leading-relaxed text-gray-700 text-justify">
                    <strong class="text-gray-900">Sarana, Prasarana, dan Hubungan Masyarakat</strong> saling terkait
                    dalam
                    menciptakan lingkungan pendidikan yang efektif bagi siswa dengan kebutuhan khusus.
                </p>
            </div>

            <div class="flex items-start gap-3">
                <span class="mt-1 flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <p class="text-base leading-relaxed text-gray-700 text-justify">
                    Sarana dan prasarana yang baik akan mendukung proses belajar mengajar yang lebih
                    <strong class="text-gray-900">inklusif</strong>, sementara hubungan masyarakat yang efektif
                    akan membantu dalam memperoleh dukungan eksternal dari orang tua, pemerintah, maupun masyarakat.
                </p>
            </div>

            <div class="flex items-start gap-3">
                <span class="mt-1 flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <p class="text-base leading-relaxed text-gray-700 text-justify">
                    Keterlibatan masyarakat melalui humas akan memperkuat pemahaman tentang pentingnya
                    penyediaan sarana dan prasarana yang sesuai, serta memberikan dukungan lebih besar
                    bagi sekolah dalam mewujudkan <strong class="text-gray-900">pendidikan yang setara dan
                        inklusif</strong>.
                </p>
            </div>

            <div class="flex items-start gap-3">
                <span class="mt-1 flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <p class="text-base leading-relaxed text-gray-700 text-justify">
                    Secara keseluruhan, pengelolaan sarana, prasarana, dan hubungan masyarakat yang baik
                    akan berkontribusi pada keberhasilan pendidikan di sekolah khusus, memfasilitasi
                    pengembangan potensi maksimal setiap siswa.
                </p>
            </div>

            <div class="pt-4">
                <a href="portfolio.php"
                    class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-full shadow hover:bg-green-500 hover:scale-105 transition-all duration-200">
                    Lihat Portofolio →
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>