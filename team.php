<?php
$pageTitle = 'Team';
include 'header.php';

$team = [
    [
        'name' => 'TRI SUSILOWATI, S.Pd',
        'nip' => 'NIP. 196806012000092001',
        'role' => 'Wali Kelas 6A',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-green-400 to-green-600',
    ],
    [
        'name' => 'TRI NOVEMBRI J, S.Pd',
        'nip' => 'NIP. 197111032022212003',
        'role' => 'Wali Kelas 6B',
        'photo' => 'assets/img/tri nov.jpg',
        'color' => 'from-sky-400 to-sky-600',
    ],
    [
        'name' => 'NUR RISKA P, S.Pd',
        'nip' => 'NIP. 199201152022212020',
        'role' => 'Wali Kelas VII',
        'photo' => 'assets/img/riska.jpg',
        'color' => 'from-violet-400 to-violet-600',
    ],
    [
        'name' => 'NUR ALFIN LAILA, S.Pd',
        'nip' => 'NIP. -',
        'role' => 'Wali Kelas 10 & 12',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-orange-400 to-orange-600',
    ],
    [
        'name' => 'BUDI SANTOSO, S.Pd',
        'nip' => 'NIP. 197503152005011002',
        'role' => 'Guru Matematika',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-blue-400 to-blue-600',
    ],
    [
        'name' => 'SITI RAHAYU, S.Pd',
        'nip' => 'NIP. 198204202010012015',
        'role' => 'Guru Bahasa Indonesia',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-pink-400 to-pink-600',
    ],
    [
        'name' => 'AHMAD FAUZI, S.Pd',
        'nip' => 'NIP. 198801102014011008',
        'role' => 'Guru IPA',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-teal-400 to-teal-600',
    ],
    [
        'name' => 'DEWI ANGGRAINI, S.Pd',
        'nip' => 'NIP. 199005172016032003',
        'role' => 'Guru IPS',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-rose-400 to-rose-600',
    ],
    [
        'name' => 'HENDRA WIJAYA, S.Pd',
        'nip' => 'NIP. 197812202006041010',
        'role' => 'Guru Olahraga',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-amber-400 to-amber-600',
    ],
    [
        'name' => 'YULIANA SAFITRI, S.Pd',
        'nip' => 'NIP. 199308252018032012',
        'role' => 'Guru Agama',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-lime-400 to-lime-600',
    ],
    [
        'name' => 'RIZKY PRATAMA, S.Pd',
        'nip' => 'NIP. 199507182019011005',
        'role' => 'Guru Bahasa Inggris',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-cyan-400 to-cyan-600',
    ],
    [
        'name' => 'ENDAH KURNIAWATI, S.Pd',
        'nip' => 'NIP. 198602132012012009',
        'role' => 'Guru Seni Budaya',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-fuchsia-400 to-fuchsia-600',
    ],
    [
        'name' => 'WAHYU SETIAWAN, S.Pd',
        'nip' => 'NIP. 197609102003011014',
        'role' => 'Guru PKn',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-red-400 to-red-600',
    ],
    [
        'name' => 'FITRI HANDAYANI, S.Pd',
        'nip' => 'NIP. 199104232020012007',
        'role' => 'Guru Prakarya',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-indigo-400 to-indigo-600',
    ],
    [
        'name' => 'DONY HERMAWAN, S.Pd',
        'nip' => 'NIP. 198803152013011006',
        'role' => 'Guru TIK',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-emerald-400 to-emerald-600',
    ],
    [
        'name' => 'LESTARI WULANDARI, S.Pd',
        'nip' => 'NIP. 199209282021012011',
        'role' => 'Guru Matematika',
        'photo' => 'assets/img/team3.jpg',
        'color' => 'from-yellow-400 to-yellow-600',
    ],
    [
        'name' => 'MUHAMAD IQBAL, S.Pd',
        'nip' => 'NIP. 199411072022011003',
        'role' => 'Guru IPA',
        'photo' => 'assets/img/team1.jpg',
        'color' => 'from-purple-400 to-purple-600',
    ],
];
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@300;400;500&display=swap');

.team-section {
    font-family: 'DM Sans', sans-serif;
}

.team-title {
    font-family: 'Playfair Display', serif;
}

.teacher-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 24px 16px 20px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.teacher-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    border-radius: 16px 16px 0 0;
    background: var(--card-accent, #22c55e);
}

.teacher-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.13);
}

.photo-ring {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    margin: 0 auto 14px;
    position: relative;
    padding: 3px;
    background: var(--card-accent, linear-gradient(135deg, #22c55e, #16a34a));
}

.photo-ring::after {
    content: '';
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    background: var(--card-accent, #22c55e);
    opacity: 0.2;
    z-index: 0;
}

.photo-ring img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    object-position: top;
    position: relative;
    z-index: 1;
    border: 3px solid #fff;
}

.role-badge {
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #fff;
    padding: 3px 10px;
    border-radius: 20px;
    margin-bottom: 8px;
}

.teacher-name {
    font-size: 12.5px;
    font-weight: 600;
    color: #1a1a2e;
    line-height: 1.35;
    margin-bottom: 4px;
}

.teacher-nip {
    font-size: 10px;
    color: #9ca3af;
    font-weight: 400;
}

.grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    max-width: 900px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .grid-4 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .grid-4 {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
}

.fade-in-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.divider-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #22c55e;
    display: inline-block;
    margin: 0 6px;
    vertical-align: middle;
}

/* ── Hover: zoom-out reveal ── */
.teacher-card {
    cursor: pointer;
}

.photo-ring {
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1),
        box-shadow 0.35s ease;
}

.teacher-card:hover .photo-ring {
    transform: scale(1.22);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.18);
}

.photo-ring img {
    transition: transform 0.35s ease;
}

/* ── Modal Overlay ── */
#teacher-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(10, 10, 20, 0.65);
    backdrop-filter: blur(6px);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
}

#teacher-modal.open {
    opacity: 1;
    pointer-events: all;
}

#modal-card {
    background: #fff;
    border-radius: 24px;
    width: 75vw;
    max-width: 680px;
    max-height: 88vh;
    overflow: hidden;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: scale(0.85) translateY(30px);
    transition: transform 0.35s cubic-bezier(0.34, 1.3, 0.64, 1);
    display: flex;
    flex-direction: column;
}

#teacher-modal.open #modal-card {
    transform: scale(1) translateY(0);
}

#modal-header {
    position: relative;
    height: 240px;
    overflow: hidden;
    flex-shrink: 0;
}

#modal-header-bg {
    position: absolute;
    inset: 0;
    background: var(--modal-gradient, linear-gradient(135deg, #4ade80, #16a34a));
    opacity: 0.92;
}

#modal-header-pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.12) 0%, transparent 60%),
        radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
}

#modal-photo-wrap {
    position: absolute;
    bottom: -75px;
    left: 50%;
    transform: translateX(-50%);
    width: 180px;
    height: 180px;
    border-radius: 50%;
    padding: 5px;
    background: #fff;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
    z-index: 2;
}

#modal-photo-wrap img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    object-position: top;
    border: 4px solid #fff;
}

#modal-close {
    position: absolute;
    top: 14px;
    right: 16px;
    width: 34px;
    height: 34px;
    background: rgba(255, 255, 255, 0.25);
    border: none;
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
    z-index: 10;
    line-height: 1;
}

#modal-close:hover {
    background: rgba(255, 255, 255, 0.45);
}

#modal-body {
    padding: 110px 36px 36px;
    text-align: center;
    overflow-y: auto;
}

#modal-role {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #fff;
    padding: 4px 14px;
    border-radius: 20px;
    margin-bottom: 14px;
}

#modal-name {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 6px;
}

#modal-nip {
    font-size: 12px;
    color: #9ca3af;
    margin-bottom: 20px;
}

#modal-divider {
    width: 40px;
    height: 3px;
    border-radius: 99px;
    margin: 0 auto 20px;
}

.modal-info-row {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 13px;
    color: #4b5563;
    margin-bottom: 10px;
}

.modal-info-icon {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}

@media (max-width: 640px) {
    #modal-card {
        width: 92vw;
    }

    #modal-body {
        padding: 68px 20px 28px;
    }
}
</style>

<section class="team-section min-h-screen py-8 px-[5%]">

    <!-- Heading -->
    <div class="text-center mb-8 fade-in-up">
        <p class="text-xs font-semibold tracking-[0.2em] uppercase text-green-500 mb-2">SLB Negeri Badegan Ponorogo</p>
        <h2 class="team-title text-3xl font-bold text-gray-900">
            Jajaran <span class="text-green-500">Tenaga Pengajar</span>
        </h2>
        <div class="flex items-center justify-center mt-3">
            <div class="h-px w-12 bg-gray-200"></div>
            <span class="divider-dot"></span>
            <div class="h-px w-12 bg-gray-200"></div>
        </div>
        <p class="text-gray-400 mt-3 text-sm">Guru profesional berdedikasi tinggi untuk generasi terbaik bangsa</p>
    </div>

    <!-- Cards Grid -->
    <div class="grid-4">
        <?php
        $accentColors = [
            'from-green-400 to-green-600'   => 'linear-gradient(135deg,#4ade80,#16a34a)',
            'from-sky-400 to-sky-600'        => 'linear-gradient(135deg,#38bdf8,#0284c7)',
            'from-violet-400 to-violet-600'  => 'linear-gradient(135deg,#a78bfa,#7c3aed)',
            'from-orange-400 to-orange-600'  => 'linear-gradient(135deg,#fb923c,#ea580c)',
            'from-blue-400 to-blue-600'      => 'linear-gradient(135deg,#60a5fa,#2563eb)',
            'from-pink-400 to-pink-600'      => 'linear-gradient(135deg,#f472b6,#db2777)',
            'from-teal-400 to-teal-600'      => 'linear-gradient(135deg,#2dd4bf,#0f766e)',
            'from-rose-400 to-rose-600'      => 'linear-gradient(135deg,#fb7185,#e11d48)',
            'from-amber-400 to-amber-600'    => 'linear-gradient(135deg,#fbbf24,#d97706)',
            'from-lime-400 to-lime-600'      => 'linear-gradient(135deg,#a3e635,#65a30d)',
            'from-cyan-400 to-cyan-600'      => 'linear-gradient(135deg,#22d3ee,#0891b2)',
            'from-fuchsia-400 to-fuchsia-600'=> 'linear-gradient(135deg,#e879f9,#a21caf)',
            'from-red-400 to-red-600'        => 'linear-gradient(135deg,#f87171,#dc2626)',
            'from-indigo-400 to-indigo-600'  => 'linear-gradient(135deg,#818cf8,#4338ca)',
            'from-emerald-400 to-emerald-600'=> 'linear-gradient(135deg,#34d399,#059669)',
            'from-yellow-400 to-yellow-600'  => 'linear-gradient(135deg,#facc15,#ca8a04)',
            'from-purple-400 to-purple-600'  => 'linear-gradient(135deg,#c084fc,#9333ea)',
        ];

        foreach ($team as $i => $member):
            $gradient = $accentColors[$member['color']] ?? 'linear-gradient(135deg,#4ade80,#16a34a)';
        ?>
        <div class="teacher-card fade-in-up" onclick="openModal(this)"
            data-name="<?= htmlspecialchars($member['name']) ?>" data-nip="<?= htmlspecialchars($member['nip']) ?>"
            data-role="<?= htmlspecialchars($member['role']) ?>" data-photo="<?= htmlspecialchars($member['photo']) ?>"
            data-gradient="<?= htmlspecialchars($gradient) ?>"
            data-initials="<?= urlencode(substr($member['name'], 0, 2)) ?>"
            style="--card-accent: <?= $gradient ?>; animation-delay: <?= ($i % 4) * 0.08 + floor($i / 4) * 0.1 ?>s">

            <!-- Circular Photo -->
            <div class="photo-ring" style="background: <?= $gradient ?>">
                <img src="<?= htmlspecialchars($member['photo']) ?>" alt="<?= htmlspecialchars($member['name']) ?>"
                    onerror="this.src='https://placehold.co/90x90/e5e7eb/6b7280?text=<?= urlencode(substr($member['name'], 0, 2)) ?>'">
            </div>

            <!-- Role Badge -->
            <span class="role-badge" style="background: <?= $gradient ?>">
                <?= htmlspecialchars($member['role']) ?>
            </span>

            <!-- Name -->
            <p class="teacher-name"><?= htmlspecialchars($member['name']) ?></p>

            <!-- NIP -->
            <p class="teacher-nip"><?= htmlspecialchars($member['nip']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>

</section>

<!-- ── Modal Popup ── -->
<div id="teacher-modal" onclick="closeModalOnBackdrop(event)">
    <div id="modal-card">
        <div id="modal-header">
            <div id="modal-header-bg"></div>
            <div id="modal-header-pattern"></div>
            <div
                style="position:absolute;top:-20px;right:-20px;width:120px;height:120px;border-radius:50%;background:rgba(255,255,255,0.06);">
            </div>
            <div
                style="position:absolute;bottom:20px;left:-30px;width:90px;height:90px;border-radius:50%;background:rgba(255,255,255,0.05);">
            </div>
            <button id="modal-close" onclick="closeModal()">&#x2715;</button>
            <div id="modal-photo-wrap">
                <img id="modal-photo" src="" alt="">
            </div>
        </div>
        <div id="modal-body">
            <span id="modal-role" class="role-badge"></span>
            <h3 id="modal-name"></h3>
            <p id="modal-nip" style="font-size:12px;color:#9ca3af;margin-bottom:20px;"></p>
            <div id="modal-divider" style="width:40px;height:3px;border-radius:99px;margin:0 auto 20px;"></div>
            <div class="modal-info-row">
                <div class="modal-info-icon" style="background:rgba(0,0,0,0.06)">🏫</div>
                <span>Tenaga Pengajar Profesional</span>
            </div>
            <div class="modal-info-row">
                <div class="modal-info-icon" style="background:rgba(0,0,0,0.06)">📋</div>
                <span id="modal-nip-detail"></span>
            </div>
            <div class="modal-info-row">
                <div class="modal-info-icon" style="background:rgba(0,0,0,0.06)">🎓</div>
                <span>Berpengalaman &amp; Berdedikasi Tinggi</span>
            </div>
        </div>
    </div>
</div>

<script>
function openModal(card) {
    var name = card.dataset.name;
    var nip = card.dataset.nip;
    var role = card.dataset.role;
    var photo = card.dataset.photo;
    var gradient = card.dataset.gradient;
    var initials = card.dataset.initials;
    var fallback = "https://placehold.co/110x110/e5e7eb/6b7280?text=" + initials;

    document.getElementById("modal-header-bg").style.background = gradient;
    document.getElementById("modal-divider").style.background = gradient;
    document.getElementById("modal-role").style.background = gradient;

    var img = document.getElementById("modal-photo");
    img.src = photo;
    img.onerror = function() {
        img.src = fallback;
    };
    img.alt = name;

    document.getElementById("modal-name").textContent = name;
    document.getElementById("modal-nip").textContent = nip;
    document.getElementById("modal-role").textContent = role;
    document.getElementById("modal-nip-detail").textContent = nip;

    document.getElementById("teacher-modal").classList.add("open");
    document.body.style.overflow = "hidden";
}

function closeModal() {
    document.getElementById("teacher-modal").classList.remove("open");
    document.body.style.overflow = "";
}

function closeModalOnBackdrop(e) {
    if (e.target === document.getElementById("teacher-modal")) closeModal();
}

document.addEventListener("keydown", function(e) {
    if (e.key === "Escape") closeModal();
});
</script>

<?php include 'footer.php'; ?>
