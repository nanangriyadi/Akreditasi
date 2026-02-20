<?php
$pageTitle = 'Team';
include 'header.php';


$team = [
[
'name' => 'TRI SUSILOWATI, S.Pd',
'nip' => 'NIP. 196806012000092001',
'role' => 'Wali Kelas 6',
'photo' => 'assets/img/team1.jpg',
'color' => 'from-green-400 to-green-600',
],
[
'name' => 'TRI NOVEMBRI J, S.Pd',
'nip' => 'NIP. 197111032022212003',
'role' => 'Wali Kelas 6',
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
'photo' => 'assets/img/team4.jpg',
'color' => 'from-orange-400 to-orange-600',
],
];

include 'header.php';
?>

<section class="min-h-screen py-6 px-[7%]">

    <!-- Heading -->
    <div class="text-center mb-4 animate__animated animate__fadeIn">
        <h2 class="font-swash text-4xl font-bold drop-shadow-[1px_1px_3px_rgba(1,1,3,1)]">
            Jajaran <span class="text-green-500">Team</span>
        </h2>
        <p class="text-gray-500 mt-2 text-base">Kami Adalah Team Terbaik untuk mempersembahkan data</p>
        <div class="w-20 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Cards -->
    <div class="flex flex-wrap justify-center gap-8 mt-12">
        <?php foreach($team as $i => $member): ?>
        <div class="w-[clamp(220px,18rem,280px)] rounded-2xl overflow-hidden shadow-[0_20px_30px_rgba(19,18,18,0.25)]
                    bg-white hover:shadow-[0_25px_40px_rgba(19,18,18,0.35)] hover:-translate-y-2
                    transition-all duration-300 animate__animated animate__rubberBand"
            style="animation-delay: <?= $i * 0.1 ?>s">

            <!-- Photo -->
            <div class="relative overflow-hidden h-56">
                <img src="<?= htmlspecialchars($member['photo']) ?>" alt="<?= htmlspecialchars($member['name']) ?>"
                    onerror="this.src='https://placehold.co/280x224/e5e7eb/6b7280?text=<?= urlencode($member['name']) ?>'"
                    class="w-full h-full object-cover object-top transition-transform duration-500 hover:scale-105">
                <!-- Gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <!-- Body -->
            <div class="p-5 bg-gradient-to-br from-white to-gray-50">
                <!-- Role badge -->
                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-white shadow
                             bg-gradient-to-b <?= $member['color'] ?>">
                    <?= htmlspecialchars($member['role']) ?>
                </span>

                <h4
                    class="mt-3 text-sm font-bold text-gray-900 leading-snug drop-shadow-[1px_1px_3px_rgba(5,5,141,0.3)]">
                    <?= htmlspecialchars($member['name']) ?>
                </h4>

                <p class="mt-1 text-xs text-gray-500 font-medium">
                    <?= htmlspecialchars($member['nip']) ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'footer.php'; ?>
