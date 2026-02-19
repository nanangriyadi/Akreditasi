<?php
$pageTitle = 'Kontak';
include 'header.php';


$message = '';
$error   = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $body    = trim($_POST['body']    ?? '');

    if (!$name || !$email || !$subject || !$body) {
        $error = 'Semua kolom harus diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Format email tidak valid.';
    } else {
        // Here you would send the email with mail() or a library
        // mail('admin@slbnbadeganponorogo.sch.id', $subject, $body, "From: $email");
        $message = 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.';
    }
}

include 'header.php';
?>

<section class="min-h-screen flex items-center justify-center py-6 px-[7%]
                bg-cover bg-center bg-fixed" style="background-image: url('assets/img/contact-bg.jpg')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- LEFT: Contact Form -->
        <div class="bg-white rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] p-8
                    animate__animated animate__fadeInLeft">
            <h2 class="font-swash text-2xl font-bold uppercase text-gray-800 border-b border-gray-200 pb-5 mb-8">
                Kirim Pesan
            </h2>

            <?php if($message): ?>
            <div class="mb-5 p-4 bg-green-50 border border-green-300 text-green-700 rounded-xl text-sm font-medium">
                ✅ <?= htmlspecialchars($message) ?>
            </div>
            <?php endif; ?>

            <?php if($error): ?>
            <div class="mb-5 p-4 bg-red-50 border border-red-300 text-red-700 rounded-xl text-sm font-medium">
                ❌ <?= htmlspecialchars($error) ?>
            </div>
            <?php endif; ?>

            <form method="POST" action="contact.php" class="space-y-5">
                <input type="text" name="name" placeholder="Nama Lengkap"
                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required class="w-full h-11 px-5 rounded-full bg-gray-100 text-sm text-gray-700 font-medium
                           focus:outline-none focus:ring-2 focus:ring-green-400 transition">

                <input type="email" name="email" placeholder="Alamat Email"
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required class="w-full h-11 px-5 rounded-full bg-gray-100 text-sm text-gray-700 font-medium
                           focus:outline-none focus:ring-2 focus:ring-green-400 transition">

                <input type="text" name="subject" placeholder="Subjek Pesan"
                    value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>" required class="w-full h-11 px-5 rounded-full bg-gray-100 text-sm text-gray-700 font-medium
                           focus:outline-none focus:ring-2 focus:ring-green-400 transition">

                <textarea name="body" placeholder="Tulis pesan Anda di sini..." required rows="5"
                    class="w-full px-5 py-3 rounded-2xl bg-gray-100 text-sm text-gray-700 font-medium
                           focus:outline-none focus:ring-2 focus:ring-green-400 transition resize-none"><?= htmlspecialchars($_POST['body'] ?? '') ?></textarea>

                <button type="submit" class="w-full py-3 bg-[#a12c2f] text-white text-sm font-semibold uppercase rounded-full
                               hover:bg-[#c0373b] hover:scale-[1.02] transition-all duration-200 shadow-md">
                    Kirim Pesan Sekarang
                </button>
            </form>
        </div>

        <!-- RIGHT: Info -->
        <div class="bg-[#a12c2f] rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] p-8 text-white
                    animate__animated animate__fadeInRight">
            <h2 class="font-swash text-2xl font-bold mb-8">Informasi Kontak</h2>

            <ul class="space-y-0">
                <?php
                $contacts = [
                    [
                        'label' => 'Nomor Telepon',
                        'value' => '010-020-0340',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>',
                    ],
                    [
                        'label' => 'Alamat Email',
                        'value' => 'slbnbadeganponorogo.sch.id',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                    ],
                    [
                        'label' => 'Alamat Sekolah',
                        'value' => 'Badegan, Ponorogo, Jawa Timur',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    ],
                    [
                        'label' => 'Website',
                        'value' => 'slbnbadeganponorogo.sch.id',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>',
                    ],
                ];
                foreach($contacts as $i => $c): ?>
                <li class="flex items-start gap-4 border-b border-white/20 pb-6 mb-6 last:border-0 last:mb-0 last:pb-0">
                    <div
                        class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mt-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <?= $c['icon'] ?>
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-semibold text-sm text-white/80 mb-1"><?= $c['label'] ?></h6>
                        <p class="text-base font-bold"><?= htmlspecialchars($c['value']) ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>