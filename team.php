<?php
$pageTitle = 'Team';
include 'header.php';

$team = [
    ['name' => 'TRI SUSILOWATI, S.Pd', 'nip' => 'NIP. 196806012000092001', 'role' => 'Wali Kelas 6A', 'photo' => 'assets/img/team1.jpg', 'color' => 'from-green-400 to-green-600'],
    ['name' => 'TRI NOVEMBRI J, S.Pd', 'nip' => 'NIP. 197111032022212003', 'role' => 'Wali Kelas 6B', 'photo' => 'assets/img/tri nov.jpg', 'color' => 'from-sky-400 to-sky-600'],
    ['name' => 'NUR RISKA P, S.Pd', 'nip' => 'NIP. 199201152022212020', 'role' => 'Wali Kelas VII', 'photo' => 'assets/img/riska.jpg', 'color' => 'from-violet-400 to-violet-600'],
    ['name' => 'NUR ALFIN LAILA, S.Pd', 'nip' => 'NIP. -', 'role' => 'Wali Kelas 10 & 12', 'photo' => 'assets/img/team3.jpg', 'color' => 'from-orange-400 to-orange-600'],
    ['name' => 'BUDI SANTOSO, S.Pd', 'nip' => 'NIP. 197503152005011002', 'role' => 'Guru Matematika', 'photo' => 'assets/img/team1.jpg', 'color' => 'from-blue-400 to-blue-600'],
    ['name' => 'SITI RAHAYU, S.Pd', 'nip' => 'NIP. 198204202010012015', 'role' => 'Guru Bahasa Indonesia', 'photo' => 'assets/img/team3.jpg', 'color' => 'from-pink-400 to-pink-600'],
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<style>
body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    overflow-x: hidden;
}

.font-serif {
    font-family: 'Playfair Display', serif;
}

/* Animasi Floating Halus untuk Foto Modal */
@keyframes professionalFloat {

    0%,
    100% {
        transform: translateY(0) scale(1);
    }

    50% {
        transform: translateY(-15px) scale(1.03);
    }
}

.animate-pro-float {
    animation: professionalFloat 6s ease-in-out infinite;
}

/* Modal Backdrop Blur */
#teacher-modal {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Reveal Animation untuk Elemen dalam Modal */
.info-item {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}

#teacher-modal.open .info-item {
    opacity: 1;
    transform: translateY(0);
}

/* Custom Scrollbar untuk Modal jika konten panjang */
#modal-card::-webkit-scrollbar {
    width: 4px;
}

#modal-card::-webkit-scrollbar-thumb {
    background: #e2e8f0;
    border-radius: 10px;
}
</style>

<section class="bg-gray-50 min-h-screen py-20 px-4 sm:px-8">
    <div class="max-w-7xl mx-auto text-center mb-20">
        <span class="text-green-600 font-bold tracking-[0.4em] text-[10px] sm:text-xs uppercase block mb-4">SLB Negeri
            Badegan Ponorogo</span>
        <h2 class="text-4xl md:text-5xl font-serif text-slate-900 leading-tight">Jajaran <span
                class="text-green-500 italic">Tenaga Pengajar</span></h2>
        <div class="flex items-center justify-center gap-4 mt-8">
            <div class="h-[1px] w-16 bg-gray-200"></div>
            <div class="w-2.5 h-2.5 rounded-full border-2 border-green-500"></div>
            <div class="h-[1px] w-16 bg-gray-200"></div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-10">
        <?php foreach ($team as $member): ?>
        <div class="group bg-white rounded-[2.5rem] p-6 text-center shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] cursor-pointer transition-all duration-500 border border-gray-100/50 flex flex-col items-center"
            onclick="openModal(this)" data-name="<?= htmlspecialchars($member['name']) ?>"
            data-nip="<?= htmlspecialchars($member['nip']) ?>" data-role="<?= htmlspecialchars($member['role']) ?>"
            data-photo="<?= htmlspecialchars($member['photo']) ?>"
            data-gradient="bg-gradient-to-br <?= $member['color'] ?>">

            <div class="relative w-28 h-28 mb-6">
                <div
                    class="absolute inset-0 bg-gradient-to-br <?= $member['color'] ?> rounded-full opacity-10 group-hover:scale-125 transition-transform duration-700">
                </div>
                <img src="<?= $member['photo'] ?>"
                    class="relative w-full h-full object-cover rounded-full border-4 border-white shadow-md z-10">
            </div>

            <span
                class="px-4 py-1.5 rounded-full text-[9px] font-bold text-white uppercase tracking-widest mb-4 bg-gradient-to-r <?= $member['color'] ?> shadow-sm">
                <?= $member['role'] ?>
            </span>
            <h4 class="text-sm font-bold text-slate-800 group-hover:text-green-600 transition-colors duration-300">
                <?= $member['name'] ?></h4>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<div id="teacher-modal" class="invisible opacity-0 fixed inset-0 z-[9999] flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-2xl" onclick="closeModal()"></div>

    <div id="modal-card"
        class="relative w-full max-w-xl bg-white rounded-[3.5rem] shadow-2xl overflow-hidden transform scale-90 translate-y-12 transition-all duration-500 flex flex-col">

        <div id="modal-header" class="h-60 w-full relative flex-shrink-0">
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;">
            </div>

            <button onclick="closeModal()"
                class="absolute top-8 right-8 z-30 bg-black/10 hover:bg-black/30 text-white w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-lg transition-all border border-white/20 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="absolute -bottom-36 left-1/2 -translate-x-1/2 z-20">
                <div id="modal-photo-wrapper"
                    class="w-72 h-72 p-3 bg-white rounded-full shadow-[0_20px_50px_rgba(0,0,0,0.15)] transform scale-50 opacity-0 transition-all duration-700 ease-out">
                    <div class="w-full h-full rounded-full overflow-hidden border-[8px] border-gray-50 bg-gray-100">
                        <img id="modal-photo" src="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-44 pb-14 px-10 sm:px-16 text-center bg-white">
            <div class="info-item flex justify-center" style="transition-delay: 100ms;">
                <span id="modal-badge"
                    class="px-5 py-2 rounded-full text-[10px] font-extrabold text-white uppercase tracking-[0.2em] mb-6 shadow-xl"></span>
            </div>

            <h3 id="modal-name" class="font-serif text-3xl md:text-4xl text-slate-900 mb-3 info-item leading-tight"
                style="transition-delay: 200ms;"></h3>
            <p id="modal-nip"
                class="text-[11px] font-bold text-slate-400 mb-10 info-item tracking-[0.25em] uppercase font-mono"
                style="transition-delay: 300ms;"></p>

            <div class="h-1.5 w-16 mx-auto rounded-full bg-slate-100 mb-12 info-item" style="transition-delay: 400ms;">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 info-item" style="transition-delay: 500ms;">
                <div
                    class="flex items-center gap-4 bg-slate-50 p-5 rounded-[2rem] border border-slate-100 group hover:bg-white hover:shadow-lg transition-all duration-300">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-2xl bg-white shadow-sm flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                        🎓</div>
                    <div class="text-left overflow-hidden">
                        <p class="text-[9px] uppercase font-black text-green-600 tracking-wider mb-0.5">Status</p>
                        <p class="text-[13px] font-bold text-slate-700 truncate">Pengajar Ahli</p>
                    </div>
                </div>

                <div
                    class="flex items-center gap-4 bg-slate-50 p-5 rounded-[2rem] border border-slate-100 group hover:bg-white hover:shadow-lg transition-all duration-300">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-2xl bg-white shadow-sm flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                        🏢</div>
                    <div class="text-left overflow-hidden">
                        <p class="text-[9px] uppercase font-black text-green-600 tracking-wider mb-0.5">Instansi</p>
                        <p class="text-[13px] font-bold text-slate-700 truncate">SLBN Badegan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function openModal(card) {
    const d = card.dataset;
    const modal = document.getElementById('teacher-modal');
    const cardInner = document.getElementById('modal-card');
    const photoWrap = document.getElementById('modal-photo-wrapper');
    const badge = document.getElementById('modal-badge');

    // Isi Data
    document.getElementById('modal-photo').src = d.photo;
    document.getElementById('modal-name').textContent = d.name;
    document.getElementById('modal-nip').textContent = d.nip;
    badge.textContent = d.role;

    // Setup Tema Warna
    document.getElementById('modal-header').className = 'h-60 w-full relative flex-shrink-0 ' + d.gradient;
    badge.className =
        'px-5 py-2 rounded-full text-[10px] font-extrabold text-white uppercase tracking-[0.2em] mb-6 shadow-xl ' + d
        .gradient;

    // Tampilkan Modal
    modal.classList.remove('invisible', 'opacity-0');
    modal.classList.add('open');

    // Triger Animasi Entrance
    requestAnimationFrame(() => {
        cardInner.classList.remove('scale-90', 'translate-y-12');
        cardInner.classList.add('scale-100', 'translate-y-0');

        photoWrap.classList.remove('scale-50', 'opacity-0');
        photoWrap.classList.add('scale-100', 'opacity-100', 'animate-pro-float');
    });

    // Kunci Scroll Body
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('teacher-modal');
    const cardInner = document.getElementById('modal-card');
    const photoWrap = document.getElementById('modal-photo-wrapper');

    // Animasi Keluar
    cardInner.classList.add('scale-90', 'translate-y-12');
    photoWrap.classList.remove('animate-pro-float', 'scale-100', 'opacity-100');
    photoWrap.classList.add('scale-50', 'opacity-0');
    modal.classList.remove('open');

    setTimeout(() => {
        modal.classList.add('invisible', 'opacity-0');
        document.body.style.overflow = '';
    }, 400);
}

// Tutup dengan ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
});
</script>

<?php include 'footer.php'; ?>
